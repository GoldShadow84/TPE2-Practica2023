"use strict";

/* Captcha formulario contacto */

let form2 = document.querySelector("#contactform");

form2.addEventListener("submit", formContact);

let captchatext = document.querySelector("#captchatext");

let n1 = Math.floor(Math.random() * 20 +1);
let n2 = Math.floor(Math.random() * 20 +1);

captchatext.innerHTML = "Introduzca la suma entre " + n1 + " y " + n2;

let n3 = n1 + n2;


function formContact(e) {

    e.preventDefault();

    let formData = new FormData(form2);

    let captcha = formData.get('captcha');

    let answer = document.querySelector("#answer");

    if(captcha == n3) {
        answer.innerHTML = "Datos enviado correctamente";
    }
    else {
        answer.innerHTML = "Error, captcha incorrecto.";
    }

}