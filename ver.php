<?php include('header.php') ?>
<section class="container__personajes">
  <?php include('conexion.php'); 
  $consulta_db = mysqli_query($conexion, "SELECT * FROM personajes");
  while($mostrar_datos = mysqli_fetch_assoc($consulta_db)){
    ?>
    <div class="caja_personajes">
      <h2> <?php echo $mostrar_datos['nombre'] . " " . $mostrar_datos['apellido']  ?></h2>
      <img src="img/<?php echo $mostrar_datos['imagen']; ?>" alt="<?php echo $mostrar_datos['nombre']; ?>">
      <p> <?php echo $mostrar_datos['descripcion']; ?></p>
    </div>

  <?php } ?>

  

</section>