$(function () {
    //Tempo do carousel
    var delay = 5
    //Valor atual do slide
    var currentSlide = 0;
    //Quantidade máxima de slides
    var maxSlide = $('.banner-single').length - 1;

    initSlider();
    changeSlider();

    function initSlider() {
        //Esconder todos os elementos com a classe: banner-single
        $('.banner-single').hide();
        //eq(0) -> selecionar o index() | show() -> mostrar
        $('.banner-single').eq(currentSlide).show();
    }

    function changeSlider() {
        setInterval(function () {
            $('.banner-single').eq(currentSlide).fadeOut();
            currentSlide++;

            if (currentSlide > maxSlide)
                currentSlide = 0;

            $('.banner-single').eq(currentSlide).fadeIn();
        }, delay * 1000);
    }

})