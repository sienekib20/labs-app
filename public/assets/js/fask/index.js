const fask = document.querySelectorAll('.fask-item');
$(document).ready(function (e) {
    $('.fask-expander').click(function (e) {
        if ($(this).attr('type') != 'button') {
            alert('fask-expander tem de ser do tipo button');
            return;
        }
        var ourFather = $(this).parent().parent();
        ourFather.toggleClass('active');

        $(this).find('[role="icon"]').toggleClass('bi-plus bi-dash');
        var nextParentBro = $(this).parent().next();

        if (!nextParentBro.hasClass('active')) {
            nextParentBro.addClass('active');
            var height = nextParentBro.css('height', 'auto').height();
            nextParentBro.height(0);
            nextParentBro.animate({
                height: height
            }, 100);
        } else {
            nextParentBro.height(0);
            nextParentBro.removeClass('active');
        }

    });
});