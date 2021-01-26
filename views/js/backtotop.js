/**
 * Back to Top - Module Prestashop 1.7
 * @author Jatniel Guzmán - https://jatnielguzman.com
 * @copyright 2021
 * @license MIT
 */
$(document).ready(() => {

    let btn = $('#back-top');

    $(window).scroll(function() {
        if ($(window).scrollTop() > 300) {
            btn.removeClass('hidden');
        } else {
            btn.addClass('hidden');
        }
    });

    btn.on('click', function(e) {
        e.preventDefault();
        $('html, body').animate({scrollTop:0}, '300');
    });

});