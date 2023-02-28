let nom = document.getElementById('nom');
let prenom = document.getElementById('prenom');
let email = document.getElementById('email');
let message = document.getElementById('message');
let error = document.querySelector('.error');

document.forms[0].addEventListener("submit", function (evenement) {
    if ((nom.value.length < 5) ||
        (prenom.value.length < 5) ||
        (email.value.length < 5) ||
        (message.value.length < 5)) {
        error.textContent = "Certains champs sont trop courts, merci de vérifier";
        //alert("Attention un ou plusieurs champs sont vides!");
        evenement.preventDefault();
    }
    else {
        form.submit();
    }
});