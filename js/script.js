let check = document.querySelectorAll('.check_input');
let button_reservation = document.getElementById('btn_reservation');
let divEnfant = document.querySelector('.enfant_container');
console.log(divEnfant);
// bien.addeventlistener(function())
console.log(check);

// Array.from(checke).forEach(function(elm) {
//     elm.addEventListener("change", verefirer_check)
// });
for (let i = 0; i < check.length; i++) {
    // console.log(check[i]);
    check[i].addEventListener("change", verefirer_check);
}
let compteur = 0;
button_reservation.disabled = true;

function verefirer_check(e) {
    let element = e.srcElement;
    let = image_child = element.parentElement.parentElement.childNodes[3].childNodes[1].childNodes[1];
    // console.log(button_reservation);
    if (element.checked) {
        image_child.style.filter = "none";
        compteur++;
    } else {
        image_child.style.filter = "grayscale(100%)";
        compteur--;
    }
    console.log(compteur);
    if (compteur == 0) {
        button_reservation.disabled = true;
        divEnfant.setAttribute("hidden", true);
    } else {
        button_reservation.disabled = false;
    }
}

function verefirerValidation() {
    if (!button_reservation.disabled) {
        divEnfant.removeAttribute("hidden");
    } else {
        divEnfant.addAttribute("hidden");
    }
}