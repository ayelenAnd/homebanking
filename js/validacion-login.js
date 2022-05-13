
function validacionLogin(form) {
    const regexUser =  new RegExp(/^((?=.*[a-z])|(?=.*[A-Z])|(?=.*[0-9])).{6,}$/m);
    const regexPassword = new RegExp(/^((?=.*[a-z])|(?=.*[A-Z]))((?=.*[0-9])|(?=.*[!@#$%^&])).{6,}$/m);
    const username = form.user.value;
    const password = form.password.value;
    if (regexUser.test(username) && regexPassword.test(password)){
        return true;}
    else{
        alert("Error. Usuario o contraseña incorrectos");
        return false;
    }
} 