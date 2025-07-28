<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <link rel="stylesheet" href="css/style.css">
  <title>El Barril - Cervecería</title>

 
</head>
<body>

  <button class="menu-toggle" onclick="toggleMenu()">☰</button>

  <nav id="nav-menu">
    <a href="#inicio">Inicio</a>
    <a href="#tapas">Tapas</a>
    <a href="#bebidas">Bebidas</a>
    <a href="#ubicacion">Ubicación</a>
  </nav>

  <header id="inicio">
    <h1>Bienvenido a El Barril</h1>
  </header>

  <!--<section id="tapas" class="section">
    <h2>Nuestras Tapas</h2>
    <div class="grid">
      <div class="card"><h3>Patatas Bravas</h3><p>Picantes y sabrosas con salsa especial.</p> <button onclick="pedir('Patatas Bravas')">Pedir</button></div>
      <div class="card"><h3>Calamares</h3><p>Fritos al momento, crujientes.</p><button onclick="pedir('Calamares')">Pedir</button></div>
      <div class="card"><h3>Croquetas</h3><p>De jamón ibérico, cremosas por dentro.</p><button onclick="pedir('Croquetas')">Pedir</button></div>
      <div class="card"><h3>Tortilla Española</h3><p>Con cebolla y huevo justo.</p><button onclick="pedir('Tortilla Española')">Pedir</button></div>
      <div class="card"><h3>Pimientos del Padrón</h3><p>¡Unos pican y otros no!</p><button onclick="pedir('Pimientos del Padrón')">Pedir</button></div>
    </div>
  </section>

  <section id="bebidas" class="section">
    <h2>Nuestras Bebidas</h2>
    <div class="grid">
      <div class="card"><h3>🍺 Cerveza Artesanal</h3><p>€2.50</p></div>
      <div class="card"><h3>🍷 Copa de Vino</h3><p>€3.00</p></div>
      <div class="card"><h3>🍹 Mojito</h3><p>€5.50</p></div>
      <div class="card"><h3>🥃 Ron Cola</h3><p>€4.00</p></div>
      <div class="card"><h3>🍸 Gin Tonic</h3><p>€6.00</p></div>
    </div>
  </section> -->


    <main class="grid">
      <?php
      $host = "sql100.infinityfree.com";
      $usuario = "if0_39431838";
      $contrasena = "V4S4LZCmodOp  ";
      $base_datos = "if0_39431838_bar";

      // conexion a la base de datos
      $conexion = mysqli_connect($host, $usuario, $contrasena, $base_datos);

      // verificar la conexion
      if (mysqli_connect_errno()) {
        die("Error de conexion:" . mysqli_connect_error());
      }

      //consulta SQL
      $consulta = "SELECT * FROM tapas";

      //Ejecutar la consulta
      $resultado = mysqli_query($conexion, $consulta);

      //verificar si la consulta fue exitosa
      if (!$resultado) {
        die("Error en la consulta:" . mysqli_error($conexion));
      }

      // Procesar los resultados
      if($resultado -> num_rows >0) {
        while ($fila = $resultado -> fetch_assoc()) {
          $nombre = $fila['Nombre'];
          $descripcion = $fila['Descripcion'];
          $precio = $fila['Precio'];
          $ID = $fila['ID'];

          $IMG = "<img src= \"img/Tapas/".$ID.".webp\" alt= \"$descripcion\"> ";


          echo "<div class=\"card\">" . $IMG . "<br>". $nombre . "<br>" . $descripcion. "<br>" . $precio . "<br> <button>pedir</button> </div>";
         
          
          
        }
      }

      //consulta SQL
      $consulta2 = "SELECT * FROM bebidas";

      //Ejecutar la consulta
      $resultado2 = mysqli_query($conexion, $consulta2);

      //verificar si la consulta fue exitosa
      if (!$resultado2) {
        die("Error en la consulta:" . mysqli_error($conexion));
      }

      // Procesar los resultados
     if($resultado2 -> num_rows >0) {
        while ($fila2 = $resultado2 -> fetch_assoc()) {
          $nombre2 = $fila2['Nombre'];
          $descripcion2 = $fila2['Descripcion'];
          $precio2 = $fila2['Precio'];
          $ID2 = $fila2['ID'];

          $IMG2 = "<img src= \"img/bebidas/".$ID2.".webp\" alt= \"$descripcion2\"> ";


          echo "<div class=\"card\">" . $IMG2 . "<br>". $nombre2 . "<br>" . $descripcion2. "<br>" . $precio2 . "<br> <button>pedir</button> </div>";
         
          
          
        }
      }



      //cerrar la conexion
      mysqli_close($conexion);


      ?>




    </main>






  <section id="ubicacion" class="section">
    <h2>Ubicación</h2>
    <div style="text-align: center;">
      <p>📍 Calle, 123 - Madrid</p>
      <p>📞 +34 600 123 456</p>
      <p>✉️ contacto@elbarril.com</p>
      <iframe 
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3036.359824122283!2d-3.703790684581043!3d40.416775179363735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422887f28bcb3b%3A0xf472cb6a7ac70d92!2sPuerta%20del%20Sol!5e0!3m2!1ses!2ses!4v1700000000000" 
        width="100%" 
        height="300" 
        style="border:0; margin-top:20px;" 
        allowfullscreen="" 
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>
  </section>

  <footer>
    &copy; 2025 El Barril. Todos los derechos reservados.
  </footer>

 

    <script src="js/javascript.js"></script>

</body>
</html>