import Flickity from 'flickity'
import 'flickity/css/flickity.css'

var elem = document.querySelector('.main-carousel');
var flkty = new Flickity( elem, {
    cellAlign: 'center',
    contain: true,
    prevNextButtons: false,
    pageDots: false,
    freeScroll: true,
    wrapAround: true

});
