@extends('layouts.app')

@section('title', 'Conquest Broker')

@section('content')

    <!-- Home -->
    <div id="home">

        <!-- Banner Section -->
        <section class="banner-section">

            <div class="banner-carousel owl-carousel owl-theme">
                <!-- Slide Item -->
                <div class="slide-item" style="background-image: url('{{ asset('assets/images/banner-01.jpg') }}');">
                    <div class="container">
                        <div class="description">
                            <h1 class="mb-4 display-2">Conquest Broker</h1>
                            <h4 class="mb-4">Nulla tempor dui iaculis, rutrum urna in, vehicula arcu. Nullam sit
                                amet dolor dictum, pulvinar enim at, ornare dolor. Pellentesque habitant morbi tristique
                                senectus et netus et malesuada fames ac turpis egestas.</h4>
                            <div>
                                <a href="" class="btn btn-default bg-orange-gradient text-light p-1 p-md-3 me-2">Conheça Mais
                                    <i class="fas fa-arrow-right"></i></a>
                                <a href="" class="btn btn-default bg-white p-1 p-md-3">Mais Lançamentos</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </section>

        <section class="imoveis-home">

            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <div class="title-section">
                            <h4 class="text-orange">Nossos Imóveis</h4>
                            <h2>Excelentes Oportunidades em Imóveis</h2>
                        </div>
                    </div>
                </div>

                <div class="imoveis mt-5">

                    <div class="controls text-center mb-5">
                        <button type="button" class="control btn btn-default" data-filter="all">Todos</button>

                        @foreach ($categorias as $categoria)
                            <button type="button" class="control btn btn-default" data-filter=".{{ $categoria->slug }}">{{ $categoria->nome }}</button>
                        @endforeach

                    </div>

                    <div class="mixitup">

                        <div class="row">

                            @foreach ($imoveis as $imovel)
                                <div class="col-md-3 item mix {{ $imovel->categoriaSlug }}">
                                    <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}"
                                        class="imovel-item">
                                        <div class="img">
                                            <img src="{{ asset('storage/' . $imovel->imagem) }}" alt="{{ $imovel->nome }}">
                                        </div>
                                        <div class="content">
                                            <small class="category text-orange">{{ $imovel->categoriaNome }}</small>
                                            <span class="title text-dark">{{ $imovel->nome }}</span>
                                            <div class="description">{!! Str::limit($imovel->descricao, 130) !!}</div>

                                            <hr class="text-dark">

                                            <div class="text-center">
                                                <small class="text-orange"><strong>Saiba mais <i class="fas fa-arrow-circle-right"></i></strong></small>
                                            </div>
                                        </div>
                                    </a>

                                </div>

                            @endforeach
                        </div>



                    </div>


                </div>

            </div>

        </section>

        <section class="sobre-home my-4 py-5">

            <div class="row justify-content-center">

                <div class="col-12 col-md-6 p-0 d-flex justify-content-start align-items-center">

                    <div class="p-5 px-lg-3 py-lg-0 px-xl-5 py-xl-0 col-11">
                        <h5 class="text-light">Sobre nós</h5>
                        <h1 class="text-light">Lorem Ipsum</h1>
                        <p class="text-light">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium
                            doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                            architecto beatae vitae dicta sunt explicabo.</p>
                        <p class="text-light">Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut
                            fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>


                        <div>

                            <div class="mb-3">
                                <h5 class="text-light">Missão</h5>
                                <small class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia
                                    deserunt mollitia animi, id est laborum et dolorum fuga.</small>

                            </div>

                            <div class="mb-3">
                                <h5 class="text-light">Visão</h5>
                                <small class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia
                                    deserunt mollitia animi, id est laborum et dolorum fuga.</small>
                            </div>

                            <div class="mb-3">
                                <h5 class="text-light">Valores</h5>
                                <small class="text-light">At vero eos et accusamus et iusto odio dignissimos ducimus qui
                                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias
                                    excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia
                                    deserunt mollitia animi, id est laborum et dolorum fuga.</small>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="col-12 col-md-6 p-0">
                    <img class="w-100" src="{{ asset('assets/images/sobre-conquest.jpg') }} " alt="">
                </div>

            </div>

        </section>

        <section class="form-home mb-4 mt-5">

            <div class="container">

                <div class="col-md-12 col-lg-10 offset-lg-1 px-5 py-4 border rounded">

                    @include('flash::message')

                    <form action="" method="POST" class="my-4">

                        @csrf

                        <div class="row">

                            <div class="col-lg-4 mb-4 mb-lg-0">

                                <div class="card p-4 px-lg-5 py-lg-4">

                                    <div>
                                        <h4>Pensando em vender seu imóvel?</h4>
                                        <hr class="my-3">
                                        <p class="m-0">Nós temos a solução na medida certa para você!</p>
                                    </div>


                                    <div class="tel">
                                        <span><i class="fas fa-phone-alt"></i> 11 9999-9999</span>
                                    </div>


                                </div>

                            </div>


                            <div class="col-lg-8">

                                <div class="row">

                                    <div class="col-12 mb-3 ">
                                        <h4>Insira abaixo as informações de seu imóvel para avaliação</h4>
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <input type="text" name="nome" class="form-control" placeholder="Nome" required>
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail"
                                            required>
                                    </div>

                                    <div class="form-group mb-3 col-lg-6">
                                        <input type="text" name="telefone" class="form-control telefone"
                                            placeholder="Telefone" required>
                                    </div>


                                    <div class="form-group mb-3 col-lg-6">
                                        <select name="cargo" class="form-control" required>
                                            <option value="">Selecione sua Cidade</option>
                                            <option value="São Paulo">São Paulo</option>
                                        </select>
                                    </div>

                                    <div class="form-group mb-3 col-lg-12">
                                        <textarea name="mensagem"
                                            class="form-control @error('mensagem') is-invalid @enderror" rows="5"
                                            placeholder="Informações Adicionais">{{ old('mensagem') }}</textarea>
                                    </div>

                                    <div class="text-left">
                                        <button type="submit" class="btn btn-primary text-right bg-orange-gradient">Enviar
                                            Mensagem <i class="fas fa-arrow-right ms-2"></i></button>
                                    </div>

                                </div>

                            </div>


                        </div>

                    </form>

                </div>

            </div>

        </section>


    </div>
    <!-- End Home -->

@endsection
