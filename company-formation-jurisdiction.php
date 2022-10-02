<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <title>Home Page</title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
        <link rel="stylesheet" href="css/jquery-ui.min.css" />
        <link rel="stylesheet" href="js/select2/select2.min.css" />
        <link rel="stylesheet" href="css/datepicker.min.css" />
        <link rel="stylesheet" href="css/slick.css" />
        <link rel="stylesheet" href="css/app.css?v=1" />
    </head>
    <body>
        <?php include 'components/header.php'; ?>
        <main>
            <div id="carouselHome" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselHome" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselHome" data-slide-to="1"></li>
                    <li data-target="#carouselHome" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-none d-lg-block" src="images/banner.png" alt="First slide" />
                        <img class="d-block d-lg-none" src="images/banner-xs.png" alt="First slide" />
                        <div class="carousel-caption d-none d-lg-block">
                            <div class="container">
                                <div class="carousel-container">
                                    <h1>Helping Entrepreneurs Thrive, Across # Jurisdictions.</h1>
                                    <p>ali, sed do eiusmod tempor incididunt uelit, sed do eiusmod tempor.ali, sed do eiusmod tempor incididunt uelit, sed do eiusmod tempor.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="submenu">
                <a href="javascript:void(0)" title="" target="_self" class="submenu-title">Menu</a>
                <ul class="list-unstyled mb-0">
                    <li class="active">
                        <a href="#" title="" target="_self">Features</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">Jurisdictions</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">How To Set Up</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">Fees</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">Nominee</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">Change Agent</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">Company Renewal</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">FAQs</a>
                    </li>
                    <li>
                        <a href="#" title="" target="_self">Download & Form</a>
                    </li>
                </ul>
                <a href="javascript:void(0)" title="" target="_self" class="submenu-hide">Show less</a>
            </div>
            <div class="my-xs-15 d-block d-lg-none">
                <div class="container">
                    <h2 class="underline-linear">Jurisdictions</h2>
                </div>
            </div>
            <div class="py-120 py-xs-40 bg" style="background-image: url(./images/bg-jurisdiction.jpg);">
                <div class="container">
                    <p class="text-white text-center">
                        We are cappable of providing company formation service in more than 27 jurisdictions globally. We make sure our clients can make the best investment decision when doing business overseas. Explore and get started
                        today.
                    </p>
                </div>
            </div>
            <div class="pt-50 pb-40 pb-xs-20">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-center flex-column flex-lg-row">
                        <p class="mb-0 mr-25 w-xs-100 mr-xs-0 text-xs-16 mb-xs-25"><strong>Jurisdiction Key Features</strong></p>
                        <div class="d-flex align-items-center justify-content-center min-width-500 min-width-xs-auto w-xs-100">
                            <div class="position-relative select-wrapper mr-15" style="height: 40px; flex-grow: 1; flex-shrink: 1;">
                                <select name="" id="txtCommunicationChannel" class="select2">
                                    <option value=""></option>
                                    <option value="0">Zalo</option>
                                    <option value="1">Viber</option>
                                    <option value="2">Yahoo</option>
                                    <option value="2">Yahoo</option>
                                    <option value="2">Yahoo</option>
                                    <option value="2">Yahoo</option>
                                    <option value="2">Yahoo</option>
                                    <option value="2">Yahoo</option>
                                </select>
                            </div>
                            <a href="#" title="" target="_self" class="btn btn-outline-red py-7 px-40 px-xs-30"><span>Explore</span></a>
                        </div>
                    </div>
                    <div class="row mt-40 mt-xs-0">
                        <div class="col-lg-3">
                            <div class="bg-light-blue bg-xs-transparent rounded-8 py-30 pb-xs-15 sticky-top">
                                <ul class="nav nav-tabs list-unstyled list-blue-style m-0 d-block d-xs-flex" role="tablist">
                                    <li class="nav-item">
                                        <a id="tab1" class="nav-link active" data-toggle="tab" role="tab" href="#pane-tab-1"><span>Asia Pacific (7)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab2" class="nav-link" data-toggle="tab" role="tab" href="#pane-tab-2"><span>Europe (8)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab3" class="nav-link" data-toggle="tab" role="tab" href="#pane-tab-3"><span>Caribbean (8)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab4" class="nav-link" data-toggle="tab" role="tab" href="#pane-tab-4"><span>Middle East (1)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab5" class="nav-link" data-toggle="tab" role="tab" href="#pane-tab-5"><span>Africa (2)</span></a>
                                    </li>
                                    <li class="nav-item">
                                        <a id="tab6" class="nav-link" data-toggle="tab" role="tab" href="#pane-tab-6"><span>America (2)</span></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="pane-tab-1" role="tabpanel" aria-labelledby="tab1">
                                    <div class="row row-xs-gut15">
                                        <div class="col-6 col-lg-4 px-xs-8 mb-30 mb-xs-15">
                                            <?php include 'components/jurisdiction_box.php'; ?>
                                        </div>
                                        <div class="col-6 col-lg-4 px-xs-8 mb-30 mb-xs-15">
                                            <?php include 'components/jurisdiction_box.php'; ?>
                                        </div>
                                        <div class="col-6 col-lg-4 px-xs-8 mb-30 mb-xs-15">
                                            <?php include 'components/jurisdiction_box.php'; ?>
                                        </div>
                                        <div class="col-6 col-lg-4 px-xs-8 mb-30 mb-xs-15">
                                            <?php include 'components/jurisdiction_box.php'; ?>
                                        </div>
                                        <div class="col-6 col-lg-4 px-xs-8 mb-30 mb-xs-15">
                                            <?php include 'components/jurisdiction_box.php'; ?>
                                        </div>
                                        <div class="col-6 col-lg-4 px-xs-8 mb-30 mb-xs-15">
                                            <?php include 'components/jurisdiction_box.php'; ?>
                                        </div>
                                        <div class="col-6 col-lg-4 px-xs-8 mb-30 mb-xs-15">
                                            <?php include 'components/jurisdiction_box.php'; ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="pane-tab-2" role="tabpanel" aria-labelledby="tab2">
                                    Nội dung Tab2 - HTML code
                                </div>
                                <div class="tab-pane fade" id="pane-tab-3" role="tabpanel" aria-labelledby="tab3">
                                    Nội dung Tab3 - HTML code
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pt-50 pb-60 bg-grey py-xs-30">
                <div class="container">
                    <div class="text-center">
                        <h2 class="underline-linear mb-30">Company Formation Service Fees</h2>
                        <div class="box-fee">
                            <div class="d-lg-flex">
                                <div class="box-fee-price">
                                    <img src="images/icon-service-fee.png" title="" alt="" />
                                    <span class="box-fee-text">
                                        Only from
                                        <span class="text-40 ml-5"> US$ <span class="text-green">299</span> </span>
                                    </span>
                                </div>
                                <div class="box-fee-content">
                                    <ul>
                                        <li><span>100%</span> successful rate</li>
                                        <li><span>Fast, easy & highly</span> secured</li>
                                        <li>Dedicated support <span>(24/7)</span></li>
                                        <li>Over <span>27</span> jurisdictions around the world</li>
                                        <li>
                                            Just Order, We Do All For You
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="mt-lg-40 mt-20">
                                <a class="btn btn-primary min-width-300 w-xs-100" href="#" target="_self" title="">Incorporate Company Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php include 'components/promotion.php'; ?>
            <div class="decor-line-xs"></div>
            <?php include 'components/insight.php'; ?>
            <?php include 'components/newspapers_index.php'; ?>
        </main>
        <?php include 'components/footer.php'; ?>
        <script src="js/jquery-3.5.1.min.js"></script>
        <script src="js/jquery-ui.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap-4.6.min.js"></script>
        <script src="js/select2/select2.min.js"></script>
        <script src="js/lazysizes.min.js"></script>
        <script src="js/ls.bgset.min.js"></script>
        <script src="js/datepicker.js"></script>
        <script src="js/slick.min.js"></script>
        <script src="js/style.js?v=1"></script>
        <script>
            $(".select2").select2({
                placeholder: "Please select",
                minimumResultsForSearch: Infinity,
            });
            $(".newspaper-slide").slick({
                infinite: true,
                slidesToShow: 6,
                slidesToScroll: 6,
                arrows: false,
                autoplay: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 2,
                        },
                    },
                ],
            });
        </script>
    </body>
</html>