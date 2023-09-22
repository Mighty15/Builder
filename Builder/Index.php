<!DOCTYPE html>
<html>
<body>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
   Seleccione tu smartphone: <select name="modelo">
    <option>Galaxy Note 10</option>
    <option> Galaxy M31</option>
    </select>
   <input type="submit">
</form>


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
