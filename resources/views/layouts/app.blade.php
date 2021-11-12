<!doctype html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="{{ asset('/assets/images/favicon.ico') }} ">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.4.0/animate.min.css">

    <link href="{{ asset('assets/css/app.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Header -->
    <header id="header">

        <div class="header-nav">

            <div class="container">

                <div class="wrap">

                    <div class="logo">
                        <a href="{{ route('home') }}" class="logo-main p-2"><img
                                src="{{ asset('assets/images/logo-conquest.png') }}" alt=""></a>
                        <a href="{{ route('home') }}" class="logo-fix p-2"><img class="img-fluid"
                                src="{{ asset('assets/images/logo-conquest.png') }}" alt=""></a>
                    </div>

                    <div class="menu">

                        <nav class="nav">
                            <ul>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('home') ? 'active' : '' }}"
                                        href="{{ route('home') }}">Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('imoveis.*') ? 'active' : '' }}"
                                        href="{{ route('imoveis.index') }}">Imóveis</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('quemsomos.*') ? 'active' : '' }}"
                                        href="{{ route('quemsomos.index') }}">Quem Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('vendaimovel.*') ? 'active' : '' }}"
                                        href="{{ route('vendaimovel.index') }}">Venda seu imóvel</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link {{ Route::is('contato.*') ? 'active' : '' }}"
                                        href="{{ route('contato.index') }}">Contato</a>
                                </li>
                            </ul>
                        </nav>

                        <a href="{{ route('vendaimovel.index') }}" class="btn btn-default bg-orange-gradient">Casa Verde e Amarela <i
                                class="fas fa-arrow-right"></i></a>

                    </div>

                    <div class="contato">
                        <span><i class="fas fa-phone-alt"></i> 11 9999-9999</span>
                    </div>

                    <div class="icon-sidemenu d-lg-none d-flex flex-grow-1 justify-content-end align-items-center">
                        <a href="javascript:void(0)" class="sidemenu_btn" id="sidemenu_toggle">
                            <span></span>
                            <span></span>
                            <span></span>
                        </a>
                    </div>

                </div>

            </div>

        </div>

        <!--Side Nav-->
        <div class="side-menu hidden">
            <div class="inner-wrapper">
                <span class="btn-close" id="btn_sideNavClose"><i></i></span>
                <nav class="side-nav w-100">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('home') ? 'active' : '' }}"
                                href="{{ route('home') }}">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('imoveis.*') ? 'active' : '' }}"
                                href="{{ route('imoveis.index') }}">Imóveis</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('quemsomos.*') ? 'active' : '' }}"
                                href="{{ route('quemsomos.index') }}">Quem Somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('vendaimovel.*') ? 'active' : '' }}"
                                href="{{ route('vendaimovel.index') }}">Trabalhe Conosco</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link {{ Route::is('contato.*') ? 'active' : '' }}"
                                href="{{ route('contato.index') }}">Contato</a>
                        </li>

                    </ul>
                </nav>

            </div>

        </div>

        <a id="close_side_menu" href="javascript:void(0);"></a>

    </header>
    <!-- Header -->

    <main role="main">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer id="footer">

        <div class="footer-top py-5">

            <div class="container">

                <div class="row align-items-center justify-content-between">

                    <div class="col-sm-12 col-md-6 col-lg-5">
                        <img class="img-fluid mb-4" src="{{ asset('assets/images/logo-conquest-branco.png') }}"
                            alt="">

                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent blandit pellentesque diam,
                            nec rutrum ipsum ut. Ut viverra tellus sit amet sem sollicitudin aliquam.</p>
                        <div class="contact">
                            <div class="contact-icon"><i class="fab fa-whatsapp"></i></div>
                            <div class="contact-info">11 99999-9999</div>
                        </div>

                        <div class="contact">
                            <div class="contact-icon"><i class="fas fa-phone-alt"></i></div>
                            <div class="contact-info">11 99999-9999</div>
                        </div>

                        <div class="contact">
                            <div class="contact-icon"><i class="far fa-envelope"></i></div>
                            <div class="contact-info">contato@conquestbroker.com.br</div>
                        </div>


                        <div class="address">
                            <div class="address-icon"><i class="fas fa-map-marker-alt"></i></div>
                            <div class="address-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit</div>
                        </div>

                        <ul class="social list-inline">
                            <li>
                                <a href="https://www.facebook.com/energyimoveis" target="_blank">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a href="https://www.instagram.com/energy_imoveis/" target="_blank">
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                        </ul>

                    </div>

                    <div class="col-sm-12 col-md-6 col-lg-4">

                        <h4>Cadastre-se e Receba Novidades</h4>
                        <p>Tenha certeza de que receberá somente mensagens de grandes oportunidades. </p>

                        <div class="form-newsletter mt-5">

                            <form id="formNewsletter" method="POST">

                                @csrf

                                <input type="hidden" name="url" value="{{ route('contato.sendMail') }}">

                                <div class="row">
                                    <div class="form-group mb-3">
                                        <input type="email" name="email" class="form-control" placeholder="E-mail"
                                            required>
                                    </div>
                                    <div class="form-group mb-3">
                                        <button type="submit"
                                            class="btn btn-primary text-right bg-orange-gradient">Enviar <i
                                                class="fas fa-arrow-right ms-2"></i></button>
                                    </div>

                                </div>


                            </form>
                        </div>

                    </div>

                </div>

            </div>

        </div>

        <div class="bottom-footer p-1">

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-sm-12 col-md-6">© {{ now()->year }} Conquest Broker - Todos os
                        direitos reservados</div>

                    <div class="col-sm-12 col-md-6 text-md-end">
                        Desenvolvido por <a href="https://www.agenciaaffinity.com.br"><img width="90"
                                src="https://agenciaaffinity.com.br/assinatura/affinity-logo-branco.svg"></a>
                    </div>

                </div>
            </div>

        </div>

    </footer>
    <!-- End Footer -->


    <div id="floating-smi" class="floating-smi hidden-xs hidden-sm">
        <div class="floating-smi-wrap">
            <div class="floating-smi-list">
                <div class="textwidget custom-html-widget">
                    <ul>
                        <li>
                            <a href="https://api.whatsapp.com/send?phone=5511" target="_blank"
                                rel="noopener noreferrer">
                                <span class="fab fa-whatsapp"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener noreferrer">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li>
                            <a href="https://www.instagram.com/" target="_blank" rel="noopener noreferrer">
                                <span class="fab fa-instagram"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>



    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

    <script
        src="https://maps.googleapis.com/maps/api/js?v=3&sensor=false&amp;libraries=places&key=AIzaSyAexUoFpkweVmPfHrClf8SMzt-lzHPmiJs">
    </script>

    <script src="{{ asset('/assets/js/app.js') }} "></script>



</body>

</html>
