function validacionAltaCuenta (form){
    const regexCuenta = new RegExp(/^((?=.*[a-z])|(?=.*[A-Z])).{5,}$/m);
    const regexAlias = new RegExp(/^((?=.*[a-z])|(?=.*[A-Z])).{8,}$/m);

    const nombreCuenta = form.nombreCuenta.value;
    const alias = form.alias.value;

    if (regexCuenta.test(nombreCuenta) && regexAlias.test(alias)){
        alert('Cuenta dada de alta correctamente');
        return true;}
    else{
        alert("Error. Verifique los datos ingresados");
        return false;
    }
}
 