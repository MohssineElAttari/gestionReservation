let check_input = document.querySelectorAll('.check_input');
let button_reservation = document.getElementById('btn_reservation');
let divEnfant = document.querySelector('.enfant_container');
var text_price = 0;
let nombre_res = 0;
let prix_bien_total = 0;
console.log(divEnfant);
let nombreInput = document.querySelector("#nombre");
let enfantChild = document.querySelector(".number_enfant");
let nombre;
// bien.addeventlistener(function())
console.log(check_input);

// Array.from(checke).forEach(function(elm) {
//     elm.addEventListener("change", verefirer_check)
// });

// boucle pour ajouter un EventListener
for (let i = 0; i < check_input.length; i++) {
    // console.log(check[i]);
    check_input[i].addEventListener("change", verefirer_check);

    check_input[i].parentElement.childNodes[1].addEventListener("change", function(e) {
        console.log("once");
        text_price = parseInt(e.target.parentElement.childNodes[3].innerHTML);
    }, { once: true });

    check_input[i].parentElement.childNodes[1].addEventListener("change", getPrice);
}

let compteur = 0;
button_reservation.disabled = true;


//les fonctions
function getPrice(e) {
    // text_price = parseInt(e.target.parentElement.childNodes[3].innerHTML);
    // console.log(e.target.parentElement.childNodes[3].innerHTML);
    nombre_res = parseInt(e.target.parentElement.childNodes[1].value);
    console.log(text_price);
    console.log(nombre_res);
    prix_bien_total = text_price * nombre_res;
    console.log(prix_bien_total);
    // console.log(nombre_res);
    e.target.parentElement.childNodes[3].innerHTML = prix_bien_total + " $";
    // console.log(nombre_res);
}

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
        setAttribute("hidden", true);
    }
}

nombreInput.addEventListener("change", function() {
    nombre = parseInt(nombreInput.value)
    if (nombre > 0 && nombre <= 10) {;
        createElemants(nombre);
        // testE();
    } else
        nombre = 0;
    console.log(nombre);
});

function createElemants(nombreEnf) {
    enfantChild.innerHTML = "";
    let idN = 0;
    for (let i = 0; i < nombreEnf; i++) {
        let divElm = document.createElement("div");
        let labelElm = document.createElement("label");
        let element = document.createElement("input");
        idN++;
        element.id = "id " + idN;
        element.classList.add('age');
        element.placeholder = "entre l'age de l'enfant " + idN;
        element.setAttribute("name", "ageEnfant")
        labelElm.innerHTML = "l'age de l'enfant :";
        divElm.appendChild(labelElm);
        divElm.appendChild(element);
        divElm.style.display = "inlineBlock";
        console.log(element.id);
        enfantChild.appendChild(divElm);
        console.log(element);
        element.addEventListener("change", verefierAge);
    }
}

function verefierAge(e) {
    console.log("any welle");
    console.log(e.target);
    let ageEnfant = e.target;
    console.log(parseInt(ageEnfant.value));
    let parent_child = ageEnfant.parentElement;
    console.log(parent_child);
    console.log(parent_child.children[1]);
    parent_child.children[1].style.display = "inlineBlock";
    console.log(switch_age(parent_child.children[1]));
}

function switch_age(age) {
    let ageEnf = parseInt(age.value);
    let divEnfant = age.parentElement;
    let divCheck = document.createElement("div");
    let labelChild = document.createElement("label");
    labelChild.innerHTML = "";
    let elementChild = document.createElement("input");
    elementChild.setAttribute("type", "checkbox")
    elementChild.classList.add('age');
    divCheck.appendChild(elementChild);
    divCheck.appendChild(labelChild);
    divCheck.style.display = "none";
    divEnfant.appendChild(divCheck);
    let message = "";
    switch (true) {
        case (ageEnf <= 2):
            labelChild.innerHTML = "supplément lit enfant 25% chambre simple";
            divCheck.style.display = "inline-block";
            console.log("pas supplément lit enfant 0 DH");
            break;
        case (ageEnf > 2 && ageEnf < 14):
            divCheck.style.display = "none";
            console.log("ajout 50% chambre simple");
            break;
        case (ageEnf >= 14):
            console.log("ajout 70% chambre simple + lit");
            labelChild.innerHTML = "ajout une chambre simple";
            divCheck.style.display = "inline-block";
            break;
        default:
            break;
    }
    return message;
}