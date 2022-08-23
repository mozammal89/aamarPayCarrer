@extends('FrontEnd.layout')

@push('css')



@endpush()

@section('content')

<!--body content wrap start-->
<div class="main" style="margin-top: 100px !important">
    <!--hero section start-->
    <section id="hero-section" class="alter-bg pt-165 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-6 align-items-center">
                    <div class="hero-slider-content pt-5">
                        <span class="text-uppercase">Total Business Solutions</span>
                        <h1>Cost Effective Web Solution Provider</h1>
                        <!-- <p class="lead">Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem
                            ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit </p> -->

                        <div class="action-btns mt-3">
                            <a href="#" class="btn stil-solid-btn">Get Start Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 text-center">
                    <img src="{{asset('FrontEnd/images/hero-img.png')}}" class="img-fluid">
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->
    <!--about us section start-->
    <section id="about-section" class="about-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>About Us</h2>
                        <!-- <p>Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem
                            ipsum dolor sit Lorem ipsum dolodolor sit Lorem ipsum</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-between align-items-center">
                <div class="col-md-12 col-lg-5">
                    <div class="image-wrap">
                        <img src="{{asset('FrontEnd/images/about-us.png')}}" alt="video" class="img-fluid rounded">
                    </div>
                </div>
                <div class="col-md-12 col-lg-7">
                    <div class="video-promo-content mb-md-4 mb-lg-0">
                        <p class="lead text-justify">Soft Tech Innovation ltd. is a software developing company. It
                            was established in 2005. We have two wings under soft Tech Innovation Ltd. These are
                            aamarPay and MuthoFun.</p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Creative</strong>
                                Websites Design</li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Payment</strong>
                                Gateway</li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>Cloud</strong>
                                Hosting Service</li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>SMS</strong>
                                Aggregator</li>
                            <li class="py-1"><span
                                    class="ti-control-forward mr-2 color-secondary"></span><strong>POS</strong>
                                System</li>
                        </ul>
                        <div class="action-btns mt-4">
                            <a href="#service-section" class="btn stil-solid-btn mr-2">View Our Services</a>
                            <a href="#contact-us-section" class="btn stil-outline-btn">Contact Us</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--about us section end-->
    <!--services section start-->
    <section id="service-section" class="service-section ptb-100 alter-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Services</h2>
                        <!-- <p>Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem ipsum dolor sit Lorem
                            ipsum dolor sit Lorem ipsum dolodolor sit Lorem ipsum</p> -->
                    </div>
                </div>
            </div>
            <div class="row justify-content-around align-items-center">
                <div class="col-md-12 col-lg-5" id="stil">
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h3>Soft Tech Innovation Ltd.</h3>
                        <p>It is a well-known multi-diversified Technology company serving in the industry for quite
                            a long i.e. 2005-2006 and grown eventually over the years steadily.</p>

                        <p>We have been specialised in delivering web based solution that includes enterprise,
                            websites, messaging and payment solution.</p>
                        <ul class="list-unstyled tech-feature-list">
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Website design &
                                Development</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>eCommerce
                                Website Development</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>Domain
                                Registration & Web Hosting</li>
                            <li class="py-1"><span class="ti-check-box mr-2 color-secondary"></span>IT Consultancy &
                                Maintenance Service</li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5" id="aamarpay" hidden>
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h3>aamarPay</h3>
                        <p>aamarPay is an Online Payment Gateway & Merchant Provider Service in Bangladesh. It provides complete, simple and secure online payment gateway services and e-business solutions to websites, with real time transaction validation. Connected to most require acquiring and Mobile Financial Services (MFS).<br> <br>We are Providing Payment Gateway Service at a cheap cost yet better customer service. Our pricing is comparatively low than others. We offer four different packages for Payment Gateway. Merchants can buy any of these packages at their convenience <a href="https://aamarpay.com/" target="_blank" type="button" class="btn btn-warning btn-sm">Read More</a></p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5" id="muthofun" hidden>
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h3>MUTHOFUN</h3>
                        <p>We have mobile messaging service named MUTHOFUN. It is one of the leading Mobile Messaging solution & Aggregator provider in Bangladesh. Providing wide range of value and messaging solutions to various industries, financial organization and educational institute.<br><br>We have team of consultants who can guide you to plan mobile campaigns in most effect ways to maximize your ROI. We provide A2P bulk messaging with API, Push Pull service and OTP SMS Solution. Our Bulk SMS charges are comparatively low than other mobile messaging companies. We also have short code messaging service facility.<a href="http://muthofun.com/" target="_blank" type="button" class="btn btn-warning btn-sm">Read More</a> </p>
                        </ul>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5" id="aamarpayApp" hidden>
                    <div class="about-content-right mb-md-4 mb-lg-0">
                        <h3>aamarPay App</h3>
                        <p>aamarPay App is a super app concept (Slogan: 1 app 1 Solution) brought to you by one of the fastest grown online payment gateway provider - aamarPay. We aim to provide a best customer experience to end users and bring all necessary bill payment feature under one roof. aamarPay App is a product (B2C) of aamarPay.<a href="https://app.aamarpay.com/" target="_blank" type="button" class="btn btn-warning btn-sm">Read More</a> </p>
                    </div>
                </div>
                <div class="col-md-12 col-lg-6">
                    <div class="row">
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0 my-service service-hover service-active" style="height: 200px;" 
                                id="serv1Clk" onclick="switchService(1)">
                                <div class="promo-block-icon mb-3">
                                    <img src="{{asset('FrontEnd/images/stil.png')}}" class="img-fluid" />
                                </div>
                                <div class="promo-block-content">
                                    <p>Soft Tech Innovation Ltd.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0 my-service service-hover" style="height: 200px;"
                                id="serv2Clk" onclick="switchService(2)">
                                <div class="promo-block-icon mb-3" style="margin-top: 60px;">
                                    <img src="{{asset('FrontEnd/images/aamarpay.png')}}" class="img-fluid" />
                                </div>
                                <div class="promo-block-content">
                                    <p>aamarPay</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0 my-service service-hover" style="height: 200px;"
                                id="serv3Clk" onclick="switchService(3)">
                                <div class="promo-block-icon mb-3">
                                    <img src="{{asset('FrontEnd/images/muthofun.png')}}" class="img-fluid" />
                                </div>
                                <div class="promo-block-content">
                                    <p>Muthofun</p>
                                </div>
                            </div> 
                        </div>
                        <div class="col-6 col-md-6 col-lg-6">
                            <div class="single-promo-block p-4 text-center rounded border my-md-3 my-lg-3 my-sm-0 my-service service-hover" style="height: 200px;"
                                id="serv4Clk" onclick="switchService(4)">
                                <div class="promo-block-icon mb-3" style="margin-top: 60px;">
                                    <img src="{{asset('FrontEnd/images/aamarpay.png')}}" class="img-fluid" />
                                </div>
                                <div class="promo-block-content">
                                    <p>aamarPay App</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--services section end-->
    <!--why choose us section start-->
    <section class="ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>Why Choose Us?</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-moyla rounded">
                            <div class="service-icon mr-4">
                                <img src="{{asset('FrontEnd/images/wallet.png')}}" class="img-fluid">
                            </div>
                            <div class="services-content-wrap">
                                <h5>Payment Gateway</h5>
                                <p class="mb-0">We are providing online payment gateway service to merchant and facilitating them to receive payments from their customers.</p>
                                <a href="https://aamarpay.com/" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-moyla rounded">
                            <div class="service-icon mr-4">
                                <img src="{{asset('FrontEnd/images/sms.png')}}" class="img-fluid">
                            </div>
                            <div class="services-content-wrap">
                                <h5>BULK SMS Service</h5>
                                <p class="mb-0">We are offering bulk sms at cheap cost Yet better customer service. We have making and non-masking sms facility. Also we have OTP, Push-Pull SMS Service.</p>
                                <a href="http://muthofun.com/" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-moyla rounded">
                            <div class="service-icon mr-4">
                                <img src="{{asset('FrontEnd/images/web-page.png')}}" class="img-fluid">
                            </div>
                            <div class="services-content-wrap">
                                <h5>Web Development</h5>
                                <p class="mb-0">Soft Tech Innovation Limited is providing Website Development. We value customer's time and money and provide the best service.</p>
                                <!-- <a href="#" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="services-single d-flex p-5 my-md-3 my-lg-3 my-sm-0 shadow-sm white-moyla rounded">
                            <div class="service-icon mr-4">
                                <img src="{{asset('FrontEnd/images/server.png')}}" class="img-fluid">
                            </div>
                            <div class="services-content-wrap">
                                <h5>Domain & Hosting</h5>
                                <p class="mb-0">Soft Tech innovation Ltd also provides domain/hosting. We also try to provide domain/hosting service at cheap cost.</p>
                                <!-- <a href="#" target="_blank" class="detail-link mt-3">Read more <span class="ti-arrow-right"></span></a> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!--why choose us section end-->
    <!--counter section start-->
    <section class="call-to-action ptb-100 gradient-overlay">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="call-to-action-content text-white text-center mb-4">
                        <h2 class="text-white mb-1">Increase More Traffic Your Business?</h2>
                        <p class="lead">Credibly redefine high-payoff web services after holistic experiences.
                            Globally harness multidisciplinary solutions vis-a-vis intuitive customer service.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-medall-alt icon-md"></span>
                        <h3 class="mb-0 text-white">250</h3>
                        <p>Active users</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-headphone-alt icon-md"></span>
                        <h3 class="mb-0 text-white">125</h3>
                        <p>Global client</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-cup icon-md"></span>
                        <h3 class="mb-0 text-white">3</h3>
                        <p>Win award</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="single-counter rounded p-4 text-center text-white">
                        <span class="ti-user icon-md"></span>
                        <h3 class="mb-0 text-white">560</h3>
                        <p>Clients satisfaction</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--counter section end-->

    <!--portfolio section start-->
    <section id="our-portfolio-section" class="our-portfolio-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Check Our Quality Work</h2>
                        <!-- <p class="lead">Dynamically pursue reliable convergence rather than 24/7 process
                            improvements. Intrinsicly
                            develop end-to-end customer service without extensive data.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center pb-2">
                        <button type="button" class="filter-btn mixitup-control-active" data-mixitup-control=""
                            data-filter="all">All</button>
                        <button type="button" class="filter-btn" data-mixitup-control=""
                            data-filter=".mobileapps">Mobile Apps</button>
                        <button type="button" class="filter-btn" data-mixitup-control="" data-filter=".webapp">Web & Web
                            Application</button>
                        <button type="button" class="filter-btn" data-mixitup-control=""
                            data-filter=".wordpress">Wordpress</button>
                    </div>
                    <div class="portfolio-container" id="MixItUp">

                        <div class="mix portfolio-item mobileapps" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="http://app.whichexpress.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/app_whichexpress_qr.png')}}" style="height: 100%; width: 360px;" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Which Express</h5>
                                        <p>Mobile Apps</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://bhatful.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_bhatful.png')}}" style="height: 100%; width: 360px;" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Bhatful</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://aamarpay.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_aamarpay.png')}}" style="height: 100%; width: 360px;" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">aamrPay</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item mobileapps" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/app_aamarpay_ui.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">aamarPay App UI</h5>
                                        <p>Mobile Apps</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="http://hj756nap.at.edis.global/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_edis.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">KMA</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress " data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://futuretrackbd.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_future.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Corporate Identity Design</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://gmebd.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_gme.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">GME</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress " data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://kaththokra.studio/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_katthokra.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Katthokra</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://registration.aamarpay.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_aamarpayapp.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">aamarPay Web</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="http://azadinew.azadijobs.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_azadijobs.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Azadi Jobs</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://nayantaracraft.xyz/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_nayantara.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Nayantara</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp " data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="http://eplsoft.softbd.com/login" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_epl.jpeg')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">EPL</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://patronoftheclassy.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_patron.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Patron</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item wordpress" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="http://redgreenacademy.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/wordpress_redgreen.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Red Green Academy</h5>
                                        <p>Word Press</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="http://gmelbd.com/login" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_gme.jpeg')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">GME</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="https://registration.aamarpay.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_merchant_registration.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Merchant Registration</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp" data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="http://muthofun.com/" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_muthofun.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Muthofun</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="mix portfolio-item webapp " data-ref="mixitup-target">
                            <div class="portfolio-wrapper">
                                <a href="#" target="_blank">
                                    <div class="content-overlay"></div>
                                    <img class="img-fluid" src="{{asset('FrontEnd/images/portfolio/web_whichexpress.png')}}" alt="portfolio">
                                    <div class="content-details fadeIn-bottom text-white">
                                        <h5 class="text-white mb-1">Which Express</h5>
                                        <p>Web & Web Application</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                        <div class="gap"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--portfolio section end-->
    <!--team section start-->
    <section id="team-section" class="team-section ptb-100 alter-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Meet our lovely team</h2>
                        <!-- <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                            Enthusiastically
                            disseminate user-centric through revolutionary.</p> -->
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Ishtiaque.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">A.M Ishtiaque Sarwar</h5>
                                <span>Managing Director & Founder</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">A.M Ishtiaque Sarwar</h5>
                                </a>
                                <span class="teacher-field text-white">Managing Director & Founder</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/Ishtiaque.Sarwar" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/ishtiaquesarwar/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Imtiaz.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="h5 teacher mb-0">Imtiaz Bin Gias</h5>
                                <span>CTO & Director</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Imtiaz Bin Gias</h5>
                                </a><span class="teacher-field text-white">CTO & Director</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/akil193" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Muktadir.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Abdul Muktadir Azad</h5>
                                <span>COO</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Abdul Muktadir Azad</h5>
                                </a>
                                <span class="teacher-field text-white">COO</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/abdul-muktadir-azad-28318662/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Rafat.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="h5 teacher mb-0">Md. Rafat Hossain</h5>
                                <span>VP, Product & Technology</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Md. Rafat Hossain</h5>
                                </a><span class="teacher-field text-white">VP, Product & Technology</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://facebook.com/rafat.hossain.12" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/rafathossain" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Safkat.png')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Md. Safkat Islam</h5>
                                <span>DM, Corporate Partnerships & New Initiative</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Md. Safkat Islam</h5>
                                </a>
                                <span class="teacher-field text-white">DM, Corporate Partnerships & New Initiative</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/msi-sanchay/ " target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Liza.png')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Sanjida Ali Liza</h5>
                                <span>Senior Engineer, Merchant Operation & Tech Support</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Sanjida Ali Liza</h5>
                                </a>
                                <span class="teacher-field text-white">Senior Engineer, Merchant Operation & Tech Support</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/sanjidaali.liza" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/sanjida-ali-liza-b05b58150/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0" style="height: 100%">
                            <img src="{{asset('FrontEnd/images/team/Reshad.png')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Md. Reshad Mollick</h5>
                                <span>Software Engineer, Merchant Operation & Tech Support</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Md. Reshad Mollick</h5>
                                </a>
                                <span class="teacher-field text-white">Software Engineer, Merchant Operation & Tech Support</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/md-reshad-mollick-20b274170" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Shohel.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Md. Mozammal</h5>
                                <span>Software Engineer, Engineering & Integration Support</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Md. Mozammal Hossan</h5>
                                </a>
                                <span class="teacher-field text-white">Software Engineer, Engineering & Integration Support</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/mozammal89" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/mozammal-hossain-482a249a/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0" style="height: 100%">
                            <img src="{{asset('FrontEnd/images/team/Nasir.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Nasirul Haque</h5>
                                <span>Software Engineer, Engineering & Integration Support</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Nasirul Haque</h5>
                                </a>
                                <span class="teacher-field text-white">Software Engineer, Engineering & Integration Support</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/sparrow.nasir" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/nasirul-haque/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Shahid.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Md. Shahid Hossain</h5>
                                <span>Senior Executive, Sales & Acquisition, Commercial Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Md. Shahid Hossain</h5>
                                </a>
                                <span class="teacher-field text-white">Senior Executive, Sales & Acquisition, Commercial Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/shahidhossain26" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/md-shahid-hossain-36b57914b/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0" style="height: 100%">
                            <img src="{{asset('FrontEnd/images/team/Rubina.png')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Rubina Akter</h5>
                                <span>Senior Executive, KAM, Commercial Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Rubina Akter</h5>
                                </a>
                                <span class="teacher-field text-white">Senior Executive, KAM, Commercial Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Farhin.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Farhin Shimu</h5>
                                <span>Senior Executive, Sales & Acquisition, Commercial Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Farhin Shimu</h5>
                                </a>
                                <span class="teacher-field text-white">Senior Executive, Sales & Acquisition, Commercial Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/shayna-farhin-shimu-1a0067196" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Mahabub.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Mahabubur Rahman</h5>
                                <span>Senior Executive, Sales & Acquisition, Commercial Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Mahabubur Rahman</h5>
                                </a>
                                <span class="teacher-field text-white">Senior Executive, Sales & Acquisition, Commercial Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/mahabubbijoy333" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0" style="height: 100%">
                            <img src="{{asset('FrontEnd/images/team/Masud.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Mostafa Nur Masud</h5>
                                <span>Executive, Sales & Acquisition, Commercial Dept</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Mostafa Nur Masud</h5>
                                </a>
                                <span class="teacher-field text-white">Executive, Sales & Acquisition, Commercial Dept</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/MostafaRabbi/" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/mostafa-masud/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Nishat.png')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Nishat Sultana</h5>
                                <span>Executive, Partnership & Sales Acquisition, Commercial Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Nishat Sultana</h5>
                                </a>
                                <span class="teacher-field text-white">Executive, Partnership & Sales Acquisition, Commercial Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/nishatsultana/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0" style="height: 100%">
                            <img src="{{asset('FrontEnd/images/team/Oishi.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Asma Akila Oishi</h5>
                                <span>Executive, Sales & Acquisition, Commercial Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Asma Akila Oishi</h5>
                                </a>
                                <span class="teacher-field text-white">Executive, Sales & Acquisition, Commercial Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Tareq.png')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Tarequr Rahman</h5>
                                <span>Assistant Manager, Finance, Accounts & Admin Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Tarequr Rahman</h5>
                                </a>
                                <span class="teacher-field text-white">Assistant Manager, Finance, Accounts & Admin Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="https://www.linkedin.com/in/tarequr-rahman-5362b2110/" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Rana.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Md. Monir Hossain</h5>
                                <span>Executive, Banking & Admin, Accounts & Admin Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Md. Monir Hossain Rana</h5>
                                </a>
                                <span class="teacher-field text-white">Executive, Banking & Admin, Accounts & Admin Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Saimum.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Saimum Rezwan</h5>
                                <span>Senior Executive, Finance, aamarCash, RMFTSL</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Saimum Rezwan</h5>
                                </a>
                                <span class="teacher-field text-white">Senior Executive, Finance, aamarCash, RMFTSL</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/shahidhossain26" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Ramisha.jpg')}}" alt="team image" class="card-img-top">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Ramisha Fariha</h5>
                                <span>Executive, Digital Loan Operation, aamarCash, RMFTSL</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Ramisha Fariha</h5>
                                </a>
                                <span class="teacher-field text-white">Executive, Digital Loan Operation, aamarCash, RMFTSL</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/mahabubbijoy333" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0" style="height: 100%">
                            <img src="{{asset('FrontEnd/images/team/Sanjida.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Sanjida Afroza Khan</h5>
                                <span>Assistant Manager, Merchant Care & KAM, Commercial Dept..</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Sanjida Afroza Khan</h5>
                                </a>
                                <span class="teacher-field text-white">Assistant Manager, Merchant Care & KAM, Commercial Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="https://www.facebook.com/MostafaRabbi/" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Naser.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Abu Naser</h5>
                                <span>Designer, UI & UX, Graphics, Engineering Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Abu Naser</h5>
                                </a>
                                <span class="teacher-field text-white">Designer, UI & UX, Graphics, Engineering Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Arjuman.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Arjuman Sreashtho</h5>
                                <span>Software Engineer, Engineering Dept. & Tech Support</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Arjuman Sreashtho</h5>
                                </a>
                                <span class="teacher-field text-white">Software Engineer, Engineering Dept. & Tech Support</span>
                                <ul class="list-inline py-4 social">
                                    <!-- <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-facebook"></span></a></li> -->
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="staff-member my-lg-3 my-md-3 my-sm-0" style="height: 92%">
                        <div class="card white-bg shadow-sm text-center border-0">
                            <img src="{{asset('FrontEnd/images/team/Mamun.jpg')}}" alt="team image" class="img-fluid">
                            <div class="card-body">
                                <h5 class="teacher mb-0">Al Mamun</h5>
                                <span>Software Engineer, Intern, Engineering Dept.</span>
                            </div>
                        </div>
                        <div class="overlay d-flex align-items-center justify-content-center">
                            <div class="overlay-inner">
                                <a href="#!" class="teacher-name">
                                    <h5 class="mb-0 teacher text-white">Al Mamun</h5>
                                </a>
                                <span class="teacher-field text-white">Software Engineer, Intern, Engineering Dept.</span>
                                <ul class="list-inline py-4 social">
                                    <li class="list-inline-item"><a href="#" target="_blank"><span class="ti-linkedin"></span></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
    <!--team section end-->
    <!--client section start-->
    <div class="client-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Our Clients</h2>
                        <!-- <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                            Enthusiastically
                            disseminate user-centric through revolutionary.</p> -->
                    </div>
                </div>
            </div>
            <!--clients logo start-->
            <div class="row align-items-center pt-5">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme clients-carousel dot-indicator">
                        <div class="item single-client">
                            <img src="{{asset('FrontEnd/images/clients/gayer_sodai.jpg')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('FrontEnd/images/clients/katthokra.jpg')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('FrontEnd/images/clients/lwhh.jpg')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('FrontEnd/images/clients/sell_diary.jpg')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('FrontEnd/images/clients/tazza.jpg')}}" alt="client logo" class="client-img">
                        </div>
                        <div class="item single-client">
                            <img src="{{asset('FrontEnd/images/clients/vapor_world.jpg')}}" alt="client logo" class="client-img">
                        </div>
                    </div>
                </div>
            </div>
            <!--clients logo end-->
        </div>
    </div>
    <!--client section end-->


    <!--faq section start-->
    <section id="faq-section" class="faq-section ptb-100 alter-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-8">
                    <div class="section-heading text-center mb-4">
                        <h2>Frequently Asked Questions</h2>
                        <!-- <p class="lead">Distinctively grow go forward manufactured products and optimal networks.
                            Enthusiastically
                            disseminate user-centric through revolutionary.</p> -->
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row pt-5">
                <div class="col-lg-6">
                    <div id="accordion-1" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4 collapsed" id="heading-1-1" data-toggle="collapse"
                                role="button" data-target="#collapse-1-1" aria-expanded="false"
                                aria-controls="collapse-1-1">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> I need Payment Gateway for multiple website, what can I do?</h6>
                            </div>
                            <div id="collapse-1-1" class="collapse" aria-labelledby="heading-1-1"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Please get in touch with your Account Manager who will connect you with an agent for new account registration. Once the integration is complete, a new MID will be requested for the respective website.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 2 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-2" data-toggle="collapse" role="button"
                                data-target="#collapse-1-2" aria-expanded="false" aria-controls="collapse-1-2">
                                <h6 class="mb-0"><span class="ti-gallery mr-3"></span> How can I change my statement bank account?</h6>
                            </div>
                            <div id="collapse-1-2" class="collapse" aria-labelledby="heading-1-2"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Send your updated bank account information in your company letterhead pad with a seal and signature.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-1-3" data-toggle="collapse" role="button"
                                data-target="#collapse-1-3" aria-expanded="false" aria-controls="collapse-1-3">
                                <h6 class="mb-0"><span class="ti-wallet mr-3"></span> How will my customers avail online EMI?
                                </h6>
                            </div>
                            <div id="collapse-1-3" class="collapse" aria-labelledby="heading-1-3"
                                data-parent="#accordion-1">
                                <div class="card-body">
                                    <p>Your customer can avail online EMI facilities with credit cards from 10+ banks at the moment. At the payment page, they need to choose ‘Avail EMI’ and select the number of months for their EMI. After the payment is complete, the transaction will be converted to EMI within 5-7 working days.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div id="accordion-2" class="accordion accordion-faq">
                        <!-- Accordion card 1 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-2-1" data-toggle="collapse" role="button"
                                data-target="#collapse-2-1" aria-expanded="false" aria-controls="collapse-2-1">
                                <h6 class="mb-0"><span class="ti-receipt mr-3"></span> Is there any dashboard where I can monitor my transactions?</h6>
                            </div>
                            <div id="collapse-2-1" class="collapse" aria-labelledby="heading-2-1"
                                data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>Yes, there’s a reporting panel (merchant.aamarpay.com). You should have a user account with which you can log in. You can use this panel to monitor your transactions, settlement, refunds, chargebacks, etc.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 2 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-2-2" data-toggle="collapse" role="button"
                                data-target="#collapse-2-2" aria-expanded="false" aria-controls="collapse-2-2">
                                <h6 class="mb-0"><span class="ti-lock mr-3"></span> How can I refund a transaction?
                                </h6>
                            </div>
                            <div id="collapse-2-2" class="collapse" aria-labelledby="heading-2-2"
                                data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>You can follow these steps to initiate a refund : <br><br> Open transaction > transaction details > Refund request > fill up refund amount>proceed the refund.</p>
                                </div>
                            </div>
                        </div>
                        <!-- Accordion card 3 -->
                        <div class="card">
                            <div class="card-header py-4" id="heading-2-3" data-toggle="collapse" role="button"
                                data-target="#collapse-2-3" aria-expanded="false" aria-controls="collapse-2-3">
                                <h6 class="mb-0"><span class="ti-widget mr-3"></span> How long it take for the customer to receive the refund?
                                </h6>
                            </div>
                            <div id="collapse-2-3" class="collapse" aria-labelledby="heading-2-3"
                                data-parent="#accordion-2">
                                <div class="card-body">
                                    <p>It takes 5 to 7 working days.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--pricing faq end-->
        </div>
    </section>
    <!--faq section end-->

    <!--contact us section start-->
    <section id="contact-us-section" class="contact-us-section ptb-100">
        <div class="container contact">
            <div class="col-12 pb-3 message-box d-none">
                <div class="alert alert-danger"></div>
            </div>
            <div class="row justify-content-around">
                <div class="col-md-6">
                    <div class="contact-us-form gray-light-bg rounded p-5">
                        <h4>Ready to get started?</h4>
                        <form action="{{route('contact.store')}}" method="POST" id="contactForm" class="contact-us-form" novalidate="true">
                            @csrf
                            <div class="form-row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="name" placeholder="Enter name"
                                            required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <input type="email" class="form-control" name="email"
                                            placeholder="Enter email" required="required">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" rows="7"
                                            cols="25" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-3">
                                    <button type="button" class="btn stil-solid-btn disabled" id="btnContactUs" style="pointer-events: all; cursor: pointer;" onclick="verify(this)">Send Message</button>
                                    
                                    <!-- <button class="g-recaptcha btn stil-solid-btn disabled" 
                                        data-sitekey="{{ env('NOCAPTCHA_SITEKEY') }}" 
                                        data-callback='onSubmit' 
                                        data-action='submit' style="pointer-events: all; cursor: pointer;" id="btnContactUs">Send Message</button> -->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="contact-us-content">
                        <h2>Looking for a excellent Business idea?</h2>
                        <!-- <p class="lead">Seamlessly deliver pandemic e-services and next-generation initiatives.</p> -->

                        <a href="#" class="btn stil-outline-btn align-items-center">Get Directions <span
                                class="ti-arrow-right pl-2"></span></a>

                        <hr class="my-5">

                        <h5>Our Office</h5>
                        <address>
                            53, Gausul Azam Avenue, Sector 14 <br>
                            Uttara. Dhaka,1230
                        </address>
                        <br>
                        <span>Phone: 880-1842949652</span> <br>
                        <span>Email: <a href="mailto:info@softbd.com"
                        class="link-color">info@softbd.com</a></span>
                        <br>
                        &nbsp &nbsp &nbsp &nbsp&nbsp &nbsp&nbsp<span><a href="mailto:sales@softbd.com"
                        class="link-color">sales@softbd.com</a></span>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--contact us section end--> 
</div>
<!--body content wrap end-->

<!--bottom to top button start-->
<button class="scroll-top scroll-to-target" data-target="html">
    <span class="ti-angle-up"></span>
</button>
<!--bottom to top button end-->


@endsection

@push('js')
<script src="https://www.google.com/recaptcha/api.js?render=6Lcqz9YZAAAAAD8JdZZnOyD3GtlKrv6Xhkph7ewS"></script>

<script>
   function verify(e) {
        grecaptcha.ready(function() {
          grecaptcha.execute('6Lcqz9YZAAAAAD8JdZZnOyD3GtlKrv6Xhkph7ewS', {action: 'submit'}).then(function(token) {
              $("#contactForm").submit();
          });
        });
      }
 </script>


@endpush