// bien
let check_input = document.querySelectorAll('.check_input');
let button_reservation = document.getElementById('btn_reservation');
let divEnfant = document.querySelector('.enfant_container');

var text_price = 0;
let nombre_res = 0;
let prix_bien_total = 0;
// console.log(divEnfant);
let btnReservation = document.querySelector("#btn_reserver");

let nombre;
let menuHorizontal = document.querySelector(".menu-horizontal");
btnReservation.addEventListener("click", function() {
    sendData();
})

console.log(menuHorizontal);
// bien.addeventlistener(function())
// console.log(check_input);

// Array.from(checke).forEach(function(elm) {
//     elm.addEventListener("change", verefirer_check)
// });
var currentTab = 0; // Current tab is set to be the first tab (0)

document.onload = MyAddEventListener();

function MyAddEventListener() {
    for (let i = 0; i < menuHorizontal.children.length; i++) {
        menuHorizontal.children[i].addEventListener("click", function(e) {

            if (document.querySelector('li.active') !== null) {
                document.querySelector('li.active').classList.remove('active');
            }
            e.target.parentElement.className = "active";


            let type = e.target.parentElement.dataset.type;
            console.log(type);
            const biens = document.querySelectorAll(".bien_child");
            console.log(biens);

            if (type == "all") {
                biens.forEach(bien => {
                    bien.classList.remove('hide');
                    bien.classList.add('show');
                });
                return;
            }
            const typeItems = document.querySelectorAll(`[data-bien="${type}"]`);
            console.log(typeItems);
            biens.forEach(bien => bien.classList.add('hide'));
            typeItems.forEach(bien => bien.classList.remove('hide'));
            typeItems.forEach(bien => bien.classList.add('show'));




        });
    }
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
// button_reservation.disabled = true;


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



// Get the modal



function toggleModal(modal) {
    modal.classList.toggle("show-modelBien");
}
let data = {

};

function saveData(idBien) {

    let numberPlace = document.getElementById('number_' + idBien).value;
    let dateEntre = document.getElementById('dateEntrer_' + idBien).value;
    let dateSortie = document.getElementById('dateSortie_' + idBien).value;
    let price = document.getElementById('price_' + idBien).innerText;
    data[idBien] = {
        "numberPlace": numberPlace,
        "dateEntre": dateEntre,
        "dateSortie": dateSortie,
        "price": price
    };
    if (idBien > 2) {
        const nbreEnfants = document.querySelector(`.nombre_${idBien}`).value;
        let ages = [];
        const pension = document.querySelector(`#pension_${idBien}`).value;

        for (let index = 1; index <= nbreEnfants; index++) {
            const element = document.querySelector(`#id_${index}_${idBien}`).value;
            ages.push(element);
        }
        data[idBien] = {
            "numberPlace": numberPlace,
            "dateEntre": dateEntre,
            "dateSortie": dateSortie,
            "price": price,
            "age": ages,
            "pension": pension,
        };

    }

    console.log(data[idBien]);
    console.log(data);


}

function verefirer_check(e) {
    let element = e.target;
    let image_child = element.parentElement.parentElement.childNodes[3].childNodes[1].childNodes[1];
    let idBien = element.parentElement.children[1].value;
    let dataType = element.parentElement.parentElement;
    // let modelBien = element.parentElement.parentElement.parentElement;
    // verefirer_date(dateEntre, dateSortie);

    // console.log(button_reservation);

    const modal = document.querySelector(`#modal_${idBien}`);
    const closeButton = document.querySelector(`.close_${idBien}`);
    currentTab = 0;
    const prevBtn = document.querySelector(".prevBtn_" + idBien);
    const nextBtn = document.querySelector(".nextBtn_" + idBien);

    console.log(currentTab);



    if (element.checked) {
        image_child.style.filter = "none";

        console.log(dataType.dataset.bien > 2);
        if (dataType.dataset.bien > 2) {
            prevBtn.addEventListener('click', function(e) {
                nextPrev("prev", -1, idBien);
            });
            nextBtn.addEventListener('click', function(e) {
                const action = e.target.dataset.action;
                nextPrev(action, 1, idBien);
            });
            closeButton.addEventListener("click", function() {
                currentTab = 0;
                toggleModal(modal);
            });

            toggleModal(modal);
            let enfantChild = document.querySelector(".number_enfant_" + idBien);
            let nombreInput = document.querySelector(".nombre_" + idBien);
            nombreInput.addEventListener("change", function(e) {
                nombre = parseInt(nombreInput.value)
                if (nombre > 0 && nombre <= 10) {;
                    createElemants(enfantChild, nombre);
                    // testE();
                } else
                    nombre = 0;
                console.log(nombre);
            });


        }


        // button_reservation.disabled = false;

        compteur++;
        IDBienTab.push(idBien);
        saveData(idBien);
    } else {


        closeButton.addEventListener("click", function() {
            currentTab = 0;
            toggleModal(modal);
            console.log(currentTab);
        });

        // button_reservation.disabled = true;
        image_child.style.filter = "grayscale(100%)";
        compteur--;
        let index = IDBienTab.indexOf(idBien);
        // let index2 = data.indexOf(idBien);
        // console.log(index2);
        IDBienTab.splice(index, 1);
        // data.splice(index2, 1);

        delete data[idBien];
        console.log(compteur);
        console.log(data);
    }
    console.log(compteur);
    console.log(IDBienTab);
    // if (compteur == 0 || !dateChengeE && !dateChengeS) {
    //     button_reservation.disabled = true;
    //     divEnfant.setAttribute("hidden", true);
    // } else if (dateChengeE && dateChengeS && compteur == 0) {
    //     button_reservation.disabled = false;
    // }
}


function verefirerValidation() {
    // if (true) {
    //     // divEnfant.removeAttribute("hidden");
    //     IDBienTab.forEach(id => {
    //         let numberPlace = document.getElementById('number_' + id).value;
    //         let dateEntre = document.getElementById('dateEntrer_' + id).value;
    //         let dateSortie = document.getElementById('dateSortie_' + id).value;
    //         let price = document.getElementById('price_' + id).innerText;

    //         data[id] = {
    //             "numberPlace": numberPlace,
    //             "dateEntre": dateEntre,
    //             "dateSortie": dateSortie,
    //             "price": price
    //         };
    //     });
    //     console.log("hahowa", data);
    // } else {
    //     setAttribute("hidden", true);
    // }
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


function createElemants(enfantChild, nombreEnf) {
    enfantChild.innerHTML = "";

    let idN = 0;
    for (let i = 0; i < nombreEnf; i++) {
        let divElm = document.createElement("div");
        let labelElm = document.createElement("label");
        let element = document.createElement("input");
        idN++;
        element.id = "id_" + idN + "_" + enfantChild.dataset.bien;
        element.classList.add('age');
        element.placeholder = "entre l'age de l'enfant " + idN;
        element.setAttribute("name", "ageEnfant")
        labelElm.innerHTML = "l'age de l'enfant :";
        divElm.appendChild(labelElm);
        divElm.appendChild(element);
        divElm.style.display = "inlineBlock";

        enfantChild.appendChild(divElm);

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





//swiper
// Display the current tab

function showTab(n, idBien) {
    // This function will display the specified tab of the form...
    var x = document.getElementsByClassName(`tab_${idBien}`);
    x[n].style.display = "block";
    //... and fix the Previous/Next buttons:
    if (n == 0) {
        document.querySelector(".prevBtn_" + idBien).style.display = "none";
    } else {
        document.querySelector(".prevBtn_" + idBien).style.display = "inline";
    }
    if (n == (x.length - 1)) {
        const nextBtn = document.querySelector(".nextBtn_" + idBien);
        nextBtn.innerHTML = "Submit";
        nextBtn.dataset.action = "submit";

    } else {

        const nextBtn = document.querySelector(".nextBtn_" + idBien);
        nextBtn.innerHTML = "Next";
        nextBtn.dataset.action = "next";
    }
    //... and run a function that will display the correct step indicator:
    fixStepIndicator(n)
}



function nextPrev(action, n, idBien) {
    if (action == "submit") {
        saveData(idBien);
        return;
    }


    // This function will figure out which tab to display
    var x = document.getElementsByClassName(`tab_${idBien}`);

    // Exit the function if any field in the current tab is invalid:
    // if (n == 1 && !validateForm()) return false;
    // Hide the current tab:
    x[currentTab].style.display = "none";
    // Increase or decrease the current tab by 1:
    currentTab = currentTab + n;
    // if you have reached the end of the form...
    if (currentTab >= x.length) {
        // ... the form gets submitted:
        document.getElementById("resForm").submit();
        return false;
    }
    // Otherwise, display the correct tab:
    showTab(currentTab, idBien);
}

function validateForm() {
    // This function deals with validation of the form fields
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // A loop that checks every input field in the current tab:
    for (i = 0; i < y.length; i++) {
        // If a field is empty...
        if (y[i].value == "") {
            // add an "invalid" class to the field:
            y[i].className += " invalid";
            // and set the current valid status to false
            valid = false;
        }
    }
    // If the valid status is true, mark the step as finished and valid:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";
    }
    return valid; // return the valid status
}

function fixStepIndicator(n) {
    // This function removes the "active" class of all steps...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... and adds the "active" class on the current step:
    x[n].className += " active";
}