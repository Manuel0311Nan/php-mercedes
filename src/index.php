<?php

require_once(dirname(__FILE__) . "../../config/config.php");
require_once(dirname(__FILE__) . "../../src/ayuda/functions.php");


require_once(dirname(__FILE__) . "../../src/parts/head.php");

?>

<body class="bg-light">
<?php
require_once(dirname(__FILE__) . "../../src/parts/header.php");
?>
<div class="m-0 row d-flex justify-content-center">
        <div class="col-11 px-0 d-flex justify-content-center">
            <img class="img-fluid" src="../public/assets/img/cascos-nuevo.jpg" >        
    </div>
    <div class="m-0 row d-flex justify-content-center text-light">
    <div class="col-12 pt-4 ps-4" style="background-color:black ;">
      <div class="row justify-content-center">
        <div class="col-6 col-md-4 mx-1">
          <p>¿Cuántos cascos crees que hay en la Citan?</p>
        </div>
        <div class="col-4 align-items-center col-md-4 ps-0 pe-1 ">
          <input type="number" class="form-control" id="num1" required>
        </div>
      </div>
      <div class="row justify-content-center">
        <div class="col-6 col-md-4 mx-1">
          <p>¿Cuántos cascos son de color naranja?</p>
        </div>
        <div class="col-4 d-flex align-items-center col-md-4 ps-0 pe-1">
          <input type="number" class="form-control" id="num2" required>
        </div>
      </div>
      <div class="row">
        <div class="col-6">
        </div>
        <div class="col-6">
          <p>Pregunta desempate.</p>
        </div>
      </div>
    </div>
    </div>
    <div class="m-0 row d-flex justify-content-center pt-2">
        <div class="col-12">
            <p>Por favor, rellena el siguiente formulario*.</p>
            <p class="fw-bold"> *Sólo se aceptará una participación por persona</p>
        </div>
    </div>
    <div class="m-0 row d-flex justify-content-center">
        <div class="col-12">
            <p>Por favor, le rogamos que antes de suministrar sus datos personales, lea atentamente la siguiente <span class="fw-bold">información básica</span>:</p>
            <table class="table table-bordered">
                <tbody>
                    <tr>
                        <td><span class="fw-bold"> Responsable de Tratamiento</span>: <br>STERN MOTOR S.L </td>
                        <td><span class="fw-bold">Finalidad principal</span>: <br>Celebración y resolución del concurso.</td>
                    </tr>
                    <tr>
                        <td><span class="fw-bold"> Legitimación</span>: <br>Consentimiento interesado.</td>
                        <td><span class="fw-bold">Destinatarios</span>: <br>Sus datos serán cedidos a Bricolaje Bricoman S.L.U. (Bricomart) con la finalidad de realizar comunicaciones comerciales, así como por obligación o mandato legal.</td>
                    </tr>
                    <tr>
                        <td colspan="2"><span class="fw-bold"> Derechos</span>: <br>Acceso, rectificación, supresión, limitación, oposición y portabilidad, entre otros, tal y como se explica en la información adicional. </td>
                    </tr>
                </tbody>
            </table>
            <p>Puede consultar la <span class="fw-bold"> información adicional y detallada</span> en el apartado "Política de Privacidad" de nuestra página web
            <a href="https://www.mercedes-benz-sternmotor.es/es/desktop/home.html" target="_blank">www.mercedes-benz-sternmotor.es</a></p>
            <div class="col-12 h6 pt2">
                <input type="checkbox" id="edad" name="edad" style="position:absolute;" required>
                <label for="edad" style="padding-left: 1.4em; display: inline-block;"> <span class="text-danger h5"> *</span> Una vez leída la anterior información, manifiesto ser mayor de 16 años y autorizo al tratamiento de mis datos de
        carácter personal que constan a continuación para las finalidades arriba expresadas</label>
            </div>
    </div>
    </div>
    <div class="m-0 row d-flex justify-content-center my-2 h5">
        <div class="col-12 py-2">
        <label for="nombre" class="pb-2">Nombre<span class="text-danger"> *</span></label>
        <input type="text" id="nombre" name="nombre" class="form-control p-3 w-100" required>
        </div>
        <div class="col-12 col-md-6 py-2">
        <label for="apellidos" class="pb-2">Primer Apellido<span class="text-danger"> *</span></label>
        <input type="text" id="primer_apellido" name="primer_apellido" class="form-control p-3 w-100" required>
      </div>
      <div class="col-12 col-md-6 py-2">
        <label for="apellidos" class="pb-2">Segundo Apellido<span class="text-danger"> *</span></label>
        <input type="text" id="segundo_apellido" name="segundo_apellido" class="form-control p-3 w-100" required>
      </div>
      <div class="col-12 col-md-6 py-2">
        <label for="dni" class="pb-2">Tipo de documento<span class="text-danger"> *</span></label>
        <select id="tipo_doc" name="tipo_doc" class="form-select p-3 w-100" required>
        <option value="DNI" selected>DNI</option>
          <option value="NIE">NIE</option>
          <option value="PASAPORTE">Pasaporte</option>
        </select>
      </div>
      <div class="col-12 col-md-6 py-2">
        <label for="ident" class="pb-2">DNI/ NIE/ Otros doc. de identificación<span class="text-danger"> *</span></label>
        <input type="text" id="ident" name="ident" class="form-control p-3 w-100" required>
      </div>
      <div class="col-12 py-2">
        <label for="direccion" class="pb-2">Dirección</label>
        <input type="text" id="direccion" name="direccion" class="form-control p-3 w-100" required>
      </div>
      <div class="col-12 col-md-5 py-2">
        <label for="telefono" class="pb-2">Teléfono<span class="text-danger"> *</span></label>
        <input type="number" id="telefono" name="telefono" class="form-control p-3 w-100" required>
      </div>
      <div class="col-12 col-md-7 py-2">
        <label for="email" class="pb-2">Dirección correo electrónico<span class="text-danger"> *</span></label>
        <input type="text" id="email" name="email" class="form-control p-3 w-100" required>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered col-12 col-lg-9">
            <tbody>
                <tr>
                    <td></td>
                    <td colspan="4">Próxima renovación de su furgoneta:</td>
                </tr>
                <tr>
                    <td>Indica la marca y modelo de su furgoneta actual:</td>
                    <td>Menos de 3 meses</td>
                    <td>de 3 a 6 meses</td>
                    <td>de 6 a 12 meses</td>
                    <td>más de 12 meses</td>
                </tr>
                <tr>
                    <td><input type="text" id="marca_modelo" name="marca_modelo" class="form-control p-3 w-100"></td>
                    <td><input type="radio" id="3_meses" name="meses" value="menos de 3 meses" onclick="funcionRadio(this.value)"></td>
                    <td><input type="radio" id="3_6_meses" name="meses" value="de 3 a 6 meses" onclick="funcionRadio(this.value)"></td>
                    <td><input type="radio" id="6_12_meses" name="meses" value="de 6 a 12 meses" onclick="funcionRadio(this.value)"></td>
                    <td><input type="radio" id="12_meses" name="meses" value="más de 12 meses" onclick="funcionRadio(this.value)"></td>
                </tr>
            </tbody>
        </table>
        </div>
      </div>
      <div class="col-12 h6 pt-2">
        <input id="privacidad" name="privacidad" type="checkbox" style="position: absolute;" required>
        <label for="privacidad" style="padding-left:1.4em;display:inline-block;"> <span class="text-danger h5">* </span>He leído y acepto la política de privacidad y las <a href="https://azkenservices.com/actions-data/bricomart/Bricomart-Mercedes/public/views/bases.php" target="_blank">bases del concurso.</a></label>
      </div>
      <div class="col-12 h6 pt-2">
        <input id="comercial_bricomart" name="comercial_bricomart" type="checkbox" style="position: absolute;">
        <label for="comercial_productos" style="padding-left:1.4em;display:inline-block;">Autorizo la comunicación de mis datos personales para su tratamiento con el fin de recibir información comercial sobre productos y servicios por Stern Motor,  perteneciente al Grupo Movento. Puede encontrar información adicional en <a href="https://www.movento.es/es" target="_blank">www.movento.es</a></label>
      </div>
      <div class="col-12 h6 pt-2">
        <input id="comercial_productos" name="comercial_productos" type="checkbox" style="position: absolute;">
        <label for="comercial_bricomart" style="padding-left:1.4em;display:inline-block;"> Autorizo al tratamiento de mis datos personales con la finalidad de recibir comunicaciones comerciales de Bricomart. Puede encontrar información adicional en <a href="https://www.bricomart.es/" target="_blank">www.bricomart.es</a> </label>
      </div>
      <div class="row mx-0 my-3 h6" id="faltan_campos" style="display:none">
        <div class="col-12">
          <p class="text-danger">* Por favor, rellena todos los campos, confirma que tienes 16 o más años y acepta la política de privacidad y las bases del concurso.</p>
        </div>
      </div>
      <div class="row mx-0 my-3 h6" id="cascos_mal" style="display:none">
        <div class="col-12">
          <p class="text-danger">* El número de cascos debe estar entre 1 y 999.</p>
        </div>
      </div>
      <div class="row mx-0 my-3 h6" id="correo_mal" style="display:none">
        <div class="col-12">
          <p class="text-danger">* Introduce una dirección de correo electrónico válida.</p>
        </div>
      </div>
      <div class="row mx-0 my-3 h6" id="telefono_mal" style="display:none">
        <div class="col-12">
          <p class="text-danger">* Introduce un número de teléfono válido.</p>
        </div>
      </div>
      <div class="row mx-0 my-3 h6" id="dni_mal" style="display:none">
        <div class="col-12">
          <p class="text-danger">* Introduce un documento de identificación válido.</p>
        </div>
      </div>
      <div class="" id="dni_repe">
        <div class="col-12">
        </div>
      </div>
      <div class="row mx-0 my-3">
        <div class="col-12">
          <button type="button" class="btn btn-dark p-3 w-100 d-block" id="submitBtn">Enviar</button>
        </div>
      </div>
      </div>

    </div>
</div>
<script>
    let renovacion = "";
    function funcionRadio(valor){
        renovacion = valor;
    }

</script>
</body>
</html>