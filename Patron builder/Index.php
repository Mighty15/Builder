 <!DOCTYPE html>
<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <link rel="stylesheet" href="index.css">
</head>

<body>
  
<nav class="navbar navbar-expand-sm bg-light navbar-light">
  <div class="container-fluid">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link active" href="#"><img src="samsung.png "></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Inicio</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Tienda online</a>
      </li>
    </ul>
  </div>
</nav>

<div class="row">
  <div class="col">
  <div class="Cont1">

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Seleccione tu smartphone: <select name="modelo">
    <option>Galaxy Note 10</option>
    <option> Galaxy M31</option>
    </select>
    <br>
   <input type="submit">
</form>
<br>
<!-- Carousel -->
<div id="demo" class="carousel slide" data-bs-ride="carousel">

  <!-- Indicators/dots -->
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
    <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
  </div>

  <!-- The slideshow/carousel -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="b1.jpg" alt="Los Angeles" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="b2.jpg" alt="Chicago" class="d-block w-100">
    </div>
    <div class="carousel-item">
      <img src="b3.jpg" alt="New York" class="d-block w-100">
    </div>
  </div>

  <!-- Left and right controls/icons -->
  <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>
</div>
</div>

<div class="col">
<div class="cont2">
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    require "Clases.php";
    $modelo = $_POST['modelo']; 
    if ($modelo=="Galaxy M31") {
        $phonedir= new PhoneDirector();

        $phonedir->phoneBuilder= new GalaxyM31();
        
        $phonedir->constructPhone();
        
        $phone= $phonedir->getPhone();
        
        echo $phone;
    } else {
        $phonedir= new PhoneDirector();

        $phonedir->phoneBuilder= new GalaxyNote10();
        
        $phonedir->constructPhone();
        
        $phone= $phonedir->getPhone();
        
        echo $phone;
    }
}
?>
</div>
</div>
</div>
</html>