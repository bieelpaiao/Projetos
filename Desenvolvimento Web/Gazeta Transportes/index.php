<!doctype html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Gazeta Transportes</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <link href="assets/css/styles.css" rel="stylesheet">
        <script src="https://kit.fontawesome.com/18c0c84c7c.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">
                        <img src="./assets/img/logo_branca.png" alt="Logo Gazeta Transportes" id="navbar-logo">
                    </a>

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#">Início</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Sobre nós</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Excursões</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Contato</a>
                            </li>

                            <li class="nav-item">
                                <a class="nav-link" href="#">Localização</a>
                            </li>

                            <li class="nav-item">
                                <button class="nav-link btn" id="admin">Painel Admin <i class="fa-solid fa-lock"></i></button>
                            </li>                            
                        </ul>
                    </div>
                </div>
            </nav>
        </header>

        <main>
            <div id="mainSlider" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#mainSlider" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div>    

                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="./assets/img/escolar.jpg" class="d-block w-100" alt="Transporte Escolar">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Transporte Escolar</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/img/olimpia.jpg" class="d-block w-100" alt="Parque Aquático">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Parques Aquáticos</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/img/rodeio.jpg" class="d-block w-100" alt="Rodeio">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Rodeios</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="./assets/img/show.jpeg" class="d-block w-100" alt="Show">
                        <div class="carousel-caption d-none d-md-block">
                            <h2>Shows</h2>
                        </div>
                    </div>
                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#mainSlider" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#mainSlider" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>

            <div id="about-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">Sobre nós</h3>
                        </div>

                        <div class="col-md-6">
                            <img class="img-fluid" src="./assets/img/patricia.jpg" alt="Patrícia Gazeta">
                        </div>

                        <div class="col-md-6 about-text d-flex justify-content-center">
                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                        </div>
                    </div>
                </div>
            </div>

            <div id="excursion-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">Excursões</h3>
                        </div>

                        <div class="col-md-3">
                            <div class="card p-2">
                                <img src="./assets/img/excursao_pp.png" class="card-img-top card-img" alt="Excursão">

                                <div class="card-body">
                                    <h5 class="card-title">Rodeio de Presidente Prudente</h5>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Dias: 06/09, 07/09, 09/09, 13/09</li>
                                    <li class="list-group-item">Valor: R$50,00 cada dia</li>
                                    <li class="list-group-item">Saída de: Quatá, João Ramalho e Rancharia</li>
                                </ul>

                                <div class="card-body">
                                    <a href="#" class="btn btn-card">Me inscrever!</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card p-2">
                                <img src="./assets/img/excursao_pp.png" class="card-img-top card-img" alt="Excursão">

                                <div class="card-body">
                                    <h5 class="card-title">Rodeio de Presidente Prudente</h5>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Dias: 06/09, 07/09, 09/09, 13/09</li>
                                    <li class="list-group-item">Valor: R$50,00 cada dia</li>
                                    <li class="list-group-item">Saída de: Quatá, João Ramalho e Rancharia</li>
                                </ul>

                                <div class="card-body">
                                    <a href="#" class="btn btn-card">Me inscrever!</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card p-2">
                                <img src="./assets/img/excursao_pp.png" class="card-img-top card-img" alt="Excursão">

                                <div class="card-body">
                                    <h5 class="card-title">Rodeio de Presidente Prudente</h5>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Dias: 06/09, 07/09, 09/09, 13/09</li>
                                    <li class="list-group-item">Valor: R$50,00 cada dia</li>
                                    <li class="list-group-item">Saída de: Quatá, João Ramalho e Rancharia</li>
                                </ul>

                                <div class="card-body">
                                    <a href="#" class="btn btn-card">Me inscrever!</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="card p-2">
                                <img src="./assets/img/excursao_pp.png" class="card-img-top card-img" alt="Excursão">

                                <div class="card-body">
                                    <h5 class="card-title">Rodeio de Presidente Prudente</h5>
                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Dias: 06/09, 07/09, 09/09, 13/09</li>
                                    <li class="list-group-item">Valor: R$50,00 cada dia</li>
                                    <li class="list-group-item">Saída de: Quatá, João Ramalho e Rancharia</li>
                                </ul>

                                <div class="card-body">
                                    <a href="#" class="btn btn-card">Me inscrever!</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="contact-title">
                <div class="container-fluid text-center">
                    <div class="row align-items-center">
                        <div class="col-12" id="bg-contact-title">
                            <h3 class="contact-title">Fale conosco!</h3>
                            <p class="contact-subtitle">Reserve uma van para um evento ou excursão</p>
                        </div>
                    </div>
                </div>
            </div>
            
            <div id="contact-content">
                <div class="container-fluid text-center">
                    <div class="row align-items-center ps-5 pe-5">
                        <div class="col-md-6 p-5">
                            <a href="https://api.whatsapp.com/send/?phone=5518996128035&text=Ol%C3%A1!&type=phone_number&app_absent=0" target="blank">
                                <div class="row align-items-center rounded-3 p-2" id="contact-card">
                                    <div class="col-md-2">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </div>

                                    <div class="col-md-10">
                                        <p id="card-text">Clique aqui e nos envie uma mensagem via WhatsApp!</p>
                                    </div>
                                </div>
                            </a>

                            <a href="mailto:kleber@infoworld.net.br" target="blank">
                                <div class="row align-items-center rounded-3 p-2 mt-3" id="contact-card">
                                    <div class="col-md-2">
                                        <i class="fa-regular fa-envelope"></i>
                                    </div>

                                    <div class="col-md-10">
                                        <p id="card-text">Clique aqui e nos envie uma mensagem via e-mail!</p>
                                    </div>
                                </div>
                            </a>

                            <div class="text-center my-3" id="social-media">
                                <p>Siga-nos em nossas redes sociais</p>
                            </div>

                            <div class="row align-items-center rounded-3 p-2 mt-3" id="contact-medias">
                                <div class="col">
                                    <a href="" target="blank"> <i class="fa-brands fa-facebook mx-3"></i> </a>
                                    <a href="" target="blank"> <i class="fa-brands fa-instagram mx-3"></i> </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 m-0 px-5">
                            <div class="contact-form-bg p-3">
                                <form class="row g-3">
                                    <div class="col-md-12 text-start">
                                        <label for="inputName" class="form-label">Nome Completo</label>
                                        <input type="text" class="form-control" id="inputName">
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <label for="inputEmail" class="form-label">E-mail</label>
                                        <input type="text" class="form-control" id="inputEmail">
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <label for="inputMessage" class="form-label">Mensagem</label>
                                        <textarea class="form-control" id="inputMessage"></textarea>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                                    </div>
                                </form>  
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="location-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">Onde Estamos</h3>
                        </div>

                        <div class="col-12">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.742954233079!2d-50.76851448562024!3d-22.249829520350577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949456a895fc4111%3A0xf7a1860b25550af!2sAv.%20Huet%20Bacelar%2C%20313%20-%20Centro%2C%20Jo%C3%A3o%20Ramalho%20-%20SP%2C%2019680-000!5e0!3m2!1sen!2sbr!4v1674598006207!5m2!1sen!2sbr" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <footer>
            <div id="copy-area">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <img id="logo-copy" src="./assets/img/logo_branca.png" alt="LAMOAM">
                            <p>Copyright <a href="">Gazeta Transportes</a> &copy; 2023 </br> Desenvolvido por  <a href="https://www.linkedin.com/in/gabrielpaiao/" target="_blank">Gabriel Paião</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </body>
</html>
