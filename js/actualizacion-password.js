function validacionPassword (form) {
    const regexPassword = new RegExp(/^((?=.*[a-z])|(?=.*[A-Z]))((?=.*[0-9])|(?=.*[!@#$%^&])).{6,}$/m);
    const actualPassword = form.actualPassword.value;
    const newPassword = form.newPassword.value;
    const repeatedPassword = form.repeatedPassword.value;
    if (regexPassword.test(newPassword) && regexPassword.test(repeatedPassword) && 
        (newPassword === repeatedPassword) && (actualPassword.trim() !== '')){
        alert("Cambio de contraseña exitoso");
        return true;}
    else{
        alert("Error. Contraseñas inválidas o verificar que ambas sean iguales");
        return false;
    }
}