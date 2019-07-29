jQuery(function ($) {
    $(function () {
        $('.l-header__nav-toggle').click(function () {
            if ($(this).hasClass('open')) {
                $('.l-header__nav-sp').fadeOut();
                $('body').removeClass('fixed');
                $(this).find('img').attr('src', '../images/ic_toggle.png');
                $(this).removeClass('open');
            } else {
                $('.l-header__nav-sp').fadeIn();
                $('body').addClass('fixed');
                $(this).find('img').attr('src', '../images/ic_close.png');
                $(this).addClass('open');
            }
        })
    })

    $(function () {
        $('.l-main_eyecatch_slider').slick({
            autoplay: true,
            arrows: false,
            speed: 600,
            fade: true,
            cssEase: 'linear',
            pauseOnFocus: false
        });
    })

    $(function () {
        $('.i-recruit__team__list').click(function () {
            $('body').addClass('fixed');
            $('.filter').fadeIn();
            var data_id = $(this).attr('data-id');
            $('.i-recruit__team__modal[data-id=' + data_id + ']').fadeIn();
        })
        $('.i-recruit__team__modal_close, .filter').click(function () {
            $('body').removeClass('fixed');
            $('.filter').fadeOut();
            $('.i-recruit__team__modal').fadeOut();
        })
    })
})
