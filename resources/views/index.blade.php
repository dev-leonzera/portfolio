<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dev Leonzera - O Portfólio</title>
    <link href="https://fonts.googleapis.com/css2?family=Source+Code+Pro&display=swap" rel="stylesheet" />
    {{-- <link rel="stylesheet" href="../css/style.css" /> --}}
    <style>
        * {
            margin: 0;
            padding: 0;
        }

        img {
            display: block;
            max-width: 100%;
        }

        li {
            list-style: none;
        }

        body {
            font-family: "Source Code Pro", monospace;
            background: url("../img/bg2.jpg") no-repeat top center;
            background-attachment: fixed;
            background-size: cover;
            display: grid;
            align-items: center;
            justify-items: center;
            height: 100vh;
            color: black;
        }

        .container {
            padding: 0 16px;
        }

        .title {
            font-size: 36px;
            font-weight: normal;
        }

        .profile {
            max-width: 452px;
            box-sizing: border-box;
            margin: 0 auto;
        }

        .box {
            background: #eee;
            padding: 3rem;
            box-shadow: 2px 2px 16px rgba(0, 0, 0, 0.16);
            border-radius: 50px;
            text-align: center;
            margin-top: 8rem;
        }

        .profile-pic {
            border-radius: 50%;
            margin: 0 auto 2rem auto;
        }

        .profile span {
            font-size: 24px;
        }

        .profile p {
            font-size: 18px;
            margin-top: 2rem;
            margin-bottom: 4rem;
        }

        .redes-sociais,
        #tech-list {
            display: flex;
            justify-content: center;
        }

        .redes-sociais li {
            margin-right: 1rem;
        }

        .portfolio {
            max-width: 886px;
            box-sizing: border-box;
        }

        .portfolio ul {
            margin-top: 3rem;
        }

        .portfolio li {
            display: grid;
            grid-template-columns: 1fr 1fr;
            text-align: left;
            gap: 1rem;
            color: #606060;
        }

        .portfolio-about p,
        .portfolio-experience-item p,
        .contato p {
            text-align: justify;
            line-height: 2.0;
        }

        .portfolio-content {
            display: flex;
            gap: 10px;
            justify-content: center;
            margin-top: 40px;
        }

        .portfolio-content img {
            width: 260px;
            height: 150px;
        }

        .portfolio-experience {
            display: flex;
            flex-direction: column;
            gap: 10px;
            justify-content: center;
            padding: 20px;
        }

        .portfolio-experience-item {}

        .portfolio-toolbox {
            display: flex;
            gap: 10px;
            justify-content: center;
            padding: 20px;
        }

        .portfolio-toolbox-list {
            display: flex;
            flex-flow: wrap;
            justify-content: center;
            gap: 40px;
            margin-top: 40px;
        }

        #toolbox-list {
            display: flex;
            justify-content: center;
        }

        .portfolio-toolbox #toolbox-list ul {
            margin-top: 1rem;
        }

        #toolbox-list li,
        #tech-list li {
            display: grid;
            grid-template-columns: 1fr 1fr;
            text-align: left;
            gap: 1px;
            color: #606060;
            margin-top: 0;
        }

        .contato {
            max-width: 886px;
            box-sizing: border-box;
            margin: 80px auto;
        }

        .portfolio li+li {
            margin-top: 2rem;
        }

        .portfolio img {
            border-radius: 10px;
        }

        .portfolio h2 {
            font-weight: normal;
            margin-bottom: 1rem;
        }

        .copyright {
            font-size: 24px;
            color: aliceblue;
            text-shadow: 2px 2px 16px black;
            margin-top: 50vh;
            padding-bottom: 50vh;
            text-align: center;
        }

        /* .img-projeto{
  margin: 20px auto;
} */

        .texto {}

        @media (max-width: 600px) {
            body {
                background-attachment: initial;
                background-size: contain;
                background-color: #f0e6da;
            }

            .box {
                padding: 2rem;
                margin-top: 4rem;
                border-radius: 30px;
            }

            .box:first-child {
                padding: 3rem;
            }

            .portfolio ul {
                margin-top: 1rem;
            }

            .portfolio li {
                grid-template-columns: 1fr;
                justify-items: center;
            }

            .portfolio li div {
                max-width: 448px;
            }

            .copyright {
                font-size: 18px;
                color: #606060;
                text-shadow: none;
                margin: 0;
                padding: 4rem 0;
            }
        }
    </style>
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
                    <a href="curriculum.pdf"><img src="https://img.icons8.com/color/48/000000/resume.png" /></a>
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
            <div class="portfolio-experience">
                <div class="portfolio-experience-item">
                    <h2>AR Consultoria em Informática</h2>
                    <h3>Desenvolvedor Fullstack</h3>
                    <br>
                    <h4>Dez 2020 - Set 2021 </h4>
                    <br>
                    <p>
                        Responsável pela manutenção de projetos atuais e desenvolvimento de novas funcionalidades para
                        sistemas web
                        internos e externos, e websites, utilizando as tecnologias:
                    </p>
                    <br>
                    <ul id="tech-list">
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/html-5--v1.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/css3.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/javascript--v1.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/bootstrap.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/typescript.png" />
                        </li>

                        <li>
                            <img src="https://img.icons8.com/officel/50/000000/php-logo.png" />
                        </li>

                        <li>
                            <img src="https://img.icons8.com/color/50/angularjs.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/mysql-logo.png" />
                        </li>
                    </ul>

                    <br>
                </div>
                <hr>
                <div class="portfolio-experience-item">
                    <h2>Nova M3</h2>
                    <h3>Desenvolvedor Fullstack</h3>
                    <br>
                    <h4>Jan 2022 - Fev 2023</h4>
                    <br>
                    <p>
                        Atuando como desenvolvedor web fullstack na manutenção de projetos atuais e desenvolvimento de
                        novos
                        projetos e funcionalidades, utilizando as tecnologias:
                    </p>
                    <br>
                    <ul id="tech-list">
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/html-5--v1.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/css3.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/javascript--v1.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/bootstrap.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/fluency/50/000000/laravel.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/officel/50/000000/php-logo.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/docker.png" alt="">
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/mysql-logo.png" />
                        </li>
                        <li>
                            <img
                                src="https://img.icons8.com/external-tal-revivo-shadow-tal-revivo/50/000000/external-vuejs-an-open-source-javascript-framework-for-building-user-interfaces-and-single-page-applications-logo-shadow-tal-revivo.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/react-native.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/amazon-web-services.png" />
                        </li>
                    </ul>
                    <br>
                </div>
                <hr>
                <div class="portfolio-experience-item">
                    <h2>Picsel</h2>
                    <h3>Desenvolvedor Fullstack</h3>
                    <br>
                    <h4>Mar 2023 - Jul 2023</h4>
                    <br>
                    <p>
                        Atuando como desenvolvedor web fullstack na manutenção e implementação de novas funcionalidades
                        na plataforma web da empresa,
                        utilizando as tecnologias:
                    </p>
                    <br>
                    <ul id="tech-list">
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/html-5--v1.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/css3.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/typescript.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/officel/50/000000/php-logo.png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/000000/angularjs.png" alt="">
                        </li>
                        <li>
                            <img src="https://img.icons8.com/?id=38561&format=png" />
                        </li>
                        <li>
                            <img src="https://img.icons8.com/color/50/amazon-web-services.png" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        {{-- <div class="portfolio box">
      <h1 class="title">O que eu já fiz?</h1>
      <ul>
        <li>
          <img src="img/secrypter.jpg" alt="2" />
          <div>
            <h2>Secrypter</h2>
            <a href="/projetos/secrypter.html">Saiba mais</a>
            <br />
            <br />
            <p>
              Gerador de senhas aleatórias
            </p>
          </div>
        </li>
      </ul>
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
                    <a href="curriculum.pdf"><img src="https://img.icons8.com/color/48/000000/resume.png" /></a>
                </li>
            </ul>
        </div>
        <p class="copyright">© 2022 Leonardo "Leonzera" Andrade</p>
    </div>
</body>

</html>
