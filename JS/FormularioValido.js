    function verificar()
    {
        /*var nombre = document.formulario.nombre.value;
         var grupo = document.formulario.grupo.value;*/
        var nombre=document.getElementById("nombre").value;
        var email= document.getElementById("email").value;
        var password= document.getElementById("password").value;
        var numero= document.getElementById("numero").value;


        if (nombre.length < 3 )
        {
            alert("Error en el nombre");
            return false;
        }


        expr = /^[a-zA-Z]+\d{3}\@ikasle.ehu\.(eus|es)/g;


        if ( !expr.test(email) )
        {
            alert("Error en el tipo de email");
            return false;
        }




    if(password.length< 6){
        alert("Contraseña demasiado corta");
        return false;
    }

    exptel=/^[6-9]/g;
    if(numero.length!= 9 | !exptel.test(numero)){
        alert ("Númer de telefono incorrecto" );
        return false;

    }

        alert("Se ha registrado usted correctamente");
        return true;
    }