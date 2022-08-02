<?php /* Template Name: Home */ ?>
<?= get_header(); ?>

<div class="section carousel slide main-carousel position-relative" id="main-carousel" data-bs-ride="carousel"
    data-bs-interval="5000" data-bs-pause="false" data-anchor="firstSlide">
    <div class="container-fluid px-5 carousel-indicators w-100">
        <ul class="carousel-indicators">
            <li data-bs-target="#main-carousel" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></li>
            <li data-bs-target="#main-carousel" data-bs-slide-to="1" aria-label="Slide 2"></li>
            <li data-bs-target="#main-carousel" data-bs-slide-to="2" aria-label="Slide 3"></li>
            <li data-bs-target="#main-carousel" data-bs-slide-to="3" aria-label="Slide 4"></li>
            <li data-bs-target="#main-carousel" data-bs-slide-to="4" aria-label="Slide 5"></li>
        </ul>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <div class="carousel-wrapper">
                <img src="<?= get_template_directory_uri() . '/images/Home-section-1-1.png' ?>" alt=""
                    class="carousel-image d-none d-md-block" />
                <img src="<?= get_template_directory_uri() . '/images/home-section1-1-mobile.png' ?>" alt=""
                    class="carousel-image d-md-none" />

                <div class="container-fluid px-4 px-md-5  h-100">
                    <div class=" row align-items-center h-100 pb-5">
                        <div class="col">
                            <h1 class="carousel-text">
                                a high-quality indonesian<br> office equipment cabinets,<br> fire doors and all metal
                                works
                                <!-- Since 1979, we have served <br class="d-md-none"> with <br class="d-none d-md-block">
                                passion and excellence. -->
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-wrapper">
                <img src="<?= get_template_directory_uri() . '/images/Home-section-1-2.png' ?>" alt=""
                    class="carousel-image d-none d-md-block" />
                <img src="<?= get_template_directory_uri() . '/images/home-section1-2-mobile.png' ?>" alt=""
                    class="carousel-image d-md-none" />

                <div class="container-fluid px-4 px-md-5 h-100">
                    <div class="row align-items-center h-100 pb-5">
                        <div class="col">
                            <h1 class="carousel-text">
                                implement the latest<br> technology of engine and<br> machine
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="carousel-item">
            <div class="carousel-wrapper">
                <img src="<?= get_template_directory_uri() . '/images/Home-section-1-3.png' ?>" alt=""
                    class="carousel-image d-none d-md-block" />
                <img src="<?= get_template_directory_uri() . '/images/home-section1-3-mobile.png' ?>" alt=""
                    class="carousel-image d-md-none" />

                <div class="container-fluid px-4 px-md-5 h-100">
                    <div class=" row align-items-center h-100 pb-5">
                        <div class="col">
                            <h1 class="carousel-text">
                                the quality to achieve good <br> quality products
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-wrapper">
                <img src="<?= get_template_directory_uri() . '/images/home-section-1-4.png' ?>" alt=""
                    class="carousel-image d-none d-md-block" />
                <img src="<?= get_template_directory_uri() . '/images/home-section1-4-mobile.png' ?>" alt=""
                    class="carousel-image d-md-none" />

                <div class="container-fluid px-4 px-md-5 h-100">
                    <div class=" row align-items-center h-100 pb-5">
                        <div class="col">
                            <h1 class="carousel-text">
                                always strive towards<br> better improvements
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="carousel-item">
            <div class="carousel-wrapper">
                <img src="<?= get_template_directory_uri() . '/images/Home-section-1-5.png' ?>" alt=""
                    class="carousel-image d-none d-md-block" />
                <img src="<?= get_template_directory_uri() . '/images/home-section1-5-mobile.png' ?>" alt=""
                    class="carousel-image d-md-none" />

                <div class="container-fluid px-4 px-md-5 h-100">
                    <div class=" row align-items-center h-100 pb-5">
                        <div class="col">
                            <h1 class="carousel-text">
                                commited in producing <br> high quality products
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="home-section-2 ">
    <div class="d-flex justify-content-between py-4 mx-5">
        <h5 class="text left">our original product</h5>
        <p class="text d-md-block d-none">Crafted In A Quality To Last A Lifetime</p>
    </div>
    <div class="container d-flex justify-content-center">
        <div class="row original-product">
            <div class="col-lg-2 col-6 product">
                <img src="<?= get_template_directory_uri() . '/images/home-section-2-1.png' ?> "
                    class="img-home-section-2 img-fluid d-none d-lg-block" alt="...">
                <img src="<?= get_template_directory_uri() . '/images/home-section2-1-mobile.png' ?> "
                    class="img-home-section-2 img-fluid d-md-block d-lg-none " alt="...">
                <div>
                    <p class="product-text">Filling Cabinets</p>
                </div>
            </div>
            <div class="col-lg-2 col-6  product">
                <img src="<?= get_template_directory_uri() . '/images/home-section-2-2.png' ?> "
                    class="img-home-section-2 img-fluid d-none d-lg-block" alt="...">
                <img src="<?= get_template_directory_uri() . '/images/home-section2-2-mobile.png' ?> "
                    class="img-home-section-2 img-fluid d-md-block d-lg-none " alt="...">
                <div>
                    <p class="product-text">Cupboards</p>
                </div>
            </div>
            <div class="col-lg-2 col-6  product">
                <img src="<?= get_template_directory_uri() . '/images/home-section-2-3.png' ?> "
                    class="img-home-section-2 img-fluid d-none d-lg-block" alt="...">
                <img src="<?= get_template_directory_uri() . '/images/home-section2-3-mobile.png' ?> "
                    class="img-home-section-2 img-fluid d-md-block d-lg-none " alt="...">
                <div>
                    <p class="product-text">Pedestal Desk</p>
                </div>
            </div>
            <div class="col-lg-2 col-6  product">
                <img src="<?= get_template_directory_uri() . '/images/home-section-2-4.png' ?> "
                    class="img-home-section-2 img-fluid d-none d-lg-block" alt="...">
                <img src="<?= get_template_directory_uri() . '/images/home-section2-4-mobile.png' ?> "
                    class="img-home-section-2 img-fluid d-md-block d-lg-none " alt="...">
                <div>
                    <p class="product-text">Lockers</p>
                </div>
            </div>
            <div class=" col-lg-2 product-link">
                <img src="<?= get_template_directory_uri() . '/images/home-section-2-5.png' ?> "
                    class="img-home-section-2 img-fluid d-none d-lg-block" alt="...">
                <div class="d-flex justify-content-between">
                    <p class="product-text fw-bold d-none d-lg-block">See All Products</p>
                    <img src="<?= get_template_directory_uri() . '/images/arrow-link.png'?>" alt="..." width="10"
                        height="10" class="d-none d-lg-block mt-2">
                </div>
                <div class="position-relative">
                    <img src="<?= get_template_directory_uri() . '/images/home-section2-5-mobile.png' ?> "
                        class="img-home-section-2 img-fluid d-md-block d-lg-none mx-5 " alt="...">
                    <p class="product-text-mobile  d-md-none position-absolute"> Crafted In A Quality To Last A Lifetime
                    </p>
                    <div class="d-flex position-absolute link-mobile">
                        <p class=" d-md-none">See All Product</p>
                        <img src="<?= get_template_directory_uri() . '/images/arrow-link.png'?>" alt="..." width="20"
                            height="20" class="ms-5 d-md-none">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="home-section-3">
    <div class="container-fluid bg-section3">
        <div class="row">
            <div class="wrapp col-12 col-lg-5 position-relative">
                <img src="<?= get_template_directory_uri() . '/images/Home-section-3-1.png' ?>" alt=""
                    class="bg d-none d-md-block w-100 h-100 img-fluid" />
                <img src="<?= get_template_directory_uri() . '/images/Home-section3-1-mobile.png' ?>" alt=""
                    class="bg d-md-none w-100 h-100 img-fluid" />
                <div class="text-wrapper-section3 col-5">
                    <p class="text-left-section3 ">established in</p>
                    <p class=" year ">1962</p>
                </div>

            </div>
            <div class="wrapp col-12 col-lg-7 position-relative">

                <img src="<?= get_template_directory_uri() . '/images/Home-section-3-2.png' ?>" alt=""
                    class="bg d-none d-md-block w-100 h-100 img-fluid" />
                <img src="<?= get_template_directory_uri() . '/images/Home-section3-2-mobile.png' ?>" alt=""
                    class="bg d-md-none w-100 h-100 img-fluid" />

                <div class="text-wrapper-section3 col-7">
                    <p class="text-right-section3 ">Alba has been strongly commited to continue producing
                        high-quality products to support your business needs. <br>
                        <br>
                        We are not only dedicated to creating
                        functional design, but we are also dedicated to always delivering the best possible quality.
                    </p>
                    <div class="button">
                        <button type="button" class="btn btn-light bg-transparent" style="color: white !important;">Read
                            More</button>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>

<section class="home-section-4">
    <div>
        <div class="section-4-title">
            <h5>explore products by category</h5>
            <img src="<?= get_template_directory_uri() . '/images/arrow-down-circle.png' ?>" alt="" />
        </div>
        <div class="container-section-4 p-0">
            <div class="row d-flex gx-2 gy-2 ">
                <div class="col-lg-3 col-6 item ">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-1.png' ?>" alt=""
                        class="section-4-image" />
                    <div>
                        <p class="section-4-text">original Products</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-2.png' ?>" alt=""
                        class="section-4-image" />
                    <div>
                        <p class="section-4-text">custom products</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-3.png' ?>" alt=""
                        class="section-4-image" />
                    <div>
                        <p class="section-4-text">panel box</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-4.png' ?>" alt=""
                        class="section-4-image" />
                    <div>
                        <p class="section-4-text">automotive parts</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-5.png' ?>" alt=""
                        class="section-4-image" />
                    <div>
                        <p class="section-4-text">doors</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-6.png' ?>" alt=""
                        class="section-4-image img-fluid" />
                    <div>
                        <p class="section-4-text">home furniture</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-7.png' ?>" alt=""
                        class="section-4-image" />
                    <div>
                        <p class="section-4-text">hospital products</p>
                    </div>
                </div>
                <div class="col-lg-3 col-6 item">
                    <img src="<?= get_template_directory_uri() . '/images/Home-section4-8.png' ?>" alt=""
                        class="section-4-image img-fluid" />
                    <div>
                        <p class="section-4-text">server racks</p>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<section class="home-section-5">
    <div class="section-5-image">
        <img src="<?= get_template_directory_uri() . '/images/home-section-5-1.png' ?>" alt=""
            class=" w-100 h-100 d-none d-md-block" />
        <img src="<?= get_template_directory_uri() . '/images/home-section-5-1-mobile.png' ?>" alt=""
            class=" w-100 h-100 d-md-none" />
        <div class="text-wrapper">
            <div class="row">
                <div class="col">
                    <h1 class="section-5-text left">A Good Craftmanship<br> Reflects The Quality,<br> Passion And
                        Precision.</h1>
                </div>
                <div class="col">
                    <p class="section-5-text right">We Aim To Exceeds Your Expectation Click To See Our Selected Client
                        Lists</p>
                    <div class="section-5-button">
                        <button type="button" class="btn btn-light bg-transparent" style="color: white !important;">Read
                            More</button>
                    </div>
                </div>
            </div>
        </div>

    </div>

</section>






<?= get_footer(); ?>