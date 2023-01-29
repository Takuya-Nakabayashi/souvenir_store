/*トップページ「スクロール背景画像」
---------------------------------------------------------------------------*/
$(function () {
    // aimation呼び出し
    if ($('.js-scroll-trigger').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".js-scroll-trigger").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 700) {
                    $(this).addClass('is-active');
                }
            });
        });
    }
    $(window).trigger('scroll');
});
/*トップページ「日本地図」
---------------------------------------------------------------------------*/
$(function () {
    // aimation呼び出し
    if ($('.js-scroll-trigger-2').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".js-scroll-trigger-2").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 650) {
                    $(this).addClass('is-active');
                }
            });
        });
    }
    $(window).trigger('scroll');
});
/*トップページ「全国」　　
---------------------------------------------------------------------------*/
$(function () {
    // aimation呼び出し
    if ($('.js-scroll-trigger-A').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".js-scroll-trigger-A").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 700) {
                    $(this).addClass('is-active');
                }
            });
        });
    }
    $(window).trigger('scroll');
});
/*トップページ「お土産
---------------------------------------------------------------------------*/
$(function () {
    // aimation呼び出し
    if ($('.js-scroll-trigger-B').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".js-scroll-trigger-B").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 690) {
                    $(this).addClass('is-active');
                }
            });
        });
    }
    $(window).trigger('scroll');
});
/*トップページ「物産展　
---------------------------------------------------------------------------*/
$(function () {
    // aimation呼び出し
    if ($('.js-scroll-trigger-C').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".js-scroll-trigger-C").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 680) {
                    $(this).addClass('is-active');
                }
            });
        });
    }
    $(window).trigger('scroll');
});

/*ホームページ紹介ページ　　
---------------------------------------------------------------------------*/
$(function () {
    // aimation呼び出し
    if ($('.js-scroll-trigger-company').length) {
        scrollAnimation();
    }

    // aimation関数
    function scrollAnimation() {
        $(window).scroll(function () {
            $(".js-scroll-trigger-company").each(function () {
                let position = $(this).offset().top,
                    scroll = $(window).scrollTop(),
                    windowHeight = $(window).height();

                if (scroll > position - windowHeight + 200) {
                    $(this).addClass('is-active');
                }
            });
        });
    }
    $(window).trigger('scroll');
});

// 
/*ヘッダーナビ　current
---------------------------------------------------------------------------*/

$(function(){
	$("#menubar a").each(function(){
		if(this.href == location.href) {
			$(this).parents("li").addClass("current");
		}
	});
});