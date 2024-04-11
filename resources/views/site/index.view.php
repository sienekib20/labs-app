<!DOCTYPE html>
<html lang="en">

<head>
    <title>Home</title>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


</head>

<body>

    <div class="wrapper">
        <?= partials('nav.navbar') ?>

        <header>
            <div class="sliders">
                <div class="slider-item">
                    <div class="slider-overlay"></div>
                    <img src="<?= asset('img/studio-hero-1024x683.jpg') ?>" alt="">
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h1 class="card-heading">Feito para <span class="sd">produzir</span> Músicas</h1>
                                    <span>Uma produção musical ao seu alcance, basta clicar e tudo se resolve por ti.</span>
                                    <a href="" class="btn btn-outline-dark">Experimentar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-overlay"></div>
                    <img src="<?= asset('img/stock-picture-istock-870199640-sound-control.jpeg') ?>" alt="">
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-6">
                                    <h3 class="card-heading">Uma produção de <span class="sd">qualidade</span> Máxima</h3>
                                    <span>Você sonha, deseja e realiza o seu pedido, e nós concretizamos isso pra você.</span>
                                    <a href="" class="btn btn-outline-dark">Experimentar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>

        <div class="card">
            <div class="card-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <span class="card-heading">Produzidos por nós</span>
                            <small class="text-muted">Temos a uma voz no mercado, os nosso produtos falam por si</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            Produtos
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <span class="card-heading">O que produzimos</span>
                            <small class="text-muted">Variedade de estilos para alcançar o desejo máximo de produção musical.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            Estiloas produzidos
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <span class="card-heading">Faqs</span>
                            <small class="text-muted">Respostas de Perguntas Frequentes.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            Faqs
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <span class="card-heading">Team</span>
                            <small class="text-muted">Trablhamos com os melhores.</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            Our Team members here
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="card">
            <div class="card-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <span class="card-heading">Contactos</span>
                            <small class="text-muted">Alguma preocupação. Comunique agora</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            Contactos
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <?= partials('nav.footer') ?>


    </div> <!--/.wrapper -->

</body>

</html>