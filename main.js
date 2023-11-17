const form = document.querySelector("#register");
const username = document.querySelector('#username');
const email = document.querySelector('#email');
const password = document.querySelector('#password');
const password2 = document.querySelector('#cpassword');


// Evenements
form.addEventListener('submit', e => {
    if (!form_verify()) {
        e.preventDefault();
    }
})

function form_verify() {
    // Obtenir toutes les valeurs des inputs
    let allConditionsMet = true;
    const userValue = username.value.trim();
    const emailValue = email.value.trim();
    const pwdValue = password.value.trim();
    const pwd2Value = password2.value.trim();
    if (userValue === "") {
        let message = "Username ne peut pas être vide";
        setError(username, message);
        allConditionsMet = false;
    } else if (!userValue.match(/^[a-zA-Z]/)) {
        let message = "Username doit commencer par une lettre";
        setError(username, message);
        allConditionsMet = false;
    } else {
        let letterNum = userValue.length;
        if (letterNum < 3) {
            let message = "Username doit avoir au moins 3 caractères";
            setError(username, message);
            allConditionsMet = false;
        } else {
            setSuccess(username);
        }
    }

    // Validation de l'email
    if (emailValue === "") {
        let message = "Email ne peut pas être vide";
        setError(email, message);
        allConditionsMet = false;
    } else if (!email_verify(emailValue)) {
        let message = "Email non valide";
        setError(email, message);
        allConditionsMet = false;
    } else {
        setSuccess(email);
    }

    // Validation du mot de passe
    if (pwdValue === "") {
        let message = "Le mot de passe ne peut pas être vide";
        setError(password, message);
        allConditionsMet = false;
    } else if (!password_verify(pwdValue)) {
        let message = "Mot de passe trop faible";
        setError(password, message);
        allConditionsMet = false;
    } else {
        setSuccess(password);
    }

    // Validation de la confirmation du mot de passe
    if (pwd2Value === "") {
        let message = "La confirmation du mot de passe ne peut pas être vide";
        setError(password2, message);
        allConditionsMet = false;
    } else if (pwd2Value !== pwdValue) {
        let message = "Les mots de passe ne correspondent pas";
        setError(password2, message);
        allConditionsMet = false;
    } else {
        setSuccess(password2);
    }

    return allConditionsMet;

}


function setSuccess(elem) {
    const formControl = elem.parentElement;
    formControl.className = 'formc success';
}

function setError(elem, message) {
    const formControl = elem.parentElement;
    const small = formControl.querySelector('small');
    small.innerText = message
    formControl.className = "formc error";

}
function email_verify(email) {
    /*
    * r_rona.22-t@gmail.com
        /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/
    */
    return /^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$/.test(email);
}

function password_verify(passeword) {
    return /^(?=.*[0-9])(?=.*[a-zA-Z])[a-zA-Z0-9!@#$%^&*]{8,}$/.test(passeword);
}
