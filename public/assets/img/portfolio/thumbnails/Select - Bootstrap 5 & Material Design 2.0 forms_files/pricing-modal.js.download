jQuery(function ($) {

  var globalData = [
    currentContent => '',
    currentProduct => ''
  ];

  $('a[data-target="#modalPricing"]').on('click', function () {

    var $this = $(this);
    var $modalContent = $this.attr('data-pricing-content');
    var $modalProduct = $this.attr('data-pricing-product');
    var $modalPreloader = $('.pricing-modal-preloader');
    var $modalContentHtml = $('#modalPricingContent');

    globalData.currentContent = $modalContent;
    globalData.currentProduct = $modalProduct;

    $modalContentHtml.html('');
    $modalPreloader.show();

    const modalPricingContent = getPricingCachedValue('get_pricing_modal' + ':' + $modalContent + ':' + $modalProduct);

    if (modalPricingContent) {

      $modalPreloader.hide();
      $modalContentHtml.html(JSON.parse(modalPricingContent));
      afterContentLoaded(globalData);
    } else {

      $.ajax({
        type: 'POST',
        url: '/wp-admin/admin-ajax.php',
        data: {
          action: 'get_pricing_modal',
          modal: $modalContent,
          product: $modalProduct ? $modalProduct : null
        }
      }).done(function (response) {

        $modalPreloader.hide();
        $modalContentHtml.html(JSON.parse(response));
        cachePricingResult('get_pricing_modal' + ':' + $modalContent + ':' + $modalProduct, response);
        afterContentLoaded(globalData);
      }).fail(console.error);
    }
  });

  const modalPricingContentCache = {};

  function cachePricingResult(key, value) {
    modalPricingContentCache[key] = value;
  }
  function getPricingCachedValue(key) {
    return modalPricingContentCache[key];
  }
});

function afterContentLoaded(globalData) {

  var $pricingModalForm = $('.pricing-modal-form');
  var $pricingContactForm = $('.pricing-contact-form');
  var $pricingVariationInput = $pricingModalForm.find('input[name=pricing_variation]');
  var $pricingProductId0Input = $pricingModalForm.find('input[name=pricing_product_id_0]');
  var $pricingProductId1Input = $pricingModalForm.find('input[name=pricing_product_id_1]');

  $('.pricing-modal-tab').on('click', function () {

    var $this = $(this);
    var $variation = $this.attr('data-product-variation');

    $pricingVariationInput.val($variation);
  });

  $('.pricing-modal-product-tab').on('click', function () {

    var $this = $(this);
    var $product_id = $this.attr('data-product-id');

    if ($pricingVariationInput.val() === '0') {

      $pricingProductId0Input.val($product_id);
    } else if ($pricingVariationInput.val() === '1') {

      $pricingProductId1Input.val($product_id);
    }
  });

  $pricingContactForm.on('submit', function (e) {

    e.preventDefault();

    var $sendBtn = $('.pricing-btn-contact-send');
    var $sendingBtn = $('.pricing-btn-contact-sending');
    var $successInfo = $('.pricing-contact-success');

    $sendBtn.hide();
    $sendingBtn.show();

    var data = {
      name: $pricingContactForm.find('input[name="pricing_name"]').val(),
      company: $pricingContactForm.find('input[name="pricing_company"]').val(),
      email: $pricingContactForm.find('input[name="pricing_email"]').val(),
      users: $pricingContactForm.find('input[name="pricing_users"]').val(),
      message: $pricingContactForm.find('textarea[name="pricing_message"]').val(),
    };

    for (var key in data) {
      if (data.hasOwnProperty(key) && data[key] === '') {

        toastr.warning('Please fill all fields');
        $sendBtn.show();
        $sendingBtn.hide();

        return;
      }
    }

    data.url = window.location.href;
    data.content = globalData.currentContent;
    data.product = globalData.currentProduct ? globalData.currentProduct : '';

    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: '/wp-admin/admin-ajax.php',
      data: {
        action: 'mdb_pricing_send_contact_mail',
        data: data
      }
    }).done(function () {

      toastr.success('Success!');
      $sendingBtn.hide();
      $successInfo.show();
    }).fail(function (error) {

      toastr.error('Error');
      $sendBtn.show();
      $sendingBtn.hide();
    });
  });

  $('.button-add-and-redirect').on('click', function (e) {

    e.preventDefault();

    submitPricingForm();
  });

  $('.button-add-and-continue').on('click', function (e) {

    e.preventDefault();

    var continuePage = $(this).attr('data-continue-page');
    submitPricingForm(true, continuePage);
  });

  function submitPricingForm(continueShopping = false, continuePage = '') {

    var values = {};
    var productId;
    var $modalPreloader = $('.pricing-modal-preloader');
    var $checkoutButton = $('.button-add-and-redirect');
    var $continueButton = $('.button-add-and-continue');

    $modalPreloader.show();
    $checkoutButton.attr('disabled', true);
    $continueButton.attr('disabled', true);

    $.each($pricingModalForm.serializeArray(), function (i, field) {

      values[field.name] = field.value;
    });

    if (values['pricing_variation'] === '0') {

      productId = values['pricing_product_id_0'];
    } else if (values['pricing_variation'] === '1') {

      productId = values['pricing_product_id_1'];
    }

    $.ajax({
      type: 'POST',
      dataType: 'json',
      url: '/wp-admin/admin-ajax.php',
      data: {
        action: 'mdb_pricing_add_to_cart',
        product_id: productId,
        variation: values['pricing_variation']
      }
    }).done(function (response) {

      $modalPreloader.hide();
      $checkoutButton.attr('disabled', false);
      $continueButton.attr('disabled', false);

      if (!response.success) {

        toastr.error('Something went wrong. The product could not be added to the Cart. Please try again or contact us');
        return;
      }

      if (continueShopping && continuePage) {

        toastr.success('Product added to cart!');
        location.href = continuePage;
      } else {

        toastr.success('Redirecting to checkout ...');
        location.href = '/checkout';
      }
    }).fail(function (error) {

      $modalPreloader.hide();
      $checkoutButton.attr('disabled', false);
      $continueButton.attr('disabled', false);

      var responseJSON = error.responseJSON;

      if (responseJSON) {

        toastr.error(responseJSON.data.message);
      } else {

        toastr.error(error.responseText);
      }
    });
  }
}
