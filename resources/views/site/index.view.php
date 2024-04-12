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
                <div class="slider-item active">
                    <div class="slider-overlay"></div>
                    <img src="<?= asset('img/stock-picture-istock-870199640-sound-control.jpeg') ?>" alt="">
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="col-12 col-lg-8">
                                    <h1 class="card-heading">Feito para <span class="sd">produzir</span> Músicas</h1>
                                    <span>Uma produção musical ao seu alcance, basta clicar e tudo se resolve por ti. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Neque, exercitationem</span>
                                    <a href="" class="btn btn-outline-dark slider-btn">Experimentar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slider-item">
                    <div class="slider-overlay"></div>
                    <img src="<?= asset('img/fl-studio-jfz4k06m3o6t93fj.jpg') ?>" alt="">
                    <div class="slider-caption">
                        <div class="container">
                            <div class="row">
                                <div class="co-12 col-lg-8">
                                    <h1 class="card-heading">Uma produção de <span class="sd">qualidade</span> Máxima</h1>
                                    <span>Você sonha, deseja e realiza o seu pedido, e nós concretizamos isso pra você. Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias, suscipit</span>
                                    <a href="" class="btn btn-outline-dark slider-btn">Experimentar</a>
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
                            <h4 class="card-heading d-block">Produzidos por nós</h4>
                            <span class="text-muted d-block" style="margin-top: -10px;">Temos a uma voz no mercado, os nosso produtos falam por si</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-4">
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-12 my-4 d-flex ai-end jc-end">
                            <span class="dir bi bi-chevron-left"></span>
                            <span class="dir bi bi-chevron-right"></span>
                        </div>
                        <div class="col-12">
                            <div class="products">
                                <a href="" class="product" name="open-bottom-leitor">
                                    <div class="product-img">
                                        <img src="<?= asset('img/bg-1.jpg') ?>" alt="">
                                    </div>
                                    <h3 class="product-title card-heading d-block text-black mt-3">Tudo que eu quero</h3>
                                    <span class="text-muted d-block" style="margin-top: -10px; margin-bottom: -4px">Artista name | Album atula - Track 1</span>
                                    <small class="text-muted">Produzido em Março 2024</small>
                                </a>
                                <a href="" class="product" name="open-bottom-leitor">
                                    <div class="product-img">
                                        <img src="<?= asset('img/bg-1.jpg') ?>" alt="">
                                    </div>
                                    <h3 class="product-title card-heading d-block text-black mt-3">Tudo que eu quero</h3>
                                    <span class="text-muted d-block" style="margin-top: -10px; margin-bottom: -4px">Artista name | Album atula - Track 1</span>
                                    <small class="text-muted">Produzido em Março 2024</small>
                                </a>
                            </div>
                        </div>
                        <div class="col-12 my-4">
                            <div class="dots-count">
                                <span class="dots active"></span>
                                <span class="dots"></span>
                                <span class="dots"></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-5">
            <div class="card-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <h4 class="text-black">O que produzimos</h4>
                            <span class="text-muted d-block" style="margin-top: -5px;">Variedade de estilos para alcançar o desejo máximo de produção musical.</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <?php for ($i = 0; $i < 9; $i++) : ?>
                            <div class="col-lg-4">
                                <div class="produced">
                                    <div class="produced-img">
                                        <img src="<?= asset('img/style/s-' . $i+1 . '.jpg') ?>" alt="">
                                    </div>
                                    <span class="produced-style">Rumba</span>
                                </div>
                            </div>
                        <?php endfor; ?>
                    </div>
                </div>
            </div>
        </div>

        <div class="card my-5">
            <div class="card-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h4 class="text-black">Respostas para as Tuas Perguntas Mais Frequentes</h2>
                            </h4>
                            <span class="text-black d-block" style="margin-top: -10px">Ainda tens dúvidas? Nós temos respostas para as tuas preocupações.</span>

                        </div>
                        <div class="col-12 col-lg-8 mx-auto my-4">
                            <div class="fask-filter-contain">
                                <div class="fask-filter-dir d-none d-lg-flex">
                                    <span class="bi bi-chevron-left"></span>
                                </div>
                                <div class="fask-filter">
                                    <a href="" class="fask-filter-item active" data-target="fask-container-1">Geral</a>
                                    <a href="" class="fask-filter-item" data-target="fask-container-2">Planos</a>
                                    <a href="" class="fask-filter-item" data-target="fask-container-3">Pagamento</a>
                                    <a href="" class="fask-filter-item" data-target="fask-container-4">Upload de áudios</a>
                                    <a href="" class="fask-filter-item" data-target="fask-container-5">Outros</a>
                                </div>
                                <div class="fask-filter-dir d-none d-lg-flex">
                                    <span class="bi bi-chevron-right"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-contain">
                <div class="container">
                    <div class="row">
                        <div class="col-12 col-lg-10 mx-auto">
                            <div class="fask">
                                <?php for ($i = 0; $i < 4; $i++) : ?>
                                    <div class="fask-item">
                                        <div class="fask-top">
                                            <button type="button" class="fask-expander">
                                                <h5 class="question">Como faço os meus pagamentos ?</h5>
                                                <span class="bi bi-plus" role="icon"></span>
                                            </button>
                                        </div>
                                        <div class="fask-contain">
                                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi repellat eos quae quo optio! Rem, distinctio maxime quod, atque, ab inventore consequatur ullam earum quibusdam unde tempora expedita nesciunt dolorem?</p>
                                        </div>
                                    </div>
                                <?php endfor; ?>
                            </div>
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

        <div class="card mb-5">
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

        <div class="card mb-5"></div>



        <?= partials('nav.footer') ?>


    </div> <!--/.wrapper -->

</body>

</html>

<script src="<?= asset('js/fask/index.js') ?>"></script>
<script src="<?= asset('js/sliders/index.js') ?>"></script>