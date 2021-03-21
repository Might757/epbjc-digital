<!--- TÍTULOS -->
<div class="row">
    <div class="col-lg-12" id="titulo-curso">
        <script>
            //escolhe o nome do curso dependendo do url
            var pathname = window.location.pathname;
            if (pathname == "/epbjc_digital/ASC/asc.php") {
                $("#titulo-curso").append("<h1 style='margin-top: 25px'>Animação Sociocultural (Túristica, desportiva e de apoio à infância)</h1>");
            } else if (pathname == "/epbjc_digital/PSI/psi.php") {
                $("#titulo-curso").append("<h1 style='margin-top: 25px'>Técnico de Gestão e Programação de Sistemas Informáticos</h1>");
            } else if (pathname == "/epbjc_digital/COM/com.php") {
                $("#titulo-curso").append("<h1 style='margin-top: 25px'>Técnico de comunicação - Marketing, relações públicas e publicidade</h1>");
            } else if (pathname == "/epbjc_digital/TIG/tig.php") {
                $("#titulo-curso").append("<h1 style='margin-top: 25px'>Técnico de Informática de Gestão</h1>");
            }
        </script>
    </div>
</div>
<!--- OBJETIVOS DE CURSO E SAÍDAS PROFISSIONAIS -->
<div class="row">
    <div class="col-lg-5 col-md-5 col-sm-12">
        <div class="card" style="margin-top: 100px; ">
            <div class="card-body" id="objetivos-curso">
                <h5 class="card-title">OBJETIVOS DE CURSO</h5>
                <hr class="dropdown-divider"> 
                <script>
                    //escolhe os objetivos do curso dependendo do url
                    var pathname = window.location.pathname;
                    if (pathname == "/epbjc_digital/ASC/asc.php") {
                        $("#objetivos-curso").append("<p class='card-text'>O Curso Profissional de Animador Sociocultural tem como principais objetivos promover o desenvolvimento sociocultural de grupos e comunidades, através da organização e coordenação de atividades de animação de caráter turístico, desportivo,cultural, educativo, social, lúdico e recreativo.</p>");
                    } else if (pathname == "/epbjc_digital/PSI/psi.php") {
                        $("#objetivos-curso").append("<p class='card-text'>O Curso Profissional Técnico de Gestão e Programação de Sistemas Informáticos tem como principal objetivo desenvolver competências na área de criação de software, instalação e manutenção de computadores e de gestão de redes informáticas, bem como de aplicações desktop, web e mobile.</p>");
                    } else if (pathname == "/epbjc_digital/COM/com.php") {
                        $("#objetivos-curso").append("<p class='card-text'>O Curso Profissional de Técnico de Comunicação, Marketing, Relações Públicas e Publicidade tem como principais objetivos analisar situações de comunicação interpessoais e organizacionais, colaborando na deteção e formulação de problemas de natureza comunicacional e participando, de forma criativa e ativa, no desenvolvimento e planeamento de estratégias de marketing e publicidade.</p>");
                    } else if (pathname == "/epbjc_digital/TIG/tig.php") {
                        $("#objetivos-curso").append("<p class='card-text'>O Curso Profissional Técnico de Informática de Gestão tem como principal objetivo apoiar a coordenação de departamentos de informática e proceder ao desenvolvimento, instalação e utilização de aplicações informáticas em qualquer área funcional de uma organização ou empresa.</p>");
                    }
                </script>
            </div>
        </div>
    </div>
    <div class="col-lg-2 col-md-2 col-sm-12">

    </div>
    <div class="col-lg-5 col-md-5 col-sm-12">
        <div class="card" style="margin-top: 100px; ">
            <div class="card-body" id="saidas-curso">
                <h5 class="card-title">SAÍDAS PROFISSIONAIS</h5>
                <hr class="dropdown-divider">
                <script>
                    //escolhe as saídas do curso dependendo do url
                    var pathname = window.location.pathname;
                    if (pathname == "/epbjc_digital/ASC/asc.php") {
                        $("#saidas-curso").append("<ul class='card-text'>");
                        $("#saidas-curso").append("<li>Associações Culturais, Desportivas, Sociais ou de Jovens</li>");
                        $("#saidas-curso").append("<li>Empresas de Animação Turística ou de Produção de Espetáculos</li>");
                        $("#saidas-curso").append("<li>Escolas Pré-primárias, Ensino Básico e ATL’s</li>");
                        $("#saidas-curso").append("<li>Câmaras Municipais (departamentos de desporto, cultura) e Bibliotecas Municipais</li>");
                        $("#saidas-curso").append("<li>Entidades de Apoio à 3ª Idade</li>");
                        $("#saidas-curso").append("<li>Museus, Centros Culturais, Centros de Educação Ambiental</li>");
                        $("#saidas-curso").append("</ul>");
                    } else if (pathname == "/epbjc_digital/PSI/psi.php") {
                        $("#saidas-curso").append("<ul class='card-text'>");
                        $("#saidas-curso").append("<li>Empresas de desenvolvimento e manutenção de software</li>");
                        $("#saidas-curso").append("<li>Lojas de informática com serviço de apoio ao público</li>");
                        $("#saidas-curso").append("<li>Departamento informático de instituições públicas ou privadas</li>");
                        $("#saidas-curso").append("</ul>");
                    } else if (pathname == "/epbjc_digital/COM/com.php") {
                        $("#saidas-curso").append("<ul class='card-text'>");
                        $("#saidas-curso").append("<li>Empresas de Comunicação, Marketing e Publicidade</li>");
                        $("#saidas-curso").append("<li>Gabinetes de Comunicação de organismos públicos e privados</li>");
                        $("#saidas-curso").append("<li>Órgãos de Comunicação Social</li>");
                        $("#saidas-curso").append("</ul>");
                    } else if (pathname == "/epbjc_digital/TIG/tig.php") {
                        $("#saidas-curso").append("<ul class='card-text'>");
                        $("#saidas-curso").append("<li>Empresas de informática e equipamentos eletrónicos</li>");
                        $("#saidas-curso").append("<li>Empresas comerciais</li>");
                        $("#saidas-curso").append("<li>Bancos e seguradoras</li>");
                        $("#saidas-curso").append("<li>Pequenas e médias empresas</li>");
                        $("#saidas-curso").append("<li>Organismos públicos</li>");
                        $("#saidas-curso").append("</ul>");
                    }
                </script>
            </div>
        </div>
    </div>
</div>
<!--- FORMAÇÕES -->
<div class="row">
    <div class="card-group" style="  border: none; box-shadow: 0px 4px 8px 0px rgba(0,0,0,0.1); border-radius: 25px 25px 25px 25px; margin-top: 50px; ">
        <div class="card" style="box-shadow: none" >
            <div class="card-body" id="formacaoSociocultural">
                <h5 class="card-title">FORMAÇÃO SOCIOCULTURAL</h5>
                <hr class="dropdown-divider">
                <p class="card-text">Português <span style="float:right">320 horas</span></p>
                <p class="card-text">Língua Estrangeira I, II ou III <span style="float:right">220 horas</p>
                <p class="card-text">Área de Integração<span style="float:right"> 220 horas</p>
                <p class="card-text">Tecnologias da Informação e Comunicação <span style="float:right"> 100 horas</p>
                <p class="card-text">Educação Física <span style="float:right"> 140 horas</p>
                <p class="card-text">Educação Moral e Religiosa (frequência facultativa) <span style="float:right"> 81 horas</p>
            </div>
        </div>
        <div class="card" style="box-shadow: none">
            <div class="card-body" id="formacaoCientifica">
                <h5 class="card-title">FORMAÇÃO CIENTÍFICA</h5>
                <hr class="dropdown-divider">
                <script>
                    var pathname = window.location.pathname;
                    if (pathname == "/epbjc_digital/ASC/asc.php") {
                        $("#formacaoCientifica").append("<p class='card-text'>Psicologia <span style='float:right'>200 horas</span></p>");
                        $("#formacaoCientifica").append("<p class='card-text'>Sociologia <span style='float:right'>200 horas</span></p>");
                        $("#formacaoCientifica").append("<p class='card-text'>Matemática<span style='float:right'> 100 horas</span></p>");
                    } else if (pathname == "/epbjc_digital/PSI/psi.php") {
                        $("#formacaoCientifica").append("<p class='card-text'>Matemática<span style='float:right'> 300 horas</span></p>");
                        $("#formacaoCientifica").append("<p class='card-text'>Física Química <span style='float:right'>200 horas</span></p>");
                    } else if (pathname == "/epbjc_digital/COM/com.php") {
                        $("#formacaoCientifica").append("<p class='card-text'>Psicologia e Sociologia <span style='float:right'>200 horas</span></p>");
                        $("#formacaoCientifica").append("<p class='card-text'>História e Cultura das Artes <span style='float:right'>200 horas</span></p>");
                        $("#formacaoCientifica").append("<p class='card-text'>Matemática <span style='float:right'> 100 horas</span></p>");
                    } else if (pathname == "/epbjc_digital/TIG/tig.php") {
                        $("#formacaoCientifica").append("<p class='card-text'>Matemática <span style='float:right'> 300 horas</span></p>");
                        $("#formacaoCientifica").append("<p class='card-text'>Economia <span style='float:right'> 200 horas</span></p>");
                    }
                </script>
            </div>
        </div>
        <div class="card" style="box-shadow: none">
            <div class="card-body" id="formacaoTecnica">
                <h5 class="card-title">FORMAÇÃO TÉCNICA</h5>
                <hr class="dropdown-divider">
                <script>
                    var pathname = window.location.pathname;
                    if (pathname == "/epbjc_digital/ASC/asc.php") {
                        $("#formacaoTecnica").append("<p class='card-text'>Área de Expressões<span style='float:right'>440 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Área de Estudo da Comunidade<span style='float:right'>310 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Animação Sociocultural<span style='float:right'>350 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Formação em Contexto de Trabalho<span style='float:right'>600 horas</span></p>");
                    } else if (pathname == "/epbjc_digital/PSI/psi.php") {
                        $("#formacaoTecnica").append("<p class='card-text'>Sistemas Operativos<span style='float:right'>144 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Arquitetura de Computadores<span style='float:right'>144 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Redes de Comunicação<span style='float:right'>230 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Programação e Sistemas de Informação<span style='float:right'>582 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Formação em Contexto de Trabalho<span style='float:right'>600 horas</span></p>");
                    } else if (pathname == "/epbjc_digital/COM/com.php") {
                        $("#formacaoTecnica").append("<p class='card-text'>Marketing<span style='float:right'>270 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Comunicação Publicitária e Criatividade<span style='float:right'>240 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Técnicas e Práticas de Comunicação e Relações Públicas<span style='float:right'>240 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Comunicação Gráfica e Audiovisual<span style='float:right'>350 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Formação em Contexto de Trabalho<span style='float:right'>600 horas</span></p>");
                    } else if (pathname == "/epbjc_digital/TIG/tig.php") {
                        $("#formacaoTecnica").append("<p class='card-text'>Linguagens de Programação<span style='float:right'>433 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Organização de Empresas e Aplicações de Gestão<span style='float:right'>252 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Sistemas de Informação<span style='float:right'>245 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Aplicações Informáticas e Sistemas de Exploração<span style='float:right'>170 horas</span></p>");
                        $("#formacaoTecnica").append("<p class='card-text'>Formação em Contexto de Trabalho<span style='float:right'>600 horas</span></p>");
                    }
                </script>
            </div>
        </div>
    </div>
</div>
