@extends('layouts.app')

@section('title', 'Conquest Broker - Programa Casa Verde e Amarel')

@section('content')

    <div id="trabalhe-conosco">

        <div class="page-title-content"
            style="background: url('{{ asset('assets/images/banner-pages/banner-trabalhe-conosco.png') }}')">
            <div class="container">
                <h5>Lorem Ipsum</h5>
                <h1>Programa Casa Verde e Amarela</h1>
            </div>
        </div>

        <div class="container">

            <div class="content">

                <div class="row">

                    <div class="col-md-12 col-lg-10 offset-lg-1 mb-4 mt-5">

                        <div class="form px-5 py-4 border rounded">

                            @include('flash::message')

                            <form action="" method="POST" class="my-4">

                                @csrf

                                <div class="row">

                                    <div class="col-lg-4 mb-4 mb-lg-0">

                                        <div class="card p-4 px-lg-5 py-lg-4">

                                            <div>
                                                <h4>Programa Casa Verde e Amarela</h4>
                                                <hr class="my-3">
                                                <p class="m-0">Nós temos a solução na medida certa para você!</p>
                                            </div>

                                            <p>A Conquest Broker e a SSJ Construtora te ajudam a realizar o seu sonho do
                                                apartamento!</p> 

                                            <p>Cadastre agora e escolha a região desejada!</p>

                                        </div>

                                    </div>


                                    <div class="col-lg-8">

                                        <div class="row">

                                            <div class="col-12 mb-3">
                                                <img class="py-3" src="{{ asset('assets/images/casa-verde-e-amarela.png') }}" alt="">
                                                <h4>Insira abaixo as informações e realize seu cadastro.</h4>
                                            </div>

                                            <div class="form-group mb-3 col-lg-12">
                                                <input type="text" name="nome" class="form-control" placeholder="Nome"
                                                    required>
                                            </div>

                                            <div class="form-group mb-3 col-lg-12">
                                                <input type="email" name="email" class="form-control" placeholder="E-mail"
                                                    required>
                                            </div>
                                            

                                            <div class="form-group mb-3 col-lg-6">
                                                <input type="text" name="telefone" class="form-control telefone"
                                                    placeholder="Telefone" required>
                                            </div>

                                            <div class="form-group mb-3 col-lg-6">
                                                <input type="text" name="telefone" class="form-control telefone"
                                                    placeholder="Celular" required>
                                            </div>

                                            <div class="form-group mb-3 col-lg-6">
                                                <input type="text" name="telefone" class="form-control data"
                                                    placeholder="Data de Nascimento" required>
                                            </div>

                                            <div class="col-lg-12 mb-2"><hr></div>

                                            <div class="form-group mb-3 col-lg-6">
                                                <input type="text" name="cep" class="form-control cep"
                                                    placeholder="CEP" required>
                                            </div>
                                            
                                            <div class="form-group mb-3 col-lg-8">
                                                <input type="text" name="nome" class="form-control" placeholder="Endereço" required>
                                            </div>

                                            <div class="form-group mb-3 col-lg-4">
                                                <input type="text" name="nome" class="form-control" placeholder="Número" required>
                                            </div>

                                            <div class="form-group mb-3 col-lg-5">
                                                <input type="text" name="nome" class="form-control" placeholder="Bairro" required>
                                            </div>

                                            <div class="form-group mb-3 col-lg-5">
                                                <input type="text" name="nome" class="form-control" placeholder="Cidade" required>
                                            </div>


                                            <div class="form-group mb-3 col-lg-2">
                                                <input type="text" name="nome" class="form-control" placeholder="UF" required>
                                            </div>

                                            <div class="col-lg-12 mb-2"><hr></div>

                                            <div class="form-group mb-3 col-lg-6">
                                                <select name="cargo" class="form-control" required>
                                                    <option value="">Cidade de Interesse</option>
                                                    <option value="São Paulo">São Paulo</option>
                                                </select>
                                            </div>


                                            <div class="form-group mb-3 col-lg-6">
                                                <select name="cargo" class="form-control" required>
                                                    <option value="">Qual a sua Renda Familiar ?</option>
                                                    <option value="">R$ 1.000</option>
                                                </select>
                                            </div>


                                            <div class="text-left">
                                                <button type="submit"
                                                    class="btn btn-primary text-right bg-orange-gradient">Enviar
                                                    Mensagem <i class="fas fa-arrow-right ms-2"></i></button>
                                            </div>

                                        </div>

                                    </div>


                                </div>

                            </form>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

@endsection
