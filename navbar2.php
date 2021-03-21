<!--========== HEADER ==========-->
<header class="header">
    <div class="header__container">

        <a href="#" class="header__logo">EPBJC Digital</a>
        <link href="bootstrap/css/btnBack.css" rel="stylesheet">
        <div class="header__search">
            <!---
                <input type="search" placeholder="Search" class="header__input">
                <i class='bx bx-search header__icon'></i>
            -->
            <a href="../index.php" class="header__input"><i class='bx bx-left-arrow header__icon' style="vertical-align: middle; margin-right: 5px; font-size: 14px;"></i>Escolher outro curso</a>
        </div>
        <div class="header__toggle">
            <i class='bx bx-menu' id="header-toggle"></i>
        </div>
</header>
        <!--========== NAV ==========-->
<div class="nav" id="navbar">
    <nav class="nav__container">
        <div>
            <a href="#" class="nav__link nav__logo">
                <img src="../img/logo_epbjc_mini.svg" class='nav__icon epbjc__icon' ></img>
                <span class="nav__logo-name">EPBJC Digital</span>
            </a>

            <div class="nav__list">
            <!--============= ÁREA SOCIOCULTURAL =======-->
                <div class="nav__items">
                    <a href="#" class="nav__link active">
                        <i class='bx bx-home nav__icon' ></i>
                        <span class="nav__name">Home</span>
                    </a>
                    
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                            <i class='bx bx-book-alt nav__icon' ></i>
                            <span class="nav__name">Área Sociocultural</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content" id="areaSocial">
                                <a href='#' class='nav__dropdown-item'>Português</a>
                            </div>
                        </div>
                    </div>
                </div>
            <!--============= ÁREA CIENTÍFICA =======-->
                <div class="nav__items">
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                        <i class='bx bx-atom nav__icon'></i>
                            <span class="nav__name">Área Científica</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content" id="areaCientifica">
                                <script>
                                    //script escolhe as disciplinas da área técnica dependendo do url
                                    var pathname = window.location.pathname;
                                    console.log(pathname)
                                    if (pathname == "/epbjc_digital/ASC/asc.php") {
                                        $("#areaCientifica").append("<a href='#' class='nav__dropdown-item'>Psicología</a>");
                                    } else if (pathname == "/epbjc_digital/PSI/psi.php" || pathname == "/epbjc_digital/TIG/tig.php") {
                                        $("#areaCientifica").append("<a href='#' class='nav__dropdown-item'>Física-Química</a>");
                                    } else if (pathname == "/epbjc_digital/COM/com.php") {
                                        $("#areaCientifica").append("<a href='#' class='nav__dropdown-item'>Economia</a>");
                                    }
                                </script>
                            <a href='#' class='nav__dropdown-item'>Matemática</a>
                            </div>
                        </div>

                    </div>
                </div>
                <!--============= ÁREA TÉCNICA ============-->
                
                <div class="nav__items">
                    <div class="nav__dropdown">
                        <a href="#" class="nav__link">
                        <i class='bx bx-window-alt nav__icon'></i>
                            <span class="nav__name">Área Técnica</span>
                            <i class='bx bx-chevron-down nav__icon nav__dropdown-icon'></i>
                        </a>

                        <div class="nav__dropdown-collapse">
                            <div class="nav__dropdown-content" id="areaTecnica">
                                <script>
                                    //script escolhe as disciplinas da área técnica dependendo do url
                                    var pathname = window.location.pathname;
                                    console.log(pathname)
                                    if (pathname == "/epbjc_digital/ASC/asc.php") {
                                        $("#areaTecnica").append("<a href='#' class='nav__dropdown-item'>Animação Sociocultural</a>");
                                    } else if (pathname == "/epbjc_digital/PSI/psi.php" || pathname == "/epbjc_digital/TIG/tig.php") {
                                        $("#areaTecnica").append("<a href='#' class='nav__dropdown-item'>P.S.I.</a>");
                                    } else if (pathname == "/epbjc_digital/COM/com.php") {
                                        $("#areaTecnica").append("<a href='#' class='nav__dropdown-item'>Marketing</a>");
                                        $("#areaTecnica").append("<a href='#' class='nav__dropdown-item'>C.O.M.</a>");
                                    }
                                </script>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
</div>