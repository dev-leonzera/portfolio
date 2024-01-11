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
                    <a href="{{ asset('pdf/cv-leonardo.pdf') }}"><img
                            src="https://img.icons8.com/color/48/000000/resume.png" /></a>
                </li>
            </ul>
        </div>
        <div class="portfolio box">
            @include('sections.about')
        </div>
        <div class="portfolio box">
            @include('sections.toolbox')
        </div>
        <div class="portfolio box">
            <h1 class="title">Por onde já passei?</h1>
            @include('sections.experiences')
        </div>

        <div class="portfolio box">
            <h1 class="title">O que eu já fiz?</h1>
            @include('sections.projects')
        </div>

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
                    <a href="{{ asset('pdf/cv-leonardo.pdf') }}"><img
                            src="https://img.icons8.com/color/48/000000/resume.png" /></a>
                </li>
            </ul>
        </div>
        <p class="copyright">© {{ date('Y') }} Leonardo "Leonzera" Andrade</p>
    </div>
</body>

</html>
