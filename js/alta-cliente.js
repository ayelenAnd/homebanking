function validacionAlta (form){
    const regexUser =  new RegExp(/^((?=.*[a-z])|(?=.*[A-Z])|(?=.*[0-9])).{6,}$/m);
    const regexPassword = new RegExp(/^((?=.*[a-z])|(?=.*[A-Z]))((?=.*[0-9])|(?=.*[!@#$%^&])).{6,}$/m);
    const regexDni = new RegExp(/^[0-9]*$/m);
    const regexFullName = new RegExp(/^((?=.*[a-z])|(?=.*[A-Z]))/m);

    const name = form.name.value;
    const lastname = form.lastname.value;
    const dni = form.dni.value;
    const username = form.user.value;
    const password = form.password.value;

    if (regexUser.test(username) && regexPassword.test(password) && regexDni.test(dni) && regexFullName.test(name) && regexFullName.test(lastname)){
        alert('Usuario dado de alta correctamente');
        return true;}
    else{
        alert("Error. Verifique los datos ingresados");
        return false;
    }
}