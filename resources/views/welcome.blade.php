<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Deliver - Free Courier Website Template</title>

    <link rel="stylesheet" type="text/css" href="{{ asset('WelcomeAssets/css/vendor.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="{{ asset('WelcomeAssets/style.css') }}">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost&family=Roboto:wght@400;700&display=swap" rel="stylesheet">

    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

    <!-- script ================================================== -->
    <script src="{{ asset('WelcomeAssets/js/modernizr.js') }}"></script>

</head>

<body data-bs-spy="scroll" data-bs-target="#navbar-example2" tabindex="0">


    <!-- Navigation Section Starts -->

    <section id="navigation-bar" class="navigation position-fixed">

        <nav id="navbar-example2" class="navbar navbar-expand-lg ">

            <div class="navigation container-fluid d-flex flex-wrap align-items-center my-2 pe-4 ps-5 ">

                <div class="col-md-3 brand-logo">
                    <a href="index.html" class="d-inline-flex link-body-emphasis text-decoration-none">
                        <img src="{{ asset('WelcomeAssets/images/Deliver.png') }}" alt="">
                    </a>
                </div>

                <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas"
                    data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2"
                    aria-label="Toggle navigation"><ion-icon name="menu-outline"></ion-icon></button>

                <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar2"
                    aria-labelledby="offcanvasNavbar2Label">

                    <div class="offcanvas-header">
                        <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="offcanvas"
                            aria-label="Close"></button>
                    </div>

                    <div class="offcanvas-body">
                        <ul class="nav col-12 col-md-auto justify-content-center align-items-center mb-md-0">
                            <li class="nav-list mx-3">
                                <a href="#resources" class="nav-link px-2">
                                    <h5> Resources </h5>
                                </a>
                            </li>
                            <li class="nav-list mx-3">
                                <a href="#services" class="nav-link px-2">
                                    <h5> Services </h5>
                                </a>
                            </li>
                            <li class="nav-list mx-3">
                                <a href="#company" class="nav-link px-2">
                                    <h5> Company </h5>
                                </a>
                            </li>
                            <li class="nav-list mx-3">
                                <a href="#contact" class="nav-link px-2">
                                    <h5> Contact </h5>
                                </a>
                            </li>
                            <li class="nav-list mx-3 dropdown">
                                <a class="nav-link px-2 dropdown-toggle" data-bs-toggle="dropdown" href="#"
                                    role="button" aria-expanded="false">
                                    <h5> Pages <iconify-icon icon="ic:outline-arrow-drop-down"></iconify-icon> </h5>
                                </a>
                                <ul class="dropdown-menu">
                                    <li><a href="about.html" class="dropdown-item ">About <span
                                                class="badge bg-secondary">Pro</span></a>
                                    </li>
                                    <li><a href="blog.html" class="dropdown-item ">Blog <span
                                                class="badge bg-secondary">Pro</span></a>
                                    </li>
                                    <li><a href="contact.html" class="dropdown-item ">Contact <span
                                                class="badge bg-secondary">Pro</span></a></li>
                                    <li><a href="single-post.html" class="dropdown-item ">Single <span
                                                class="badge bg-secondary">Pro</span></a></li>
                                    <li><a href="styles.html" class="dropdown-item ">Styles <span
                                                class="badge bg-secondary">Pro</span></a></li>
                                </ul>
                            </li>
                            <li class="nav-list mx-3">
                                <a href="https://templatesjungle.gumroad.com/l/free-bootstrap-5-html-website-template-for-courier-and-transportation-company"
                                    class="btn btn-outline-primary py-2 px-3">
                                    Get Pro
                                </a>
                            </li>
                        </ul>

                        <div class="col-md-5 account d-flex justify-content-end align-items-center">
                            <a href="#" class="nav-link me-5">
                                <h5>Login</h5>
                            </a>
                            <button type="button" class="btn btn-primary first-button px-4 py-3 ">Sign up</button>
                        </div>
                    </div>
                </div>

            </div>

        </nav>

    </section>

    <!-- Hero Section Starts -->

    <section id="hero">
        <div id="resources" class="hero container py-5 my-5">
            <div class="row flex-lg-row-reverse align-items-center g-5 py-5">
                <div class="col-10 col-sm-8 col-lg-6 py-md-5 my-md-5">
                    <img src="{{ asset('WelcomeAssets/images/scooter.png') }}" class="d-block mx-lg-auto img-fluid"
                        alt="Bootstrap Themes" width="700" height="500" loading="lazy">
                </div>
                <div class="col-lg-6 py-md-5 my-md-5">
                    <h1 class=" lh-1 mb-3">We offer a wide range of logistics solutions.</h1>
                    <ul class="list-unstyled my-5">
                        <li class="my-2">
                            <h5>1 &nbsp; Easy booking </h5>
                        </li>
                        <li class="my-2">
                            <h5>2 &nbsp; Global Coverage </h5>
                        </li>
                        <li class="my-2">
                            <h5>3 &nbsp; Customer Support </h5>
                        </li>
                    </ul>
                    <div class="">
                        <a href="#" class="icon-link">
                            <h5> Get Started</h5>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Feature Section Starts -->

    <section id="features">
        <div id="resources" class="container py-5 my-5">

            <div class="row row-cols-1 row-cols-md-2 align-items-md-center gx-5 py-5">
                <div class="col-md-7 d-flex flex-column align-items-start">
                    <h1 class="">Go global with ease</h1>
                    <p class="feature-paragraph my-5">We simplify your logistics, while plugging your company into a
                        world of
                        opportunities. We believe every company deserves to feel the excitement of going global,
                        regardless of size.
                    </p>
                    <button type="button" class="btn btn-outline-primary second-button">Read More</button>
                </div>

                <div class="col-md-5">
                    <div class="row flex-column g-4 mt-3">
                        <div class="feature-post py-2 px-5">
                            <h4 class="py-3">Easy booking, multiple services</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the
                                industry's standard dummy text ever since</p>
                        </div>

                        <div class="feature-post py-2 px-5">
                            <h4 class="py-3">One place to manage all your shipments</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the
                                industry's standard dummy text ever since</p>
                        </div>

                        <div class="feature-post py-2 px-5">
                            <h4 class="py-3">Giving you clear visibility</h4>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the
                                industry's standard dummy text ever since</p>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section Starts -->

    <section id="services">
        <div class="container my-5">
            <h1 class="text-center my-5">Our Services</h1>
            <div class="row py-5">
                <div class="col-md-3">
                    <div class="service-post py-5 px-5">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center  fs-2 mb-3">
                            <img src="images/van.png" alt="">
                        </div>
                        <h3>Fast Transportation</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                            industry's standard
                            dummy text ever since</p>
                        <a href="#" class="icon-link">More info </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-post py-5 px-5">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                            <img src="{{ asset('WelcomeAssets/images/ship.png') }}" alt="">
                        </div>
                        <h3>Ocean Freight</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                            industry's standard
                            dummy text ever since</p>
                        <a href="#" class="icon-link">More info </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-post py-5 px-5">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                            <img src="{{ asset('WelcomeAssets/images/headset.png') }}" alt="">
                        </div>
                        <h3>Customs Services</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                            industry's standard
                            dummy text ever since</p>
                        <a href="#" class="icon-link">More info </a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="service-post py-5 px-5">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center fs-2 mb-3">
                            <img src="{{ asset('WelcomeAssets/images/rate.png') }}" alt="">
                        </div>
                        <h3>Monthly Rates</h3>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                            industry's standard
                            dummy text ever since</p>
                        <a href="#" class="icon-link">More info </a>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary first-button my-5">Explore Services</button>
            </div>

        </div>
    </section>

    <!-- Articles Section Starts -->

    <section id="articles">
        <div id="company" class="container py-5 my-5">
            <h1 class="text-center  my-5">Latest Articles</h1>
            <div class="row g-4 py-5">
                <div class="feature col-md-4">
                    <div class="artical-post">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center ">
                            <img src="{{ asset('WelcomeAssets/images/plane.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="artical-content py-5 px-5 ">
                            <h3>Learn and stay updated with</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                            <a href="#" class="icon-link">More info </a>
                        </div>
                    </div>
                </div>
                <div class="feature col-md-4">
                    <div class="artical-post">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center">
                            <img src="{{ asset('WelcomeAssets/images/box.png') }}" alt="" class="img-fluid">
                        </div>
                        <div class="artical-content py-5 px-5 ">
                            <h3>Asia-Pacific shipping update</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                            <a href="#" class="icon-link">More info </a>
                        </div>
                    </div>
                </div>
                <div class="feature col-md-4">
                    <div class="artical-post">
                        <div class="feature-icon d-inline-flex align-items-center justify-content-center">
                            <img src="{{ asset('WelcomeAssets/images/plane.png') }}" alt=""
                                class="img-fluid">
                        </div>
                        <div class="artical-content py-5 px-5 ">
                            <h3>Stay up to date with logistics</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                            <a href="#" class="icon-link">More info </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="text-center">
                <button type="button" class="btn btn-primary first-button my-5">More Articles</button>
            </div>

        </div>
    </section>

    <!-- Client Section Starts -->

    <section id="client">
        <div class="container py-5 my-5" id="featured-3">
            <h1 class="text-center my-5">What Our Client Say</h1>
            <div class="swiper client-Swiper py-5">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="col client-section d-flex align-items-center p-3 ">
                            <img src="{{ asset('WelcomeAssets/images/person1.png') }}" alt="">
                            <div class="client-name ps-4">
                                <h4>Ramen Maggie </h4>
                                <p>Seoul, South Korea</p>
                            </div>
                        </div>
                        <div class="client-description px-3 py-3">
                            <iconify-icon class="client-quote-icon" icon="bxs:quote-alt-left"></iconify-icon>
                            <h5>Thank you for your great service</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col client-section d-flex align-items-center p-3 ">
                            <img src="{{ asset('WelcomeAssets/images/person2.png') }}" alt="">
                            <div class="client-name ps-4">
                                <h4>John D’souza </h4>
                                <p>New York, USA</p>
                            </div>
                        </div>
                        <div class="client-description px-3 py-3">
                            <iconify-icon class="client-quote-icon" icon="bxs:quote-alt-left"></iconify-icon>
                            <h5>Thank you for your great service</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col client-section d-flex align-items-center p-3 ">
                            <img src="{{ asset('WelcomeAssets/images/person1.png') }}" alt="">
                            <div class="client-name ps-4">
                                <h4>Karl Walter</h4>
                                <p>Munich, German</p>
                            </div>
                        </div>
                        <div class="client-description px-3 py-3">
                            <iconify-icon class="client-quote-icon" icon="bxs:quote-alt-left"></iconify-icon>
                            <h5>Thank you for your great service</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col client-section d-flex align-items-center p-3 ">
                            <img src="{{ asset('WelcomeAssets/images/person2.png') }}" alt="">
                            <div class="client-name ps-4">
                                <h4>Ramen Maggie </h4>
                                <p>Seoul, South Korea</p>
                            </div>
                        </div>
                        <div class="client-description px-3 py-3">
                            <iconify-icon class="client-quote-icon" icon="bxs:quote-alt-left"></iconify-icon>
                            <h5>Thank you for your great service</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col client-section d-flex align-items-center p-3 ">
                            <img src="{{ asset('WelcomeAssets/images/person1.png') }}" alt="">
                            <div class="client-name ps-4">
                                <h4>Ramen Maggie </h4>
                                <p>Seoul, South Korea</p>
                            </div>
                        </div>
                        <div class="client-description px-3 py-3">
                            <iconify-icon class="client-quote-icon" icon="bxs:quote-alt-left"></iconify-icon>
                            <h5>Thank you for your great service</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col client-section d-flex align-items-center p-3 ">
                            <img src="{{ asset('WelcomeAssets/images/person2.png') }}" alt="">
                            <div class="client-name ps-4">
                                <h4>Ramen Maggie </h4>
                                <p>Seoul, South Korea</p>
                            </div>
                        </div>
                        <div class="client-description px-3 py-3">
                            <iconify-icon class="client-quote-icon" icon="bxs:quote-alt-left"></iconify-icon>
                            <h5>Thank you for your great service</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="col client-section d-flex align-items-center p-3 ">
                            <img src="{{ asset('WelcomeAssets/images/person1.png') }}" alt="">
                            <div class="client-name ps-4">
                                <h4>Ramen Maggie </h4>
                                <p>Seoul, South Korea</p>
                            </div>
                        </div>
                        <div class="client-description px-3 py-3">
                            <iconify-icon class="client-quote-icon" icon="bxs:quote-alt-left"></iconify-icon>
                            <h5>Thank you for your great service</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting Ipsum has been the
                                industry's standard
                                dummy text ever since</p>
                        </div>
                    </div>

                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </section>

    <!-- Action Section Starts -->

    <section id="action">
        <div id="contact" class="container py-5 my-5">

            <div class="row row-cols-1 row-cols-md-2 align-items-md-center g-5 py-5 ">
                <div class="col-md-5 action-column1">
                    <div class="row flex-column py-5 px-5">
                        <div class=" ms-3 mb-5 mt-5 ">
                            <h1>2043</h1>
                            <h5>Active Customers</h5>
                        </div>

                        <div class=" ms-3 mb-5 ">
                            <h1>3298</h1>
                            <h5>Monthly Shipments</h5>
                        </div>

                        <div class=" ms-3 mb-5 ">
                            <h1>5 min</h1>
                            <h5>To Book A Shipment</h5>
                        </div>

                    </div>
                </div>

                <div class="col-md-7 action-column2 d-flex flex-column align-items-center py-5 px-5">
                    <h1 class="action-heading text-center mt-5 py-2 px-5 ">Ready to book your shipment?</h1>
                    <p class="action-paragraph text-center my-5 px-5 ">Create an account to book. It only takes a few
                        steps!</p>
                    <button type="button" class="btn btn-primary first-button action-button  my-5">Create
                        Account</button>
                </div>

            </div>
        </div>
    </section>

    <!-- Footer Section Starts -->

    <section id="footer">
        <div class="container footer-container py-5">
            <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5  ">

                <div class="col-md-3 ">
                    <h4 class="py-3">Shipping Information</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Shipping to
                                United States </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Shipping to
                                The Netherlands </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Shipping to
                                United Kingdom </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Shipping to
                                Spain </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Shipping to
                                Germany </a></li>
                    </ul>
                </div>

                <div class="col-md-3 ">
                    <h4 class="py-3">Knowledge Hub</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Logistics
                                Know How </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Logistics
                                News </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Local
                                Solutions </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Logistics
                                Trends & Events </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Customer
                                Stories </a></li>
                    </ul>
                </div>

                <div class="col-md-3 ">
                    <h4 class="py-3">Useful Links</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Contact </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Services
                            </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Terms and
                                Conditions </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Why Us </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Careers </a>
                        </li>
                    </ul>
                </div>

                <div class="col-md-3 ">
                    <h4 class="py-3">Contact</h4>
                    <ul class="nav flex-column">
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Company
                                Headquarter </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> United
                                States of America </a>
                        </li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> Ney York 10
                            </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 "> 2511 DP Den
                                Haag </a></li>
                        <li class="nav-item mb-3"><a href="#" class="nav-link footer-1-link p-0 ">
                                courier@gmaile.com </a></li>
                    </ul>
                </div>
            </footer>
        </div>



    </section>

    <section class="footer-2">
        <footer class="container footer-2-container  d-flex align-items-center">
            <div class="col-md-4">
                <p class="footer2-paragraph">© 2023 TemplatesJungle. All rights reserved.</p>
            </div>

            <div class="col-md-4 text-center">
                <a href="https://templatesjungle.com/" class="text-decoration-none">
                    <iconify-icon class="footer-2-icon px-2" icon="ri:facebook-fill"></iconify-icon>
                </a>
                <a href="https://templatesjungle.com/" class="text-decoration-none">
                    <iconify-icon class="footer-2-icon px-2" icon="ri:twitter-fill"></iconify-icon>
                </a>
                <a href="https://templatesjungle.com/" class="text-decoration-none">
                    <iconify-icon class="footer-2-icon px-2" icon="ri:instagram-fill"></iconify-icon>
                </a>
            </div>

            <div class="col-md-4">
                <p class="footer2-paragraph d-flex justify-content-end">HTML template by :<a
                        href="https://templatesjungle.com/" class="nav-link footer-1-link templatesjungle"
                        target="_blank"> <u> TemplatesJungle </u> </a></p>
            </div>
        </footer>
    </section>


    <!-- Scripts  Starts -->


    <script src="{{ asset('WelcomeAssets/js/jquery-1.11.0.min.js') }}"></script>
    <script src="{{ asset('WelcomeAssets/js/plugins.js') }}"></script>
    <script src="{{ asset('WelcomeAssets/js/script.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.7/dist/iconify-icon.min.js"></script>
</body>

</html>
