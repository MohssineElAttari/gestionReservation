let check_input = document.querySelectorAll('.check_input');
let button_reservation = document.getElementById('btn_reservation');
let divEnfant = document.querySelector('.enfant_container');
var text_price = 0;
let nombre_res = 0;
let prix_bien_total = 0;
// console.log(divEnfant);
let nombreInput = document.querySelector("#nombre");
let enfantChild = document.querySelector(".number_enfant");
let nombre;
// bien.addeventlistener(function())
// console.log(check_input);

// Array.from(checke).forEach(function(elm) {
//     elm.addEventListener("change", verefirer_check)
// });

document.onload = MyAddEventListener();

function MyAddEventListener() {
    // boucle pour ajouter un EventListener in nodelist (check Box)
    for (let i = 0; i < check_input.length; i++) {
        // console.log(check[i]);
        check_input[i].addEventListener("change", verefirer_check);
        // Afin de ne recevoir le prix de bien qu'une seule fois
        check_input[i].parentElement.children[0].addEventListener("change", function(e) {
            // console.log("once");
            // console.log(check_input[i].parentElement.children[0].value);
            text_price = parseInt(e.target.parentElement.children[2].innerText);
        }, { once: true });

        check_input[i].parentElement.children[0].addEventListener("change", getPrice);
    }
}

let compteur = 0;
button_reservation.disabled = true;


//les fonctions
function getPrice(e) {
    nombre_res = parseInt(e.target.parentElement.children[0].value);
    prix_bien_total = text_price * nombre_res;
    // console.log(prix_bien_total);
    e.target.parentElement.children[2].innerHTML = prix_bien_total + " $";
}

let dateChengeE = false;
let dateChengeS = false;

function verefirer_date(dateEntre, dateSortie) {
    dateChengeE = false;
    dateChengeS = false;
    if (dateEntre.value != "") {
        dateChengeE = true;
    } else {
        dateChengeE = false;
    }

    if (dateSortie.value != "") {
        dateChengeS = true;

    } else {
        console.log(dateChengeS);
    }

    dateEntre.addEventListener("change", function() {
        if (dateEntre.value != "") {
            dateChengeE = true;
        }
    })
    dateSortie.addEventListener("change", function() {
        if (dateSortie.value != "") {
            dateChengeS = true;
        }
    })

}

let IDBienTab = [];


function verefirer_check(e) {
    let element = e.target;

    let image_child = element.parentElement.parentElement.childNodes[3].childNodes[1].childNodes[1];
    let idBien = element.parentElement.children[1].value;

    let dateEntre = element.parentElement.parentElement.children[3].children[0];
    let dateSortie = element.parentElement.parentElement.children[3].children[1];

    verefirer_date(dateEntre, dateSortie);

    // console.log(button_reservation);
    if (element.checked) {
        image_child.style.filter = "none";

        if (!dateChengeE && !dateChengeS) {
            alert("entrer la date");
            button_reservation.disabled = true;
            console.log("wawa");
        } else {
            button_reservation.disabled = false;
        }
        compteur++;
        IDBienTab.push(idBien);
    } else {
        button_reservation.disabled = true;
        image_child.style.filter = "grayscale(100%)";
        compteur--;
        let index = IDBienTab.indexOf(idBien);
        IDBienTab.splice(index, 1);
        delete data[idBien];
        console.log(compteur);

    }
    console.log(compteur);
    console.log(IDBienTab);
    if (compteur == 0 || !dateChengeE && !dateChengeS) {
        button_reservation.disabled = true;
        divEnfant.setAttribute("hidden", true);
    } else if (dateChengeE && dateChengeS && compteur == 0) {
        button_reservation.disabled = false;
    }
}
let data = {

};

function verefirerValidation() {
    if (!button_reservation.disabled) {
        divEnfant.removeAttribute("hidden");
        IDBienTab.forEach(id => {
            let numberPlace = document.getElementById('number_' + id).value;
            let dateEntre = document.getElementById('dateEntrer_' + id).value;
            let dateSortie = document.getElementById('dateSortie_' + id).value;
            let price = document.getElementById('price_' + id).innerText;

            data[id] = {
                "numberPlace": numberPlace,
                "dateEntre": dateEntre,
                "dateSortie": dateSortie,
                "price": price
            };
        });
        console.log("hahowa", data);
    } else {
        setAttribute("hidden", true);
    }
}

function sendData() {

    console.log(data);

    fetch('../controller/ReservationController.php?action=add', {
            method: 'POST', // or 'PUT'
            headers: {
                'Content-Type': 'application/json',
            },
            body: JSON.stringify(data),
        })
        .then(response => response.text())
        .then(data => {
            console.log('Success:', data);
        })
        .catch((error) => {
            console.error('Error:', error);
        });
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