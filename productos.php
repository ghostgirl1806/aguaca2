
<!DOCTYPE html>
<html lang="en">
<script src="https://kit.fontawesome.com/86ecebaeb6.js" crossorigin="anonymous"></script>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="diseño.css">
  <title>Menú con Inicio de Sesión</title>
  <link rel="stylesheet" href="diseño.css">
</head>
<body>
  <header>
    <section id="header-top">
      <aside>
        <div class="logo">
          <img width="150" src="AvocadoJA_transparent.png">
        </div>
        <div class="search-container">
          <form method="post" action="/carrito/">
            <input type="text" name="nombre" placeholder="Buscar producto">
            <button class="button">Buscar</button>
          </form>
        </div>
      </aside>
      <nav>
        <ul>
          <li><a class="Productos" href="carrito.php">Carrito</a></li>
          <li><a class="Clientes" href="/clientes">Productores</a></li>
          <li><a class="Carrito" href="/carrito">Contacto</a></li>
          <li><a class="Salir" href="/logout">Servicios</a></li>
          <li><a class="Iniciar" href="/iniciarSesion">Productos</a></li>
        </ul>
      </nav>
    </section>
    <section id="header-bottom"></section>
  </header>
  <main>
    <aside>
      <h1 id="categorias-title">Categorias</h1>
      <div class="scrollable-div">
        <ul class="categorias">
          <li><i class="fa-solid fa-wand-magic-sparkles fa-lg"></i><a class="frutas" href="#">Cosmeticos</a></li>
          <li><i class="fa-solid fa-oil-can fa-lg"></i><a class="lacteos" href="#">Aceites</a></li>
          <li><i class="fa-solid fa-bowl-rice fa-lg"></i><a class="arroz" href="#">Tratamientos capilares</a></li>
          <li><i class="fa-solid fa-bottle-droplet fa-xl"></i><a class="aceites" href="#">Cuidado facial</a></li>
          <li><i class="fa-solid fa-kitchen-set fa-lg"></i><a class="despensa" href="#">Postres</a></li>
          <li><i class="fa-solid fa-temperature-low fa-lg"></i><a class="pollo" href="#">Refrigerados</a></li>
          <li><i class="fa-regular fa-snowflake fa-lg"></i><a class="carnes" href="#">Bebidas frias y calientes</a></li>
          <li><i class="fa-solid fa-jar fa-lg"></i><a class="sazonadores" href="#">Productos untables</a></li>
          <li><i class="fa-solid fa-capsules fa-lg"></i><a class="pan" href="#">Medicinales</a></li>
          <li><i class="fa-solid fa-mug-saucer fa-lg"></i><a class="cafe" href="#">Café, té y chocolates</a></li>
          <li><i class="fa-solid fa-whiskey-glass"></i><a class="snacks" href="#">Condimentos y salsas</a></li>
          <li><i class="fa-solid fa-wine-bottle fa-lg"></i><a class="bebidas" href="#">Tipos</a></li>
          <li><i class="fa-solid fa-hand-holding-hand"></i><a class="congelados" href="#">cuidado corporal</a></li>
          <li><i class="fa-solid fa-wine-glass fa-lg"></i><a class="licores" href="#">Licores</a></li>
          <li><i class="fa-solid fa-spray-can-sparkles fa-lg"></i><a class="personal" href="#">Cuidado personal</a></li>
          <li><i class="fa-solid fa-house fa-lg"></i><a class="hogar" href="#">Cuidado del hogar</a></li>
          <li><i class="fa-solid fa-children fa-lg"></i><a class="bebes" href="#">alimento para bebés</a></li>
          </li>
        </ul>

      </div>
    </aside>
    <section class="home-cards-container">
    <div class="container">
    <div class="wrapper">
        <div class="banner-image2"> </div>
        <h1>Aguacate Pirkenton x 4 Und</h1>
        <p>450 Gr<br />
            $9.850<br />
            Gramo a $ 21,89</p>
    </div>
    <div class="button-wrapper">
        <!-- Formulario para agregar el producto al carrito -->
        <form action="agregar_carrito.php" method="post">
            <input type="hidden" name="producto_id" value="1">
            <input type="hidden" name="nombre" value="Aguacate Pirkenton">
            <input type="hidden" name="precio" value="9850">
            <input type="number" id="cantidad" name="cantidad" value="1" min="1">
            <button class="btn fill">AGREGAR AL CARRITO</button>
        </form>
    </div>
</div>
      
      
      <div class="container">
        <div class="wrapper">
          <div class="banner-image1"> </div>
          <h1>Aguacate Lamb Hass x unidad</h1>
          <p>
            1 Kg<br />
            $3.400 <br />
            Gramo a $ 3,40</p>
        </div>
        <div class="button-wrapper">
          <form action="carrito.php" method="post">
            <input type="hidden" name="producto_id" value="2">
            <label for="cantidad">Cantidad:</label>
            <input type="number" id="cantidad" name="cantidad" value="1" min="1">
            <button type="submit" class="btn fill">AGREGAR AL CARRITO</button>
          </form>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image2"> </div>
          <h1>Aguacate Pirkenton x 4 Und</h1>
          <p>450 Gr<br />
            $9.850<br />
            Gramo a $ 21,89</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image3"> </div>
          <h1>Aguacate Reed x 5 uds</h1>
          <p>500 Gr<br />
            $4.600<br />
            Gramo a $ 9,20</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image4"> </div>
          <h1>Aguacate Gem 7 uds</h1>
          <p>500 Gr<br />
            $3.550<br />
            Gramo a $ 6,50</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image5"> </div>
          <h1>Aguacate Bacon x Und</h1>
          <p>500 Gr<br />
            $3.200 <br />
            Gramo a $ 6,40</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>
      <div class="container">
        <div class="wrapper">
          <div class="banner-image6"> </div>
          <h1>Aguacate Cocktail x Und</h1>
          <p>500 Gr<br />
            $3.600<br />
            Gramo a $ 7,20</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image7"> </div>
          <h1>Aguacate Fujikawa x unidad</h1>
          <p>125 Gr<br />
            $6.650<br />
            Gramo a $ 53,20</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image8"> </div>
          <h1>Aguacate Naval x unidad</h1>
          <p>550 Gr<br />
            $10.150<br />
            Gramo a $ 18,45</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image9"> </div>
          <h1>Aguacate Opa x unidad</h1>
          <p>700 Gr<br />
            $13.000<br />
            Gramo a $ 53,20</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image10"> </div>
          <h1>Aguacate Semil 34 x unidad</h1>
          <p>1.5 Kg<br />
            $5.000<br />
            Gramo a $ 3,33</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

      <div class="container">
        <div class="wrapper">
          <div class="banner-image11"> </div>
          <h1>Piña x Unidad</h1>
          <p>1.4 Kg<br />
            $9.150<br />
            Gramo a $ 6,54</p>
        </div>
        <div class="button-wrapper">
          <button class="btn fill">AGREGAR AL CARRITO</button>
        </div>
      </div>

    </section>
  </main>


</body>

</html>