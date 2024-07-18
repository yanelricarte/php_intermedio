<?php include('header.php') ?>

<section>
  <h1 class="titulo"> Bienvenidos </h1>
  <div class="container__form">
    <form action="cargar_personaje.php" class="form" method="POST" enctype="multipart/form-data">
      <label for="nombre"> Nombre </label>
      <input type="text" name="nombre">
      <br><br>
      <label for="apellido"> Apellido </label>
      <input type="text" name="apellido">
      <br><br>
      <label for="image"> Imagen </label>
      <input type="text" name="image">
      <br><br>
      <label for="descripcion"> descripcion </label>
      <textarea name="descripcion" id=""></textarea>
      <br><br>

      <input type="submit" value="Cargar Personajes">
    </form>

    <?php 
    if(isset($_GET['ok'])){
      echo "<p> Mensaje enviado con éxito </p>";
    }
    
    ?>

  </div>

</section>


</body>

</html>