// Importing jQuery
import jQuery from 'jquery'
import 'bootstrap';
import 'jquery-mask-plugin';

import { home } from './home'

// Import scripts to apply on project
import './../scss/style.scss'

// Importing Slick Carousel
import 'slick-carousel/slick/slick';
import 'slick-carousel/slick/slick.scss';

const $ = jQuery

home()

$(document).ready(function(){
    $('.your-class').slick({
      arrows: true,
      infinite: true,
      speed: 500,
      slidesToShow: 3,
      slidesToScroll: 1,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
            infinite: true
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            infinite: true
          }
        }
      ]
    });
});
