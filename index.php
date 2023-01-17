<?php
class Car {
    // Properties (variables)
    public $Équipe;
    public $Pts;
    public $Par;
    public $Gan;
    public $EMP;
    public $PER;
    public $GF;
    public $GC;
    public $GP;
    
    // Constructor method
    public function __construct($Équipe, $Pts, $Par, $Gan, $EMP, $PER, $GF, $GC, $GP) {
        $this->Équipe = $Équipe;
        $this->Pts = $Pts;
        $this->Par = $Par;
        $this->Gan = $Gan;
        $this->EMP = $EMP;
        $this->PER = $PER;
        $this->GF = $GF;
        $this->GC = $GC;
        $this->GP = $GP;
    }


}

// Create an object from the class and passing the parameters to the constructor
$car1 = new Car("Maroc", "0", 0, 0, 0, 0, 0, 0, 0);
$car2 = new Car("Canada", "0", 0, 0, 0, 0, 0, 0, 0);
$car3 = new Car("Croatie", "0", 0, 0, 0, 0, 0, 0, 0);
$car4 = new Car("Belgique", "0", 0, 0, 0, 0, 0, 0, 0);

// Create an array of the objects 
$cars = array($car1, $car2, $car3, $car4);

// Start the HTML table
echo "<table border='1'>";
echo "<tr><th>Équipe</th><th>Pts</th><th>Par</th><th>Gan</th><th>EMP</th><th>PER</th><th>G.F.</th><th>G.C.</th><th>+/-</tr>";

// Loop through the array of objects and display their properties in the table
foreach ($cars as $car) {
    echo "<tr>";
    echo "<td>" . $car->Équipe . "</td>";
    echo "<td>" . $car->Pts . "</td>";
    echo "<td>" . $car->Par . "</td>";
    echo "<td>" . $car->Gan . "</td>";
    echo "<td>" . $car->EMP . "</td>";
    echo "<td>" . $car->PER . "</td>";
    echo "<td>" . $car->GF . "</td>";
    echo "<td>" . $car->GC . "</td>";
    echo "<td>" . $car->GP . "</td>";
    echo "</tr>"; 
}

// End the HTML table
echo "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="row ">
        <h2>Match</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/belgium.png" alt="">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text" name="belgiga-1"  value="">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text" name="canada-1" id="">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="img/canada.png" alt="" >
        </div>
    </div>
</div>
<div class="row ">
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/croatie.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIE</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text" name="belgiga-1"  value="">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text" name="canada-1" id="">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">MAROC</h4>
            <img src="img/maroc.png" alt="" >
        </div>
</div>
<div class="row ">
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/croatie.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIE</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text" name="belgiga-1"  value="">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text" name="canada-1" id="">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="img/canada.png" alt="" >
        </div>
</div>
<div class="row ">
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/maroc.png" alt=""> 
            <h4 class="d-flex align-items-center">MAROC</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text" name="belgiga-1"  value="">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text" name="canada-1" id="">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
            <img src="img/belgium.png" alt="" >
        </div>
</div>
<div class="row ">
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/maroc.png" alt=""> 
            <h4 class="d-flex align-items-center">MAROC</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text" name="belgiga-1"  value="">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text" name="canada-1" id="">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="img/canada.png" alt="" >
        </div>
</div>
<div class="row ">
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/belgium.png" alt="">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text" name="belgiga-1"  value="">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text" name="canada-1" id="">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CROATIE</h4>
            <img src="img/croatie.png" alt="" >
        </div>
    </div>
</div>
</body>
</html>