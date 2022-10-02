$(function () {
    let header = function () {
        $(".header-content-center").on("click", function (e) {
            $(this).toggleClass("active");
            $(this).closest(".header-content-relative").find(".header-content-absolute").toggleClass("show");
        });
        $('#toggleMobileMenu').on("click", function () {
            $('.nav-menu').addClass('show');
            $('.header-content .right-header').addClass('show');
        });
        $('#closeMenuMobile').on("click", function () {
            $('.nav-menu').removeClass('show');
            $('.header-content .right-header').removeClass('show');
        });
        $('.header-right-close').on("click", function () {
            $(this).closest('.header-content-absolute').removeClass('show');
        });
        document.addEventListener("click", function (e) {
            let alls = document.querySelectorAll(".header-content-center.active");
            for (let it of alls) {
                if (!it.closest(".header-content-center").contains(e.target) && !$(it).siblings().get(0).contains(e.target)) {
                    console.log(123);
                    it.classList.remove("active");
                    it.closest(".header-content-relative").querySelector(".header-content-absolute").classList.remove("show");
                }
            }
        });
        if ($(window).width() > 992){
            $(".navbar .nav-item").hover(
                function() {
                    $(this).addClass("show").find('.dropdown-menu').addClass('show');
                }, function() {
                    $(this).removeClass("show").find('.dropdown-menu').removeClass('show');
                }
            );
        }
    };
    let subMenu = function () {
        $('.submenu-title').on("click" , function () {
            $(this).addClass('d-none').closest('.submenu').addClass('show');
        });
        $('.submenu-hide').on("click" , function () {
            $(this).closest('.submenu').removeClass('show').find('.submenu-title').removeClass('d-none');

        });
        $(document).ready(function () {
            let submenuItem = $(".submenu ul li");
            let submenuContainer = 0;

            if (submenuItem) {
                $.each(submenuItem, function(key,value) {
                    let width = $(value).outerWidth();
                    submenuContainer += width;
                });
            }
            let windowWidth = $(window).width();
            if (submenuContainer > windowWidth){
                submenuItem.closest('.submenu').addClass('menuMobile');
            }
        });
    };
    let tableMobile = function () {
        $(document).ready(function () {
            if ($(window).width() < 992){
                let table = $('.table-general');
                let th = table.find('th');
                let tr = table.find('tbody tr');
                $.each(tr, function(keyTr,trValue) {
                    $.each($(trValue).find('td'), function(key,td) {
                        $.each(th, function (keyTh,thValue) {
                            if (key != 0 && key == keyTh){
                                $(td).attr('data-title', $(thValue).text());
                            }
                        });
                        if ($(td).text() == ''){
                            $(td).addClass('d-none');
                        }
                    });
                });
            }
        });
    }

    let youtubeModal = function () {
        if ($('.iframe-lazy-container').length > 0) {
            $('.iframe-lazy-container').click(function () {
                let youtubeModal = $('#youtube-modal');
                let videoThumbnail = $(this).find('.youtube-video-thumbnail');
                let video = youtubeModal.find('.video');
                video.attr('src', videoThumbnail.attr('data-iframe'));
                setTimeout(() => {
                    video.height(video.width() * (9 / 16));
                    $(window).on('resize', function () {
                        video.height(video.width() * (9 / 16));
                    });
                }, 200);
                youtubeModal.modal('show');
            });
        }
        $('#youtube-modal').on('hide.bs.modal', function () {
            let video = $(this).find('.video');
            video.attr('src', '');
        });
    };
        let maxHeight = function () {
        $(document).ready(function () {
            arr = [];
            rowEle = $(".js_row");
            rowEle.each(function () {
                var dataClass = $(this).attr('data-row');
                var newClass = 'js_row_' + dataClass;
                $(this).addClass(newClass);
            });

            var countRow = $('.js_max_data').attr("data-row");

            for (var i = 1; i < countRow + 1; i++) {
                ar = [];
                $(".js_row_" + [i]).each(function () {
                    ar.push($(this).height());
                });

                $(".js_row_" + [i]).height(Math.max(...ar));
            }
        });
    };
    header();
    subMenu();
    tableMobile();
    youtubeModal();
    maxHeight();
});

$(document).on('click', '.panel-heading span.clickable', function(e){
    var $this = $(this);
	if(!$this.hasClass('panel-collapsed')) {
		$this.parents('.panel').find('.panel-body').slideUp();
		$this.addClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-up').addClass('glyphicon-chevron-down');
	} else {
		$this.parents('.panel').find('.panel-body').slideDown();
		$this.removeClass('panel-collapsed');
		$this.find('i').removeClass('glyphicon-chevron-down').addClass('glyphicon-chevron-up');
	}
})
