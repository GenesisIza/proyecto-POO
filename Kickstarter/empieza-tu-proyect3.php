  <?php include 'Plantillas/header.php';   ?>

  <div class="formulario espacio ">
    <h3>Pare terminar, comprobemos tu elegibilidad:</h3>
    <h4>Antes de que procedamos, por favor confirma unos cuantos detalles e <br> indícanos donde resides principalmente.</h4>
    <br><br>

        <form class="" action="registrarse.php" method="post">

<select class="form-control form-control-lg">
  <option value="0">Selecione su pais</option>
              <option value="1">Honduras</option>
             <option value="2">guatemala</option>
             <option value="3">estado unidos</option>
             <option value="4">españa</option>
             <option value="5">polonia</option>
             <option value="6">portugal</option>
              <option value="">brazil</option>
              <option value="">nicaragua</option>
              <option value="">mexico</option>
              <option value="">canada</option>
              <option value="">suiza</option>
              <option value="">peru</option>
              <option value="">Argentina</option>
</select>
      <br><br>
      <div class="container-fluid">
        <div class="row">

          <label><input name="chk-gustos[]" type="checkbox">Tengo al menos 18 años</label><br>
          <label><input name="chk-gustos[]" type="checkbox">Tengo una cuenta bancaria y una identificacion oficial</label><br>
          <label><input name="chk-gustos[]" type="checkbox">Tengo una tarjeta de credito o dedito</label><br>
        <div>
          <br><br>

      <input class="btn btn-primary" type="submit" name="" value="continuar">
    <br>  <a href="empieza-tu-proyecto1.php">idea para el proyecto</a>

    </form>

  </div>
