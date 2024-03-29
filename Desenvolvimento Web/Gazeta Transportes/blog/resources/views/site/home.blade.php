@extends('site.master.layout')

@section('content')
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
                        <img src="{{ asset('storage/img/escolar.jpg') }}" class="d-block w-100 carousel-img" alt="Transporte Escolar">
                        <div class="carousel-caption d-md-block">
                            <h2>Transporte Escolar</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('storage/img/olimpia.jpg') }}" class="d-block w-100 carousel-img" alt="Parque Aquático">
                        <div class="carousel-caption d-md-block">
                            <h2>Parques Aquáticos</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('storage/img/rodeio.jpg') }}" class="d-block w-100 carousel-img" alt="Rodeio">
                        <div class="carousel-caption d-md-block">
                            <h2>Rodeios</h2>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('storage/img/show.jpeg') }}" class="d-block w-100 carousel-img" alt="Show">
                        <div class="carousel-caption d-md-block">
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

            <section id="about-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">Sobre nós</h3>
                        </div>

                        <div class="col-md-6">
                            <img class="img-fluid" src="{{ asset('storage/img/patricia.jpg') }}" alt="Patrícia Gazeta">
                        </div>

                        <div class="col-md-6 about-text d-flex justify-content-center">
                            <p>"Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="excursions-area">
                <div class="container text-center">
                    <div class="row d-flex justify-content-center">
                        <div class="col-12">
                            <h3 class="main-title">Excursões</h3>
                        </div>

                        @foreach ($excursions as $excursion)
                            <div class="col-6 col-md-3">
                                <div class="card mb-3 p-2 align-items-center">
                                    <img src="\storage\{{$excursion->imagem}}" class="card-img img-fluid" alt="{{ $excursion->nome }}">

                                    <div class="card-body">
                                        <h5 class="card-title d-flex align-items-center">{{ $excursion->nome }}</h5>
                                    </div>

                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item excursion-days d-flex align-items-center justify-content-center">Dias:
                                            <?php $counter = 1 ?>

                                            @foreach ($excursion->datas as $city)
                                                @if ($counter == count($excursion->datas))
                                                    {{ $city->data }}
                                                @else
                                                    {{ $city->data }},
                                                @endif

                                                <?php $counter = $counter + 1 ?>
                                            @endforeach
                                        </li>
                                        <li class="list-group-item">Valor: R${{ $excursion->valor }}</li>
                                        <li class="list-group-item excursion-cities d-flex align-items-center justify-content-center">Saída de:
                                            <?php $counter = 1 ?>

                                            @foreach ($excursion->cities as $city)
                                                @if ($counter == count($excursion->cities))
                                                    {{ $city->nome }}
                                                @else
                                                    {{ $city->nome }},
                                                @endif

                                                <?php $counter = $counter + 1 ?>
                                            @endforeach
                                        </li>
                                    </ul>

                                    <div class="card-body">
                                        <form action="/excursions/join" method="POST">
                                            @csrf
                                            <a href="/excursions/{{ $excursion->id }}" class="btn btn-card">Saiba mais!</a>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>
            </section>

            <section id="contact-title">
                <div class="container-fluid text-center">
                    <div class="row align-items-center">
                        <div class="col-12" id="bg-contact-title">
                            <h3 class="contact-title">Fale conosco!</h3>
                            <p class="contact-subtitle">Reserve uma van para um evento ou excursão</p>
                        </div>
                    </div>
                </div>
            </section>

            <section id="contact-content">
                <div class="container-fluid text-center">
                    <div class="row align-items-center px-0 px-md-5">
                        <form class="row align-items-center ps-5 pe-5" action="{{ route("form") }}" method="POST">
                            @csrf
                            <div class="col-md-6 p-5">
                                <div class="dates-title-bg">
                                    <span>Escolha o dia da viagem</span>
                                </div>
                                <div class="dates-bg">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="ida" class="form-label">Ida <span class="required">*</span></label>
                                            <input type="date" class="form-control @error('ida') is-invalid @enderror" id="ida" name="ida">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="volta" class="form-label">Volta</label>
                                            <input type="date" class="form-control" id="volta" name="volta">
                                        </div>

                                        <div class="col-md-4">
                                            <label for="pessoas" class="form-label">Pessoas <span class="required">*</span></label>
                                            <input type="number" class="form-control @error('pessoas') is-invalid @enderror" id="pessoas" name="pessoas">
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center my-3" id="social-media">
                                    <p>Siga-nos nas nossas redes sociais</p>
                                </div>

                                <div class="row align-items-center rounded-3 p-2 mt-3" id="contact-medias">
                                    <div class="col">
                                        <a href="https://www.facebook.com/profile.php?id=100057513096662&mibextid=ZbWKwL" target="blank"> <i class="fa-brands fa-facebook mx-3"></i> </a>
                                        <a href="https://instagram.com/transportes.gazeta?igshid=YmMyMTA2M2Y=" target="blank"> <i class="fa-brands fa-instagram mx-3"></i> </a>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-6 m-0 px-5">
                                <div class="contact-form-bg p-3">
                                    <div class="col-md-12 text-start">
                                        <label for="nome" class="form-label">Nome Completo <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('nome') is-invalid @enderror" id="nome" name="nome">
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <label for="email" class="form-label">E-mail <span class="required">*</span></label>
                                        <input type="text" class="form-control @error('email') is-invalid @enderror" id="email" name="email">
                                    </div>

                                    <div class="col-md-12 text-start">
                                        <label for="mensagem" class="form-label">Mensagem <span class="required">*</span></label>
                                        <textarea class="form-control @error('mensagem') is-invalid @enderror" id="mensagem" name="mensagem"></textarea>
                                    </div>

                                    <div class="col-6 text-start my-2">
                                        <a>(<span class="required">*</span>): Campos obrigatórios</a>
                                    </div>

                                    <div class="col-12">
                                        <button type="submit" class="btn btn-primary">ENVIAR</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </section>

            <section id="location-area">
                <div class="container text-center">
                    <div class="row align-items-center">
                        <div class="col-12">
                            <h3 class="main-title">Onde Estamos</h3>
                        </div>

                        <div class="col-12">
                            <iframe class="location-iframe" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3692.742954233079!2d-50.76851448562024!3d-22.249829520350577!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x949456a895fc4111%3A0xf7a1860b25550af!2sAv.%20Huet%20Bacelar%2C%20313%20-%20Centro%2C%20Jo%C3%A3o%20Ramalho%20-%20SP%2C%2019680-000!5e0!3m2!1sen!2sbr!4v1674598006207!5m2!1sen!2sbr" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </section>
        </main>
@endsection
