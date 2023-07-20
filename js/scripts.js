/*!
* Start Bootstrap - Shop Homepage v5.0.4 (https://startbootstrap.com/template/shop-homepage)
* Copyright 2013-2021 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-shop-homepage/blob/master/LICENSE)
*/
// This file is intentionally blank
// Use this file to add JavaScript to your project

let cards = document.querySelectorAll('.card');
// Recorrer tarjetas
cards.forEach(card => {
    // La tarjeta tiene atributo data-href?
    if(card.dataset.href) {
        // Asignar estilo del cursor
        card.style.cursor = 'pointer';
        // Asignar evento click
        card.addEventListener('click', (e) => {
            // Solo si el clic no fue en un enlace hijo
            if(e.target.tagName != 'A') {
                // Ir al enlace
                window.location.href = card.dataset.href;
            }
        });
    }
});

