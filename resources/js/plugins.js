import { Fancybox } from '@fancyapps/ui'
import mixitup from 'mixitup'
import 'owl.carousel/dist/assets/owl.carousel.css'
import 'owl.carousel/dist/owl.carousel.min.js'
;(function ($) {
    'use strict'

    // Banner Carousel / Owl Carousel
    $('.banner-carousel').owlCarousel({
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        loop: true,
        margin: 0,
        nav: true,
        dots: false,
        smartSpeed: 500,
        autoHeight: true,
        autoplay: true,
        autoplayTimeout: 5000,
        navText: [
            '<span class="fa fa-angle-left">',
            '<span class="fa fa-angle-right">'
        ],
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1024: {
                items: 1
            }
        }
    })

    $('.imoveis-carousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 4,
                loop: false,
                margin: 20
            }
        }
    })

    $('.imovelCarousel').owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        nav: false,
        dots: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1,
                loop: false
            }
        }
    })

    // MixItUp
    var containerEl = document.querySelector('.mixitup')

    if (containerEl) {
        var mixer = mixitup(containerEl, {
            selectors: {
                target: '.item'
            },
            animation: {
                duration: 400,
                effects:
                    'stagger(34ms) rotateX(20deg) scale(0.01) translateZ(1000px) fade',
                easing: 'ease-in-out'

            }
        })
    }

    // Jquery Mask
    $('.cep').mask('00000-000')
    $('.cpf').mask('000.000.000-00', { reverse: true })
    $('.data').mask('00/00/0000')

    $('.telefone')
        .focusout(function () {
            var phone, element
            element = $(this)
            element.unmask()
            phone = element.val().replace(/\D/g, '')
            if (phone.length > 10) {
                element.mask('(99) 99999-9999')
            } else {
                element.mask('(99) 9999-99999')
            }
        })
        .trigger('focusout')

    // Fancybox
    Fancybox.bind('[data-fancybox]', {})
    

})(jQuery, window, document)
