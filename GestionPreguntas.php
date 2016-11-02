<html>


<head>




<script language = "javascript">
    XMLHttpRequestObject = new XMLHttpRequest();
    XMLHttpRequestObject.onreadystatechange = function() {
        if (XMLHttpRequestObject.readyState == 4) {
            if (XMLHttpRequestObject.status == 200) {
                document.getElementById("txtHint").innerHTML = XMLHttpRequestObject.response;

            }
        }
    }

    function pedirDatos() {
        XMLHttpRequestObject.open("POST", "verPreguntasXML.php", true);
        XMLHttpRequestObject.send();




    }


    function añadirDatos(){
        XMLHttpRequestObject.open("POST","InsertarPregunta.php",true);
        XMLHttpRequestObject.send();
    }

</script>


</head>



<body>


<h1>Mostrando datos con AJAX</h1>

    <input type = "button" value = "Mostrar preguntas XML" onclick="pedirDatos()"/>

    <input type = "button" value = "Insertar preguntas en XML y BD" onclick="añadirDatos()"/>

<div id="txtHint" >
    <p>En verdad te digo hijo mío, que aquí se verá la información que buscas. </p>
</div>

<br><br><br>





</body>


</html>