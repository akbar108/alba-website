<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

    <?= wp_head() ?>

    <script>
    // function hamburgerBtn () {
    //     document.getElementById("open-btn").style.display="none";
    //     document.getElementById("close-btn").style.display="block";
    // }
    // const menu = document.querySelector("#mobile-menu");
    // const menuLinks = document.querySelector(".navbar-nav");

    // const mobileMenu = () => {
    //     menu.classList.toggle("is-active");
    //     menuLinks.classList.toggle("active");
    // };
    // menu.addEventListener("click", mobileMenu)

    // const hideMobileMenu = () => {
    //     const menuBars = document.querySelector(".is-active");
    //     if (window.innerWidth <= 768 && menuBars) {
    //         menu.classList.toggle("is-active");
    //         menuLinks.classList.remove("active");
    //     }
    // };

    // menuLinks.addEventListener("click", hideMobileMenu);

    // let btn = document.querySelector(".navbar-toggler");
    // let closeIcon = document.querySelector(".bi-list");
    // let openIcon = document.querySelector(".bi-x-lg");

    // function changeIcon() {
    //     if (btn.classLIst.contains(openIcon)) {
    //         btn.classList.replace(openIcon, closeIcon)
    //     } else(btn.classList.replace(closeIcon, openIcon))
    // }
    </script>
</head>


<body>
    <nav class="navbar navbar-expand-lg bg-transparent  position-absolute">
        <div class="container-fluid ">
            <a class="brand" >
                <img src="<?= get_template_directory_uri() . "/images/Title.png" ?>" height="30" width="30" alt=""
                    style="height:
                     39.95px !important; 
                     width: 149.92px !important;" class="brand">
            </a>

            <button class="navbar-toggler" id="mobile-menu" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false"
                aria-label="Toggle navigation">
                <span onclick="changeIcon()">
                    <i class="bi bi-list text-warning" id="open-btn"></i>
                   
                </span>
                <!-- <span><i class="bi bi-x text-warning" id="close-btn"></i></span> -->
            </button>


            <div class="navbar-menu collapse navbar-collapse justify-content-center" id="navbarText">

                <ul class="navbar-nav mb-2 mb-lg-0 me-5">
                    <li class="nav-item me-2">
                        <a class="nav-link center active text-white" aria-current="page" href="#home">products
                            <img src="<?= get_template_directory_uri() . "/images/Arrow-down.png" ?>"
                                class="mx-4 arrow-down" alt="" style="height:
                              15.04px !important; width: 15.04px !important; z-index: 99; !important">
                        </a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link center active text-white" href="#">about</a>
                    </li>
                    <li class="nav-item me-2">
                        <a class="nav-link center active  text-white" href="#">contact</a>
                    </li>
                </ul>





                <ul class="navbar-nav language mb-lg-0 mt-2">
                    <li class="nav-item ">
                        <a class="nav-link active" href="#">
                            <img src="<?= get_template_directory_uri() . "/images/Search.png" ?>" height="30" width="30"
                                alt="" style="height:30px !important; width: 30px !important;">
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang active fw-bold text-white" href="#">ENG</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang text-white fw-bolder" href="#">|</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link lang bhs active text-white fw-light" href="#">IDN</a>
                    </li>
                </ul>
            </div>

            <!-- <div class="navbar-menu language collapse navbar-collapse " id="navbarText">
                
            </div> -->
        </div>
    </nav>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>