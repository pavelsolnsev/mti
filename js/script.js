$(function () {
    initLazy();
    initTabs();
    initAcco();

    if ($(window).width() <= '767') {
        initAccoMob();
        initAnimate();
        $('.diplomas').on('init', function (event, slick) {
            $(this).find('.diplomas__navigation-counts').append(`<span id="diplomasCountsCurrent">${slick.currentSlide + 1}</span> / <span>${slick.slideCount}</span>`);
        });
        let diplomasSlider = $('.diplomas__slider')
        diplomasSlider.slick({
            slidesToShow: 1,
            appendArrows: $('.diplomas__navigation-arrows'),
            slidesToScroll: 1,
            infinite: true,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1
                    }
                }
            ]
        });
        diplomasSlider.on('afterChange', function (event, slick, currentSlide, nextSlide) {
            $('.diplomas__navigation-counts #diplomasCountsCurrent').html(currentSlide + 1);
        });
    }
    if ($(window).width() <= '1199') {
        initAccoTab();
    }

    $('.form__footer-checkbox input').on('change', function () {
        if ($(this).is(':checked')) {
            $('.form__button').removeAttr('disabled');
        } else {
            $('.form__button').attr('disabled', true);
        }
    });

    $('.tel').inputmask({ "mask": "+9 999 999-9999" });

    $("form").submit(function (e) {
        e.preventDefault();
        const $form = $(this).closest('form');
        let utms = '';
        let medium = '';
        if (window.location.search.substring(1).includes('utm_source=')) {
            utms += 'utm_source=edunetwork_lp';
            const regex = /(^|\&)utm_medium=([\wа-яА-ЯёЁ\.\-]+)/g;
            if ((medium = regex.exec(window.location.search.substring(1))) !== null) {
                medium = (medium[2]);
            }
        } else {
            utms += 'utm_source=edunetwork_lp';
        }
        utms += '&utm_campaign=' + 'Лид пришел с сайта https://mti.edunetwork.ru'
        utms += '&utm_term=' + 'priem'
        const submitText = $("button", $form).text();
        let a = true;
        $(".validate", $form).each(function () {
            if (!$(this).is(".valid")) {
                M.toast({ html: 'Не все поля заполнены корректно' });
                a = false;
                return false;
            }
        });
        if (a) {
            $("button", $form).attr("disabled", "disabled").html("Отправка");
            let buf = document.cookie.match(/ednw=(.+?)(;|$)/);
            let ednw = '';
            if (buf != null && 1 in buf) {
                ednw = buf[1];
            }

            $.ajax({
                type: 'POST',
                url: '//mods.edunetwork.ru/ylead.php',
                data: {
                    name: $form.find('.form__name').val(),
                    phone: $form.find('.form__tel').val(),
                    land: 'edu_mti',
                    utms: utms,
                    ednw: ednw,
                },
                success: function (msg) {
                    switch (msg) {
                        case 'Ok':
                            $("button", $form).html('Готово!');
                            break;
                    }
                },
                error: function () {
                    $("button", $form).html(submitText).removeAttr("disabled");
                    M.toast({ html: 'Ошибка сервера' });
                }
            });
        }
    });


    function initLazy() {
        let
            lazyArr = [].slice.call(document.querySelectorAll('.lazy')),
            active = false,
            threshold = 200;

        const lazyLoad = function (e) {
            if (active === false) {
                active = true;

                setTimeout(function () {
                    lazyArr.forEach(function (lazyObj) {
                        if ((lazyObj.getBoundingClientRect().top <= window.innerHeight + threshold && lazyObj.getBoundingClientRect().bottom >= -threshold) && getComputedStyle(lazyObj).display !== 'none') {

                            if (lazyObj.dataset.src) {
                                let
                                    img = new Image(),
                                    src = lazyObj.dataset.src;
                                img.src = src;
                                img.onload = function () {
                                    if (!!lazyObj.parent) {
                                        lazyObj.parent.replaceChild(img, lazyObj);
                                    } else {
                                        lazyObj.src = src;
                                    }
                                }
                                lazyObj.removeAttribute('data-src');
                            }

                            if (lazyObj.dataset.srcset) {
                                lazyObj.srcset = lazyObj.dataset.srcset;
                                lazyObj.removeAttribute('data-srcset');
                            }

                            lazyObj.classList.remove('lazy');
                            lazyObj.classList.add('lazy-loaded');

                            lazyArr = lazyArr.filter(function (obj) {
                                return obj !== lazyObj;
                            });

                            if (lazyArr.length === 0) {
                                document.removeEventListener('scroll', lazyLoad);
                                window.removeEventListener('resize', lazyLoad);
                                window.removeEventListener('orientationchange', lazyLoad);
                            }
                        }
                    });

                    active = false;
                }, 200);
            }
        };

        lazyLoad();
        document.addEventListener('scroll', lazyLoad);
        window.addEventListener('resize', lazyLoad);
        window.addEventListener('orientationchange', lazyLoad);
    }

    const jsActiveParent = document.querySelectorAll('.js-active-parent')
    jsActiveParent.forEach(item => {
        item.addEventListener('click', () => {
            if (event.target.classList.contains('js-active')) {
                let jsActive = item.querySelectorAll('.js-active')
                jsActive.forEach(el => {
                    el.classList.remove('active')
                })
                event.target.classList.add('active')
            }
        })
    })

    $('.step__icon-item').on('click', function () {
        $('.step__icon-item').removeClass('active');
        $(this).addClass('active');
    })
    $('.catalog__filter-more').on('click', function () {
        $(this).toggleClass('active');
    })

    const moreBoxs = document.querySelectorAll('.more-box');
    moreBoxs.forEach(moreBox => {
        console.log(moreBox)
        const moreShowButtons = moreBox.querySelectorAll('.more-show');
        const children = Array.from(moreBox.children);
        if (moreBox.offsetHeight > 600) {
            children.slice(6).forEach(child => {
                child.style.opacity = '0'
                child.style.position = 'absolute'
                child.style.right = 9999 + 'px'
            });
            moreShowButtons.forEach(moreShowButton => {
                moreShowButton.style.display = 'flex';
            })
        } else {
            moreShowButtons.forEach(moreShowButton => {
                moreShowButton.style.display = 'none';
            })
        }
        moreShowButtons.forEach(moreShowButton => {
            moreShowButton.addEventListener('click', () => {
                moreShowButton.style.display = 'none';
                children.forEach(child => {
                    child.style.position = 'static'
                    child.style.opacity = '1'
                });
            });
        })

    })

    function initAnimate() {
        const animItems = document.querySelectorAll('.animated-banner')
        if (animItems.length > 0) {
            window.addEventListener('scroll', animOnScroll)
            function animOnScroll(params) {
                animItems.forEach(animItem => {
                    const animItemHeight = animItem.offsetHeight
                    const animItemOffset = offset(animItem).top
                    const animStart = 4;

                    let animItemPoint = window.innerHeight - animItemHeight / animStart
                    if (animItemHeight > window.innerHeight) {
                        animItemPoint = window.innerHeight - window.innerHeight / animStart
                    }

                    if ((pageYOffset > animItemOffset - animItemPoint) && pageYOffset < (animItemOffset + animItemHeight)) {
                        animItem.classList.add('animated')
                    } else {
                        if (!animItem.classList.contains('animated-banner-hide')) {
                            animItem.classList.remove('animated')
                        }
                    }
                })
            }
        }

        function offset(el) {
            const rect = el.getBoundingClientRect(),
                scrollLeft = window.pageXOffset || document.documentElement.scrollLeft,
                scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            return { top: rect.top + scrollTop, left: rect.left + scrollLeft }
        }

        setTimeout(() => {
            animOnScroll();
        }, 400)
    }

    function initAcco() {
        let accos = $('.acco')

        accos.each(function (i, el) {
            let acco = $(el)
            let accoHeader = acco.find('.acco-trigger')
            let accoContent = acco.find('.acco-content')

            accoHeader.on('click', function () {
                if (acco.hasClass('active')) {
                    accoContent.slideUp()
                    acco.removeClass('active')
                } else {
                    accoContent.slideDown()
                    acco.addClass('active')
                }
                $(possibilitySliderMob).slick('setPosition');
                $(possibilityProfMob).slick('setPosition');
                $(possibilityScore).slick('setPosition');
            })
        })
    }

    function initAccoTab() {
        let accosTab = $('.accoTab')
        accosTab.each(function (i, el) {
            let accoTab = $(el)
            let accoTabHeader = accoTab.find('.accoTab-trigger')
            let accoTabContent = accoTab.find('.accoTab-content')

            accoTabHeader.on('click', function () {

                if (accoTab.hasClass('active')) {
                    accoTabContent.slideUp()
                    accoTab.removeClass('active')
                } else {
                    accoTabContent.slideDown()
                    accoTab.addClass('active')
                }
            })
        })
    }

    function initAccoMob() {
        let accosMob = $('.accoMob')
        accosMob.each(function (i, el) {
            let accoMob = $(el)
            let accoMobHeader = accoMob.find('.accoMob-trigger')
            let accoMobContent = accoMob.find('.accoMob-content')

            accoMobHeader.on('click', function () {
                if (accoMob.hasClass('active')) {
                    accoMobContent.slideUp()
                    accoMob.removeClass('active')
                } else {
                    accoMobContent.slideDown()
                    accoMob.addClass('active')
                }
            })
        })
    }

    function initTabs() {
        $('.item-tabs li').on('click', function (evt) {
            evt.preventDefault();
            let parent = $(this).closest('.box-tabs')
            parent.find('.item-tabs li').removeClass('active');
            $(this).addClass('active');
            let sel = this.getAttribute('data-tab');
            parent.find('.content-tabs').removeClass('active').filter(sel).addClass('active');
            $(possibilitySlider).slick('setPosition');
            $(possibilityProf).slick('setPosition');
        });
        $('.item-tabs-inner li').on('click', function (evt) {
            evt.preventDefault();
            let parent = $(this).closest('.box-tabs-inner')
            parent.find('.item-tabs-inner li').removeClass('current');
            $(this).addClass('current');
            let sel = this.getAttribute('data-tab');
            parent.find('.content-tabs-inner').removeClass('current').filter(sel).addClass('current');
        });
    }

    initMenu();

    function initMenu() {

        const body = document.querySelector('body');

        const hamburger = document.querySelector('#hamburger-menu');

        const closeMobileMenu = document.querySelector('#menu-modal__close');

        const mobileMenu = document.querySelector('#menu-modal');

    

        function blockedScroll() {

            if (body.classList.contains('blocked-scroll')) {

                body.classList.remove('blocked-scroll');

            } else {

                body.classList.add('blocked-scroll');

            }

        }

        hamburger.addEventListener('click', () => {

            mobileMenu.classList.add('menu-modal_active');

            blockedScroll();

    

        });

        closeMobileMenu.addEventListener('click', () => {

            mobileMenu.classList.remove('menu-modal_active');

            blockedScroll();

        });

    }

    let $career_menu = $('.header__list'),

            settingsMenu = {

                mobileFirst: true,

                slidesToShow: 2,

                variableWidth: true,

                arrows: false,

                infinite: false,

                responsive: [

                    {

                        breakpoint: 767,

                        settings: {

                            slidesToShow: 6

                        }

                    },

                    {

                        breakpoint: 1199,

                        settings: "unslick"

                    }

                ]

            }

        $career_menu.slick(settingsMenu);

        $(window).on('resize', function () {

            if (!$career_menu.hasClass('slick-initialized')) {

                return $career_menu.slick(settingsMenu);

            }

        });
    initSelect();
    function initSelect() {
        const body = document.querySelector('body')
        const select = document.querySelectorAll('.select')
        select.forEach(function (item) {
            const dropdownItem = item.querySelectorAll('.select__dropdown li')
            const dropdown = item.querySelectorAll('.select__dropdown')
            const limitItem = 4
            dropdownItem.forEach(function (el, index, array) {
                item.querySelector('.select__title').textContent = array[0].textContent
            })
            item.addEventListener('click', getOptionsItem)
            if (dropdownItem.length >= limitItem) {
                dropdown.forEach(item => {
                    item.classList.add('fixed')
                })
            } else {
                dropdown.forEach(item => {
                    item.classList.remove('fixed')
                })
            }
        })
        function getOptionsItem(event) {
            event.stopPropagation()
            if (event.target.classList.contains('select__title')) {
                if (this.classList.contains('active')) {
                    hide(this)
                } else {
                    show(this)
                }
            }
            if (event.target.tagName.toLowerCase() === 'li') {
                this.querySelector('.select__title').textContent = event.target.textContent
                hide(this)
            }
        }
    
        body.addEventListener('click', () => {
            select.forEach(item => {
                hide(item)
            })
        })
    
        function show(event) {
            event.classList.add('active')
        }
        function hide(event) {
            event.classList.remove('active')
        }
    }
    
    
    initSearch();
    function initSearch() {
        let search = document.querySelector('.topBar__search')
        search.addEventListener('click', function (event) {
            event.preventDefault()
            if (event.target.tagName.toLowerCase() === 'button') {
                if (this.classList.contains('active')) {
                    this.classList.remove('active')
                } else {
                    this.classList.add('active')
                }
            }
        })
    }
    initSms();
    function initSms() {
        $('.sms-input:first-child').focus();
        $('.form__sms-input').on('keydown', function (e) {
            let value = $(this).val();
            let len = value.length;
            let curTabIndex = parseInt($(this).attr('tabindex'));
            let nextTabIndex = curTabIndex + 1;
            let prevTabIndex = curTabIndex - 1;
            if (len > 0) {
                $(this).val(value.substr(0, 1));
                $('[tabindex=' + nextTabIndex + ']').focus();
            } else if (len == 0 && prevTabIndex !== 0) {
                $('[tabindex=' + prevTabIndex + ']').focus();
            }
        });
        $('.form__sms-input:last-child').on('keyup', function (e) {
            if ($(this).val() != '') {
                $('.form__sms').addClass('done')
            }
        })
    }
    $('.main__wrapper').on('init', function (event, slick) {
        $(this).find('.main__slider-navigation-counts').append(`<span id="mainCountsCurrent">${slick.currentSlide + 1}</span> / <span>${slick.slideCount}</span>`);
    });
    let mainSlider = $('.main__slider')
    mainSlider.slick({
        dots: true,
        slidesToShow: 1,
        appendArrows: $('.main__slider-navigation-arrows'),
        appendDots: $('.main__slider-navigation-dots'),
        slidesToScroll: 1,
        infinite: false,
        fade: true
    });
    mainSlider.on('afterChange', function (event, slick, currentSlide, nextSlide) {
        $('.main__slider-navigation-counts #mainCountsCurrent').html(currentSlide + 1);
        if ($(window).width() <= '767') {
            $('.animated-banner').removeClass('animated')
            setTimeout(function () {
                $('.animated-banner').addClass('animated')
            }, 100)
        }
    });
    
    // let $footer_menu = $('.footer__menu'),
    //         settingsFooterMenu = {
    //             mobileFirst: true,
    //             variableWidth: true,
    //             arrows: false,
    //             infinite: false,
    //             responsive: [
    //                 {
    //                     breakpoint: 767,
    //                     settings: "unslick"
    //                 }
    //             ]
    //         }
    //     $footer_menu.slick(settingsFooterMenu);
    //     $(window).on('resize', function () {
    //         if (!$footer_menu.hasClass('slick-initialized')) {
    //             return $footer_menu.slick(settingsFooterMenu);
    //         }
    //     });
    let possibilitySlider = $('.possibility__result-slider')
    possibilitySlider.slick({
        slidesToShow: 3,
        appendArrows: $('.possibility__result-arrows'),
        slidesToScroll: 1,
        infinite: false,
        responsive: [
            {
                breakpoint: 1199,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    let possibilitySliderMob = $('.possibility__result-sliderMob')
    possibilitySliderMob.slick({
        slidesToShow: 2,
        appendArrows: $('.possibility__result-arrowsMob'),
        slidesToScroll: 1,
        infinite: false,
        responsive: [
            {
                breakpoint: 767,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    let possibilityProf = $('.possibility__prof-slider')
    possibilityProf.slick({
        slidesToShow: 3,
        infinite: false,
        appendArrows: $('.possibility__prof-arrows'),
        slidesToScroll: 1
    });
    
    let possibilityProfMob = $('.possibility__prof-sliderMob')
    possibilityProfMob.slick({
        slidesToShow: 2,
        infinite: false,
        appendArrows: $('.possibility__prof-arrowsMob'),
        slidesToScroll: 1,
        responsive: [
            {
                breakpoint: 575,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });
    
    let possibilityScore = $('.possibility__score-slider')
    settingsScore = { 
        slidesToShow: 1,
        appendArrows: $('.possibility__score-arrows'),
        slidesToScroll: 1,
        infinite: false,
        mobileFirst: true,
        responsive: [
            {
                breakpoint: 767,
                settings: "unslick"
            }
        ]
    }
    
    possibilityScore.slick(settingsScore);
    $(window).on('resize', function () {
    if (!possibilityScore.hasClass('slick-initialized')) {
        return possibilityScore.slick(settingsScore);
    }
    });
    
    if ($(window).width() <= '1199') {
        $('.document').on('init', function (event, slick) {
            $(this).find('.document__navigation-counts').append(`<span id="documentCountsCurrent">${slick.currentSlide + 1}</span> / <span>${slick.slideCount}</span>`);
        });
    }
    
    let documentSlider = $('.document__slider'),
        settingsDoc = {
            mobileFirst: true,
            slidesToShow: 1,
            appendArrows: $('.document__navigation-arrows'),
            infinite: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 1199,
                    settings: "unslick"
                }
            ]
        }
    documentSlider.slick(settingsDoc);
    $(window).on('resize', function () {
        if (!documentSlider.hasClass('slick-initialized')) {
            return documentSlider.slick(settingsDoc);
        }
    });
    if ($(window).width() <= '1199') {
        documentSlider.on('afterChange', function (event, slick, currentSlide, nextSlide) {
            $('.document__navigation-counts #documentCountsCurrent').html(currentSlide + 1);
        });
    }
    
    let documentSliderSpec = $('.document__slider-spec'),
        settingsDocSpec = {
            mobileFirst: true,
            slidesToShow: 1,
            appendArrows: $('.document__navigation-arrows-spec'),
            infinite: false,
            responsive: [
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 2
                    }
                },
                {
                    breakpoint: 1199,
                    settings: "unslick"
                }
            ]
        }
    documentSliderSpec.slick(settingsDocSpec);
    $(window).on('resize', function () {
        if (!documentSliderSpec.hasClass('slick-initialized')) {
            return documentSliderSpec.slick(settingsDocSpec);
        }
    });
});

