"use strict";

new Splide('.splide1').mount(); // new Splide( '.splide' ).mount();

var splide = new Splide('.splide', {
  perPage: 3,
  rewind: true
});
splide.mount();