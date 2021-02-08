@extends('layouts.indexApp')
@section('content')
        <!-- Masthead-->
        <header class="masthead">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center text-center">
                    <div class="col-lg-10 align-self-end">
                        <h1 class="text-uppercase text-white font-weight-bold">HealthCare CRM</h1>
                        <hr class="divider my-4" />
                    </div>
                    <div class="col-lg-8 align-self-baseline">
                        <p class="text-white-75 font-weight-light mb-5">Basic of integrated Healthcare management & Operations this will do right!</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">Find Out More</a>
                    </div>
                </div>
            </div>
        </header>
        <!-- About-->
        <section class="page-section bg-primary" id="about">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8 text-center">
                        <h2 class="text-white mt-0">You Can Start As</h2>
                        <hr class="divider light my-4" />
                        <p class="text-white-50 mb-4"> You can login any time to management your system</p>
                    </div>
                </div>
                <!-- Start Slider-->
                <div class="container my-4">
                    <div class="row text-center ">
                        <div class="col-md-4 mb-4">

                            <h2 class="my-2 h2">Admin</h2>

                            <img class="my-3 rounded-circle" alt="100x100" width="250 px" height="250 px" src={{asset('assets/img/admin.png')}}
                                 data-holder-rendered="true">
                            <a class="btn btn-light btn-xl js-scroll-trigger" href={{route('login')}}>Login</a>
                        </div>
                        <div class="col-md-4 mb-4">

                            <h2 class="my-2 h2">Doctor</h2>

                            <img class="my-3 rounded-circle" alt="100x100" width="250 px" height="250 px" src={{asset('assets/img/doctor.jpg')}}
                                data-holder-rendered="true">
                            <a class="btn btn-light btn-xl js-scroll-trigger" href={{route('login')}}>Login</a>
                        </div>
                        <div class="col-md-4 mb-4">

                            <h2 class="my-2 h2">Receptionist</h2>

                            <img class="my-3 rounded-circle" alt="100x100" width="250 px" height="250 px" src={{asset('assets/img/receptionist.jpg')}}
                                 data-holder-rendered="true">
                            <a class="btn btn-light btn-xl js-scroll-trigger" href={{route('login')}}>Login</a>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- Services-->
        <section class="page-section" id="services">
            <div class="container">
                <h2 class="text-center mt-0">At Your Service</h2>
                <hr class="divider my-4" />
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-gem text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Sturdy Themes</h3>
                            <p class="text-muted mb-0">Our themes are updated regularly to keep them bug free!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-laptop-code text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Up to Date</h3>
                            <p class="text-muted mb-0">All dependencies are kept current to keep things fresh.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-globe text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Ready to Publish</h3>
                            <p class="text-muted mb-0">You can use this design as is, or you can make changes!</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="mt-5">
                            <i class="fas fa-4x fa-heart text-primary mb-4"></i>
                            <h3 class="h4 mb-2">Made with Love</h3>
                            <p class="text-muted mb-0">Is it really open source if it's not made with love?</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Portfolio-->
        <div id="portfolio">
            <div class="container-fluid p-0">
                <div class="row no-gutters">
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href={{asset('assets/img/portfolio/fullsize/1.jpg')}}>
                            <img class="img-fluid" style="width: 600px ; height: 290px ;" src={{asset('assets/img/portfolio/thumbnails/11.jpg')}} alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href={{asset('assets/img/portfolio/fullsize/2.jpg')}}>
                            <img class="img-fluid" style="width: 600px ; height: 290px ;"  src={{asset('assets/img/portfolio/thumbnails/22.jpg')}} alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href={{asset('assets/img/portfolio/fullsize/3.jpg')}}>
                            <img class="img-fluid" style="width: 600px ; height: 290px ;" src={{asset('assets/img/portfolio/thumbnails/33.jpg')}} alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href={{asset('assets/img/portfolio/fullsize/4.jpg')}}>
                            <img class="img-fluid" style="width: 600px ; height: 290px ;" src={{asset('assets/img/portfolio/thumbnails/44.jpeg')}} alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href={{asset('assets/img/portfolio/fullsize/5.jpg')}}>
                            <img class="img-fluid" src={{asset('assets/img/portfolio/thumbnails/5.jpg')}} alt="" />
                            <div class="portfolio-box-caption">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a class="portfolio-box" href={{asset('assets/img/portfolio/thumbnails/5.jpg')}}>
                            <img class="img-fluid" style="width: 600px ; height: 290px ;" src={{asset('assets/img/portfolio/thumbnails/66.jpg')}} alt="" />
                            <div class="portfolio-box-caption p-3">
                                <div class="project-category text-white-50">Category</div>
                                <div class="project-name">Project Name</div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
@endsection
