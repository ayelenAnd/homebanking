function validacionDeposito (form){
    const regexAlias = new RegExp(/^((?=.*[a-z])|(?=.*[A-Z])).{8,}$/m);

    const monto = form.monto.value;
    const alias = form.alias.value;

    if (regexAlias.test(alias) && monto > 0){
        alert('Deposito realizado correctamente');
        return true;}
    else{
        alert("Error. Verifique los datos ingresados");
        return false;
    }
}