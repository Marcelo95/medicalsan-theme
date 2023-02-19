(function ($) {
    'use strict';


    function animate1(start = 0, end = 0) {
        return new Promise(function (resolve) {

            $({ num: start }).animate({ num: end }, {
                duration: 4000,
                easing: "swing",
                step: function (val) {
                    $('.animate-1').css('background', 'linear-gradient(' + val + 'deg, rgba(49,241,197,1) 35%, rgba(35,0,119,1) 89%, rgba(35,0,119,1) 89%)');
                },
                complete: function () {
                    resolve(animate1);
                }
            });

        })


    }

    //loop_animate1();
    function loop_animate1() {
        animate1(10, 0).then((func) => func(360, 356)).then((func) => func(356, 360)).then((func) => func(0, 10)).then(() => loop_animate1());
    }

})(jQuery)

//scroll to animate
const scrollOffset = 100;
const scrollElement = document.querySelectorAll(".js-scroll");
const elementInView = (el, offset = 0) => {
    if(!el) return;
    const elementTop = el.getBoundingClientRect().top;
    return (
        elementTop <=
        ((window.innerHeight || document.documentElement.clientHeight) - offset)
    );
};
const displayScrollElement = (elem) => {
    elem.classList.add('scrolled');
}
const hideScrollElement = (elem) => {
    //elem.classList.remove('scrolled');
}
const handleScrollAnimation = () => {
    scrollElement.forEach(elem => {
        if (elementInView(elem, scrollOffset)) {
            displayScrollElement(elem);
        } else {
            hideScrollElement(elem);
        }
    })

}
window.addEventListener('scroll', () => {
    handleScrollAnimation();
})

