<?= partials('nav.links') ?>

<nav class="navbar active">
    <div class="container">
        <div class="alq-navbar-header">
            <span class="name">Labs</span>
        </div>
        <div class="alq-navbar-items">
            <div class="alq-nvitem">
                <a href="" class="alq-nvlink">Inicio</a>
            </div>
            <div class="alq-nvitem">
                <a href="" class="alq-nvlink">Produzidos</a>
            </div>
            <div class="alq-nvitem">
                <a href="" class="alq-nvlink">Comunidade</a>
            </div>
            <div class="alq-nvitem">
                <a href="" class="alq-nvlink">Planos</a>
            </div>
            <div class="alq-nvitem ml-auto">
                <a href="" class="alq-nvlink">Suporte</a>
            </div>
            <div class="alq-nvitem submenu">
                <a href="" class="alq-nvlink">
                    <span class="bi bi-person-fill"></span>
                </a>
            </div>
            <div class="alq-nvitem">
                <a href="" class="alq-nvlink">
                    <span class="bi bi-cart-fill"></span>
                </a>
            </div>
        </div>
        <button type="button" class="alq-nv-trigger">
            <span class="line"></span>
            <span class="line"></span>
        </button>
    </div>
</nav>

<?= partials('nav.back-to-top') ?>
<?= partials('nav.dropdown') ?>
<?= partials('leitor.bottom-leitor') ?>

<script>
    /*$(window).scroll(function(e) {
        ($(this).scrollTop() > 100) ? $('.navbar').addClass('active'): $('.navbar').removeClass('active');
    });*/

    $('.submenu a').click(function(e) {
        e.preventDefault();
        e.stopPropagation(); // Impede a propagação do evento
        $('.navbar-dropdown').toggleClass('active');
    });

    $(document).click(function(event) {
        var dropdown = $('.navbar-dropdown');
        var target = $(event.target);
        // Verifica se o clique foi fora do dropdown e se o dropdown está aberto
        if (!dropdown.is(target) && dropdown.hasClass('active')) {
            dropdown.removeClass('active');
        }
    });
</script>