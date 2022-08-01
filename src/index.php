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
</div>
</body>
</html>