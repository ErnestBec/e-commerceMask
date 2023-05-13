<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@400;700;800&family=Kumbh+Sans:wght@400;700&display=swap"
        rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <header class="container-navbar">
        <nav class="navbar navbar-expand-lg navbar-dark">
            <div class="container-fluid">
                <a class="navbar-brand  d-none d-sm-none d-lg-inline" href="#">
                    <img class="icon_mask" src="../resources/imgs/logoMask.png" alt="logotipo">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- buttons mobil -->
                <div class="d-lg-none">
                    <nav class="nav">
                        <li class="nav-item dropdown">
                            <?php

                                if (isset($_SESSION["login"])) {
                                    ?>
                            <a href="#">
                                <!-- Button cart Desktop -->
                                <svg class="me-3" width="54" height="40" viewBox="0 0 54 40" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g clip-path="url(#clip0_114_9)">
                                        <path
                                            d="M24.75 15.0001H29.25V10.0001H36V6.66675H29.25V1.66675H24.75V6.66675H18V10.0001H24.75V15.0001ZM15.75 30.0001C13.275 30.0001 11.2725 31.5001 11.2725 33.3334C11.2725 35.1667 13.275 36.6667 15.75 36.6667C18.225 36.6667 20.25 35.1667 20.25 33.3334C20.25 31.5001 18.225 30.0001 15.75 30.0001ZM38.25 30.0001C35.775 30.0001 33.7725 31.5001 33.7725 33.3334C33.7725 35.1667 35.775 36.6667 38.25 36.6667C40.725 36.6667 42.75 35.1667 42.75 33.3334C42.75 31.5001 40.725 30.0001 38.25 30.0001ZM16.1325 24.5834L16.2 24.3834L18.225 21.6667H34.9875C36.675 21.6667 38.16 20.9834 38.925 19.9501L47.61 8.26675L43.695 6.66675H43.6725L41.1975 10.0001L34.9875 18.3334H19.1925L18.9 17.8834L13.86 10.0001L11.7225 6.66675L9.6075 3.33341H2.25V6.66675H6.75L14.85 19.3167L11.8125 23.4001C11.4525 23.8667 11.25 24.4167 11.25 25.0001C11.25 26.8334 13.275 28.3334 15.75 28.3334H42.75V25.0001H16.695C16.4025 25.0001 16.1325 24.8167 16.1325 24.5834Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_114_9">
                                            <rect width="54" height="40" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <?php
                                }
                                ?>
                            <!-- Button user Desktop -->
                            <?php

                                if (isset($_SESSION["login"])) {
                                    ?>



                            <svg class="me-3" width="54" height="40" viewBox="0 0 56 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg" type="button" id="navbarDarkDropdownMenuLink"
                                data-bs-toggle="dropdown" aria-expanded="false">

                                <g clip-path=" url(#clip0_114_13)">
                                    <path
                                        d="M28 4.08325C15.12 4.08325 4.66669 13.2299 4.66669 24.4999C4.66669 35.7699 15.12 44.9166 28 44.9166C40.88 44.9166 51.3334 35.7699 51.3334 24.4999C51.3334 13.2299 40.88 4.08325 28 4.08325ZM28 10.2083C31.8734 10.2083 35 12.9441 35 16.3333C35 19.7224 31.8734 22.4583 28 22.4583C24.1267 22.4583 21 19.7224 21 16.3333C21 12.9441 24.1267 10.2083 28 10.2083ZM28 39.1999C22.1667 39.1999 17.01 36.5866 14 32.6257C14.07 28.5628 23.3334 26.3374 28 26.3374C32.6434 26.3374 41.93 28.5628 42 32.6257C38.99 36.5866 33.8334 39.1999 28 39.1999Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_114_13">
                                        <rect width="56" height="49" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>



                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href="#">Configuracion</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item text-danger" href="../controllers/logOut.php">Cerrar
                                        Sesion</a></li>
                            </ul>
                        </li>


                        <?php
                                } else {
                                    ?>
                        <a href="pageLogin.php">

                            <svg class="me-3" width="54" height="40" viewBox="0 0 56 49" fill="none"
                                xmlns="http://www.w3.org/2000/svg" type="button">

                                <g clip-path="url(#clip0_114_13)">
                                    <path
                                        d="M28 4.08325C15.12 4.08325 4.66669 13.2299 4.66669 24.4999C4.66669 35.7699 15.12 44.9166 28 44.9166C40.88 44.9166 51.3334 35.7699 51.3334 24.4999C51.3334 13.2299 40.88 4.08325 28 4.08325ZM28 10.2083C31.8734 10.2083 35 12.9441 35 16.3333C35 19.7224 31.8734 22.4583 28 22.4583C24.1267 22.4583 21 19.7224 21 16.3333C21 12.9441 24.1267 10.2083 28 10.2083ZM28 39.1999C22.1667 39.1999 17.01 36.5866 14 32.6257C14.07 28.5628 23.3334 26.3374 28 26.3374C32.6434 26.3374 41.93 28.5628 42 32.6257C38.99 36.5866 33.8334 39.1999 28 39.1999Z"
                                        fill="white" />
                                </g>
                                <defs>
                                    <clipPath id="clip0_114_13">
                                        <rect width="56" height="49" fill="white" />
                                    </clipPath>
                                </defs>
                            </svg>
                        </a>
                        <?php
                                }
                                ?>
                    </nav>
                </div>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                        </li>
                        <?php

                        if (isset($_SESSION["login"])) {
                            ?>
                        <li class="nav-item">
                            <a class="nav-link" href="misPedidos.php">Mis Compras</a>
                        </li>
                        <?php
                        }
                        ?>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contactanos</a>
                        </li>


                    </ul>
                    <form class="d-flex justify-content-center align-items-center d-none d-sm-none d-lg-inline me-5">
                        <div class="d-flex justify-content-center align-items-center  search-input rounded-pill ">
                            <input style="width:250px;  height:50px;" class="border-0 form-control  rounded-pill "
                                type="search" placeholder="Buscar...">

                            <div class="d-flex align-items-center ">
                                <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M19 19L13 13M15 8C15 9.38447 14.5895 10.7378 13.8203 11.889C13.0511 13.0401 11.9579 13.9373 10.6788 14.4672C9.3997 14.997 7.99224 15.1356 6.63437 14.8655C5.2765 14.5954 4.02922 13.9287 3.05026 12.9497C2.07129 11.9708 1.4046 10.7235 1.13451 9.36563C0.86441 8.00777 1.00303 6.6003 1.53285 5.32122C2.06266 4.04213 2.95987 2.94888 4.11101 2.17971C5.26216 1.41054 6.61553 1 8 1C9.85652 1 11.637 1.7375 12.9497 3.05025C14.2625 4.36301 15 6.14348 15 8Z"
                                        stroke="#918F8F" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>

                        </div>
                    </form>
                    <!-- buttons desktop -->

                    <div class="me-5 d-none d-sm-none d-lg-inline">
                        <nav class="nav">
                            <li class="nav-item dropdown">
                                <?php

                                if (isset($_SESSION["login"])) {
                                    ?>
                                <a href="#">
                                    <!-- Button cart Desktop -->
                                    <svg class="me-3" width="54" height="40" viewBox="0 0 54 40" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_114_9)">
                                            <path
                                                d="M24.75 15.0001H29.25V10.0001H36V6.66675H29.25V1.66675H24.75V6.66675H18V10.0001H24.75V15.0001ZM15.75 30.0001C13.275 30.0001 11.2725 31.5001 11.2725 33.3334C11.2725 35.1667 13.275 36.6667 15.75 36.6667C18.225 36.6667 20.25 35.1667 20.25 33.3334C20.25 31.5001 18.225 30.0001 15.75 30.0001ZM38.25 30.0001C35.775 30.0001 33.7725 31.5001 33.7725 33.3334C33.7725 35.1667 35.775 36.6667 38.25 36.6667C40.725 36.6667 42.75 35.1667 42.75 33.3334C42.75 31.5001 40.725 30.0001 38.25 30.0001ZM16.1325 24.5834L16.2 24.3834L18.225 21.6667H34.9875C36.675 21.6667 38.16 20.9834 38.925 19.9501L47.61 8.26675L43.695 6.66675H43.6725L41.1975 10.0001L34.9875 18.3334H19.1925L18.9 17.8834L13.86 10.0001L11.7225 6.66675L9.6075 3.33341H2.25V6.66675H6.75L14.85 19.3167L11.8125 23.4001C11.4525 23.8667 11.25 24.4167 11.25 25.0001C11.25 26.8334 13.275 28.3334 15.75 28.3334H42.75V25.0001H16.695C16.4025 25.0001 16.1325 24.8167 16.1325 24.5834Z"
                                                fill="white" />
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_114_9">
                                                <rect width="54" height="40" fill="white" />
                                            </clipPath>
                                        </defs>
                                    </svg>
                                </a>
                                <?php
                                }
                                ?>
                                <!-- Button user Desktop -->
                                <?php

                                if (isset($_SESSION["login"])) {
                                    ?>



                                <svg class="me-3" width="54" height="40" viewBox="0 0 56 49" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" type="button" id="navbarDarkDropdownMenuLink"
                                    data-bs-toggle="dropdown" aria-expanded="false">

                                    <g clip-path=" url(#clip0_114_13)">
                                        <path
                                            d="M28 4.08325C15.12 4.08325 4.66669 13.2299 4.66669 24.4999C4.66669 35.7699 15.12 44.9166 28 44.9166C40.88 44.9166 51.3334 35.7699 51.3334 24.4999C51.3334 13.2299 40.88 4.08325 28 4.08325ZM28 10.2083C31.8734 10.2083 35 12.9441 35 16.3333C35 19.7224 31.8734 22.4583 28 22.4583C24.1267 22.4583 21 19.7224 21 16.3333C21 12.9441 24.1267 10.2083 28 10.2083ZM28 39.1999C22.1667 39.1999 17.01 36.5866 14 32.6257C14.07 28.5628 23.3334 26.3374 28 26.3374C32.6434 26.3374 41.93 28.5628 42 32.6257C38.99 36.5866 33.8334 39.1999 28 39.1999Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_114_13">
                                            <rect width="56" height="49" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>



                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Configuracion</a></li>
                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                    <li>
                                        <hr class="dropdown-divider">
                                    </li>
                                    <li><a class="dropdown-item text-danger" href="../controllers/logOut.php">Cerrar
                                            Sesion</a></li>
                                </ul>
                            </li>


                            <?php
                                } else {
                                    ?>
                            <a href="pageLogin.php">

                                <svg class="me-3" width="54" height="40" viewBox="0 0 56 49" fill="none"
                                    xmlns="http://www.w3.org/2000/svg" type="button">

                                    <g clip-path="url(#clip0_114_13)">
                                        <path
                                            d="M28 4.08325C15.12 4.08325 4.66669 13.2299 4.66669 24.4999C4.66669 35.7699 15.12 44.9166 28 44.9166C40.88 44.9166 51.3334 35.7699 51.3334 24.4999C51.3334 13.2299 40.88 4.08325 28 4.08325ZM28 10.2083C31.8734 10.2083 35 12.9441 35 16.3333C35 19.7224 31.8734 22.4583 28 22.4583C24.1267 22.4583 21 19.7224 21 16.3333C21 12.9441 24.1267 10.2083 28 10.2083ZM28 39.1999C22.1667 39.1999 17.01 36.5866 14 32.6257C14.07 28.5628 23.3334 26.3374 28 26.3374C32.6434 26.3374 41.93 28.5628 42 32.6257C38.99 36.5866 33.8334 39.1999 28 39.1999Z"
                                            fill="white" />
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_114_13">
                                            <rect width="56" height="49" fill="white" />
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <?php
                                }
                                ?>
                        </nav>
                    </div>
                </div>
            </div>
        </nav>
        <form class="d-flex justify-content-center d-lg-none  mt-3">
            <div class="d-flex justify-content-center  search-input rounded-pill mb-3">
                <input style="width:250px;  height:50px;" class="border-0 form-control  rounded-pill " type="search"
                    placeholder="Buscar..." aria-label="Search">

                <div class="d-flex align-items-center ">
                    <svg width="20" height="20" viewBox="0 0 20 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M19 19L13 13M15 8C15 9.38447 14.5895 10.7378 13.8203 11.889C13.0511 13.0401 11.9579 13.9373 10.6788 14.4672C9.3997 14.997 7.99224 15.1356 6.63437 14.8655C5.2765 14.5954 4.02922 13.9287 3.05026 12.9497C2.07129 11.9708 1.4046 10.7235 1.13451 9.36563C0.86441 8.00777 1.00303 6.6003 1.53285 5.32122C2.06266 4.04213 2.95987 2.94888 4.11101 2.17971C5.26216 1.41054 6.61553 1 8 1C9.85652 1 11.637 1.7375 12.9497 3.05025C14.2625 4.36301 15 6.14348 15 8Z"
                            stroke="#918F8F" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </div>

            </div>
        </form>
    </header>