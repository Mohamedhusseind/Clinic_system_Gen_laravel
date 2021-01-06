<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateinvoiceRequest;
use App\Http\Requests\UpdateinvoiceRequest;
use App\Repositories\invoiceRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class invoiceController extends AppBaseController
{
    /** @var  invoiceRepository */
    private $invoiceRepository;

    public function __construct(invoiceRepository $invoiceRepo)
    {
        $this->invoiceRepository = $invoiceRepo;
    }

    /**
     * Display a listing of the invoice.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $invoices = $this->invoiceRepository->all();

        return view('invoices.index')
            ->with('invoices', $invoices);
    }

    /**
     * Show the form for creating a new invoice.
     *
     * @return Response
     */
    public function create()
    {
        return view('invoices.create');
    }

    /**
     * Store a newly created invoice in storage.
     *
     * @param CreateinvoiceRequest $request
     *
     * @return Response
     */
    public function store(CreateinvoiceRequest $request)
    {
        $input = $request->all();

        $invoice = $this->invoiceRepository->create($input);

        Flash::success('Invoice saved successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Display the specified invoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.show')->with('invoice', $invoice);
    }

    /**
     * Show the form for editing the specified invoice.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        return view('invoices.edit')->with('invoice', $invoice);
    }

    /**
     * Update the specified invoice in storage.
     *
     * @param int $id
     * @param UpdateinvoiceRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateinvoiceRequest $request)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $invoice = $this->invoiceRepository->update($request->all(), $id);

        Flash::success('Invoice updated successfully.');

        return redirect(route('invoices.index'));
    }

    /**
     * Remove the specified invoice from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $invoice = $this->invoiceRepository->find($id);

        if (empty($invoice)) {
            Flash::error('Invoice not found');

            return redirect(route('invoices.index'));
        }

        $this->invoiceRepository->delete($id);

        Flash::success('Invoice deleted successfully.');

        return redirect(route('invoices.index'));
    }
}
