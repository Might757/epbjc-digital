    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#"><img class="logoNav" src="../img/navbarLogo.png" width="250px" height="67px"></img></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 mx-auto" >
            <li class="nav-item">
                <a class="nav-link " aria-current="page" href="../index.php">Homepage</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="areaSocialDropdown" role="button" data-bs-toggle="dropdown" aria-current="page" href="">Área Sociocultural</a>
                <ul class="dropdown-menu dropdownAnimation" id="areaSociocultural">
                    <li><a class="dropdown-item" href="#" >Português</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="areaCientificaDropdown" role="button" data-bs-toggle="dropdown" aria-current="page" href="">Área Científica</a>
                <ul class="dropdown-menu dropdownAnimation" id="areaCientifica">
                <script>
                //script escolhe as disciplinas da área ciêntifica dependendo do url
                    var pathname = window.location.pathname;
                    console.log(pathname)
                    if (pathname == "/epbjc_digital/ASC/asc.php" || pathname == "/epbjc_digital/COM/com.php") {
                        $("#areaCientifica").append("<li><a class='dropdown-item' href='#'>Psicologia</a></li>");
                        $("#areaCientifica").append("<li><hr class='dropdown-divider'></li>");
                    } else if (pathname == "/epbjc_digital/PSI/psi.php") {
                        $("#areaCientifica").append("<li><a class='dropdown-item' href='#'>Física-Química</a></li>");
                        $("#areaCientifica").append("<li><hr class='dropdown-divider'></li>");
                    } else if (pathname == "/epbjc_digital/TIG/tig.php") {
                        $("#areaCientifica").append("<li><a class='dropdown-item' href='#'>Economia</a></li>");
                        $("#areaCientifica").append("<li><hr class='dropdown-divider'></li>");
                        } 
                </script>
                    <li><a class="dropdown-item" href="#" >Matemática</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="areaSocialDropdown" role="button" data-bs-toggle="dropdown" aria-current="page" href="">Área Técnica</a>
                <ul class="dropdown-menu dropdownAnimation" id="areaTecnica">
                <script>
                //script escolhe as disciplinas da área técnica dependendo do url
                        var pathname = window.location.pathname;
                        console.log(pathname)
                        if (pathname == "/epbjc_digital/ASC/asc.php") {
                            $("#areaTecnica").append("<li><a class='dropdown-item' href='#'>Animação Sociocultural</a></li>");
                        } else if (pathname == "/epbjc_digital/PSI/psi.php" || pathname == "/epbjc_digital/TIG/tig.php") {
                            $("#areaTecnica").append("<li><a class='dropdown-item' href='#'>P.S.I.</a></li>");
                        } else if (pathname == "/epbjc_digital/COM/com.php") {
                            $("#areaTecnica").append("<li><a class='dropdown-item' href='#'>Marketing</a></li>");
                            $("#areaTecnica").append("<li><hr class='dropdown-divider'></li>");
                            $("#areaTecnica").append("<li><a class='dropdown-item' href='#'>C.O.M.</a></li>");
                        }
                    </script>
                </ul>
            </li>
        </ul>
        <ul class="navbar-nav ms-0 mb-2 mb-lg-0" >
        <li class="nav-item">
            <a class="nav-link " aria-current="page" href="../index.php"><button class="pickCourse"><span class="buttonIcon"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-caret-left-fill" viewBox="0 0 16 16">
  <path d="M3.86 8.753l5.482 4.796c.646.566 1.658.106 1.658-.753V3.204a1 1 0 0 0-1.659-.753l-5.48 4.796a1 1 0 0 0 0 1.506z"/></span>
</svg><span class="buttonText">Escolher outro curso</span>
</button></a>
        </li>
        </ul>
        <!---
        <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
        -->
    </div>
    </div>
    </nav>
