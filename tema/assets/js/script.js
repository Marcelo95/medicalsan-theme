var settings_defaults = {
    dots: false,
    infinite: true,
    autoplay: false,
    variableWidth: true,
    speed: 300,
    autoplaySpeed: 2000,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    prevArrow: '.slider-1-setas .seta-esquerda',
    nextArrow: '.slider-1-setas .seta-direita',
    responsive: [
        {
            breakpoint: 1200,
            settings: {
                slidesToShow: 5,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 1024,
            settings: {
                slidesToShow: 4,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 992,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
            }
        },
        {
            breakpoint: 480,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1
            }
        }]
};

settings_defaults["slidesToShow"] = Math.min(5, $(".slider-1 a").length);
settings_defaults["slidesToScroll"] = Math.min(1, $(".slider-1 a").length);
settings_defaults["autoplaySpeed"] += 500;
$('.slider-1').slick(settings_defaults);



var settings_defaults_slider_2 = Object.assign({}, settings_defaults)
settings_defaults_slider_2["variableWidth"] = true;
settings_defaults_slider_2["centerMode"] = false;
settings_defaults_slider_2["infinite"] = false;
settings_defaults_slider_2["slidesToShow"] = Math.min(3, $(".slider-2 a").length);
settings_defaults_slider_2["slidesToScroll"] = 1;
settings_defaults_slider_2["prevArrow"] = '.slider-2-setas .seta-esquerda';
settings_defaults_slider_2["nextArrow"] = '.slider-2-setas .seta-direita';
settings_defaults_slider_2["autoplaySpeed"] += 500;
settings_defaults_slider_2["responsive"] = [{
    breakpoint: 1090,
    settings: {
        slidesToShow: Math.min(3, $(".slider-2 a").length),
        slidesToScroll: 1,
        infinite: false,
        centerMode: true,
    }
}, {
    breakpoint: 915,
    settings: {
        slidesToShow: 1,
        slidesToScroll: 1,
        infinite: false,
        centerMode: true,
    }
}];


$('.slider-2').slick(settings_defaults_slider_2);



settings_defaults["infinite"] = false;
settings_defaults_slider_2["centerMode"] = false;
settings_defaults["centerMode"] = false;
settings_defaults["variableWidth"] = false;
settings_defaults["slidesToShow"] = Math.min(2, $(".slider-3 a").length);
settings_defaults["slidesToScroll"] = Math.min(2, $(".slider-3 a").length);
settings_defaults["prevArrow"] = '.slider-3-setas .seta-esquerda';
settings_defaults["nextArrow"] = '.slider-3-setas .seta-direita';
settings_defaults["responsive"] = [
    {
        breakpoint: 712,
        settings: {
            slidesToShow: Math.min(1, $(".slider-3 a").length),
            slidesToScroll: Math.min(1, $(".slider-3 a").length),
            infinite: true,
        }
    },
]
$('.slider-3').slick(settings_defaults);



settings_defaults["slidesToShow"] = Math.min(3, $(".slider-4 a").length);
settings_defaults["slidesToScroll"] = Math.min(1, $(".slider-4 a").length);
settings_defaults["prevArrow"] = '.slider-4-setas .seta-esquerda';

settings_defaults["responsive"] = [
    {
        breakpoint: 1140,
        settings: {
            slidesToShow: 2,
            slidesToScroll: 1,
            infinite: true,
        }
    },
    {
        breakpoint: 780,
        settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true,
        }
    }]


$('.slider-4-0').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    fade: true,
    asNavFor: '.slider-4'
});

settings_defaults["nextArrow"] = '.slider-4-setas .seta-direita';
settings_defaults["asNavFor"] = '.slider-4-0';
settings_defaults["focusOnSelect"] = true;
$('.slider-4').slick(settings_defaults);

$('.carroussel-text .init-carroussel').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    dots: true,
    autoplay: true,
    arrows: false,
    fade: true
});

$('.slider-images-text-2').slick({
    slidesToShow: Math.min(3, $('.slider-images-text-2 > div').length),
    slidesToScroll: 1,
    centerMode: false,
    infinite: false,
    dots: true,
    autoplay: false,
    arrows: true,
    fade: false,
    responsive: [
        {
            breakpoint: 824,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },
    ]
});


$('.init-slider-video-for').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    dots: true,
    fade: true,
    autoplay: false,
    asNavFor: '.init-slider-video'
  });
$('.init-slider-video').slick({
    slidesToShow: Math.min(( $('.init-slider-video > div').length < 4 ? 1 : 3  ), $('.init-slider-video > div').length),
    asNavFor: '.init-slider-video-for',
    slidesToScroll: 1,
    centerMode: true,
    infinite: true,
    dots: false,
    autoplay: false,
    arrows: true,
    fade: false,
    responsive: [
        {
            breakpoint: 824,
            settings: {
                slidesToShow: 3,
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 768,
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                infinite: true,
            }
        },
    ]
});

$('.slider-icons-categories').slick({
    slidesToShow: Math.min(12, $('.slider-icons-categories > div').length),
    slidesToScroll: 1,
    centerMode: false,
    infinite: false,
    dots: false,
    autoplay: true,
    arrows: true,
    fade: false,
    responsive: [
        {
            breakpoint: 1550,
            settings: {
                slidesToShow: Math.min(9, $('.slider-icons-categories > div').length),
                slidesToScroll: 1,
                infinite: true,
            }
        },
        {
            breakpoint: 1280,
            settings: {
                slidesToShow: Math.min(6, $('.slider-icons-categories > div').length),
                slidesToScroll: 1,
                infinite: true,
            }
        },{
            breakpoint: 940,
            settings: {
                slidesToShow: Math.min(4, $('.slider-icons-categories > div').length),
                slidesToScroll: 1,
                infinite: true,
            }
        },{
            breakpoint: 630,
            settings: {
                slidesToShow: Math.min(4, $('.slider-icons-categories > div').length),
                slidesToScroll: 1,
                infinite: true,
            }
        },{
            breakpoint: 368,
            settings: {
                slidesToShow: Math.min(1, $('.slider-icons-categories > div').length),
                slidesToScroll: 2,
                infinite: true,
            }
        }
    ]
});
