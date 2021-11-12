@extends('layouts.app')

@section('title', 'Conquest Broker - Imóveis')

@section('content')

    <div id="imoveis">

        <div class="page-title-content"
            style="background: url('{{ asset('assets/images/banner-pages/banner-imoveis.png') }}')">
            <div class="container">
                <h5>Imóveis</h5>
                <h1>Lorem Ipsum Dolor Sit Amet</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-3">

                        <form id="formFilter" action="{{ route('imoveis.busca') }}" method="get">

                            <h3>Filtros</h3>

                            <select class="form-control mb-3" name="categoria">
                                <option value="">Selecione uma categoria</option>
                                @foreach ($categorias as $categoria)
                                    <option value="{{ $categoria->slug }}">{{ $categoria->nome }}</option>
                                @endforeach
                            </select>

                            <select class="form-control mb-3" name="tipo">
                                <option value="">Selecione um tipo</option>
                                @foreach ($tipos as $tipo)
                                    <option value="{{ $tipo->slug }}">{{ $tipo->nome }}</option>
                                @endforeach
                            </select>

                            <button class="btn btn-default ml-2">Buscar</button>

                        </form>

                    </div>

                    <div class="col-md-9">

                        <div class="list">

                            <div class="row">

                                @if ($imoveis->total() > 0)

                                    
                                
                                @foreach ($imoveis as $imovel)

                                    <div class="col-md-4">
                                        <a href="{{ route('imoveis.info', ['slug' => $imovel->slug]) }}"
                                            class="imovel-item">
                                            <div class="img">
                                                <img src="{{ asset('storage/' . $imovel->imagem) }}"
                                                    alt="{{ $imovel->nome }}">
                                            </div>
                                            <div class="content">
                                                <small class="category text-orange">{{ $imovel->categoriaNome }}</small>
                                                <span class="title text-dark">{{ $imovel->nome }}</span>
                                                <div class="description">{!! Str::limit($imovel->descricao, 130) !!}</div>

                                                <hr class="text-dark">

                                                <div class="text-center">
                                                    <small class="text-orange"><strong>Saiba mais <i
                                                                class="fas fa-arrow-circle-right"></i></strong></small>
                                                </div>
                                            </div>
                                        </a>

                                    </div>

                                @endforeach

                                <div class="d-flex justify-content-center mt-5">
                                    {{ $imoveis->links() }}
                                </div>

                                @else

                                    <h3 class="text-center p-3">Nenhum imóvel encontrado!</h3>
                                    
                                @endif

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
