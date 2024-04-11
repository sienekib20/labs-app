<div class="back-to-top">
    <span class="bi bi-arrow-up">Topo</span>
</div>

<script>
    $(document).ready(function() {
        $(window).scroll(function(e) {
            $(this).scrollTop() > 560 ? $('.back-to-top').addClass('active') : $('.back-to-top').removeClass('active');
        });

        $('.back-to-top').click(function(e) {
            $('html, body').animate({
                scrollTop: 0
            }, 1000);
        });
    });
</script>