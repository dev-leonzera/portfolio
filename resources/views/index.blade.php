<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dev Leonzera - O Portfólio</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet" />
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="profile box">
            <img class="profile-pic" src="img/profile.jpg" alt="Profile" />
            <h1 class="title">Leonardo Andrade</h1>
            <span>Natal, RN, Brasil</span>
            <p>WEB FULLSTACK DEVELOPER</p>
            <ul class="redes-sociais">
                <li>
                    <a href="https://www.github.com/dev-leonzera"><img
                            src="https://img.icons8.com/color/48/000000/github.png" /></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/leonandrade"><img
                            src="https://img.icons8.com/color/48/000000/linkedin--v1.png" /></a>
                </li>
                <li>
                    <a href="{{ asset('pdf/curriculum.pdf') }}"><img
                            src="https://img.icons8.com/color/48/000000/resume.png" /></a>
                </li>
            </ul>
        </div>
        <div class="portfolio box">
            <div class="portfolio-about">
                <h1 class="title">Quem sou eu?</h1>
                <br />
                <p>
                    Sou um desenvolvedor web altamente motivado e dedicado, sempre em busca de aprender coisas novas e
                    aperfeiçoar minhas habilidades. Tenho um pensamento analítico e criativo que me permite encontrar
                    soluções eficazes para problemas complexos. Sou determinado e comprometido com a entrega de
                    resultados de alta qualidade, mas também entendo a importância de encontrar um equilíbrio entre
                    excelência e cumprimento de prazos.
                </p>
                <br>
                <p>
                    Além disso, tenho uma atitude positiva e uma forte ética de trabalho. Estou sempre disposto a
                    enfrentar novos desafios e trabalhar em equipe para atingir objetivos compartilhados. Comunico-me
                    bem e sou capaz de me adaptar a mudanças, buscando sempre soluções criativas para resolver
                    problemas.
                </p>
                <br>
                <p>
                    Estou ansioso para contribuir com meus esforços e dedicação para ajudar a sua empresa a alcançar
                    seus objetivos.
                </p>
                <br />

            </div>
        </div>
        <div class="portfolio box">
            <h1 class="title">
                Quais são as minhas ferramentas de trabalho?
            </h1>
            <div>
                <div class="portfolio-toolbox-list">
                    <img src="https://img.icons8.com/color/50/000000/html-5--v1.png" />
                    <img src="https://img.icons8.com/color/50/000000/css3.png" />
                    <img src="https://img.icons8.com/color/50/000000/javascript--v1.png" />
                    <img src="https://img.icons8.com/color/50/000000/typescript.png" />
                    <img src="https://img.icons8.com/officel/50/000000/php-logo.png" />
                    <img src="https://img.icons8.com/fluency/50/000000/laravel.png" />
                    <img src="https://img.icons8.com/color/50/000000/nodejs.png" />
                    <img src="https://img.icons8.com/color/50/000000/bootstrap.png" />
                    <img
                        src="https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/50/000000/external-vuejs-an-open-source-javascript-framework-for-building-user-interfaces-and-single-page-applications-logo-shadow-tal-revivo.png" />
                    <img src="https://img.icons8.com/color/50/000000/react-native.png" />
                    <img src="https://img.icons8.com/color/50/000000/docker.png" alt="">
                    <img src="https://img.icons8.com/color/50/000000/mongodb.png" />
                    <img src="https://img.icons8.com/color/50/000000/mysql-logo.png" />
                    <img src="https://img.icons8.com/color/50/amazon-web-services.png" />
                </div>
            </div>
        </div>
        <div class="portfolio box">
            <h1 class="title">Por onde já passei?</h1>
            @include('sections.experiences')
        </div>

        {{-- <div class="portfolio box">
            <h1 class="title">O que eu já fiz?</h1>
            @include('sections.projects')
        </div> --}}

        <div class="contato box">
            <h1 class="title">E por que você já deveria ter me contratado?</h1>
            <br>
            <p>
            <p>
                Porque você está buscando um desenvolvedor que, além de saber digitar
                códigos, seja um profissional que vista a camisa da sua empresa e
                esteja disposto a entregar o melhor, seja colaborativo, que esteja pronto para enfrentar
                seus desafios e tenha vontade de crescer.</p></br></br>Acertei? Então sua busca
            acaba aqui.

            </p>
            <br />
            <h3>Entre em contato e sua vaga será preenchida</h3>
            <br />
            <ul class="redes-sociais">
                <li>
                    <a href="mailto: leonandrade22@gmail.com"><img
                            src="https://img.icons8.com/color/48/000000/gmail-new.png" /></a>
                </li>
                <li>
                    <a href="https://www.linkedin.com/in/leonandrade"><img
                            src="https://img.icons8.com/color/48/000000/linkedin--v1.png" /></a>
                </li>
                <li>
                    <a href="{{ asset('pdf/curriculum.pdf') }}"><img
                            src="https://img.icons8.com/color/48/000000/resume.png" /></a>
                </li>
            </ul>
        </div>
        <p class="copyright">© {{ date('Y') }} Leonardo "Leonzera" Andrade</p>
    </div>
</body>

</html>
