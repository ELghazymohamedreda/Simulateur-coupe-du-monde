
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
<div class="container" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 1</h2>
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
<div class="container" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 2</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/croatie.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIA</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text" name="belgiga-1"  value="">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text" name="canada-1" id="">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">MOROCCO</h4>
            <img src="img/maroc.png" alt="" >
        </div>
    </div>
</div>
<div class="container" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 3</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/croatie.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIA</h4>
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
<div class="container" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 4</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/maroc.png" alt=""> 
            <h4 class="d-flex align-items-center">MOROCCO</h4>
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
</div>
<div class="container" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 5</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/maroc.png" alt=""> 
            <h4 class="d-flex align-items-center">MOROCCO</h4>
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
<div class="container" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 6</h2>
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
            <h4 class="d-flex align-items-center">CROATIA</h4>
            <img src="img/croatie.png" alt="" >
        </div>
    </div>
</div>
<?php
class Car {
    // Propriétés (variables)
    public $Équipe;
    public $Pts;
    public $Par;
    public $Gan;
    public $EMP;
    public $PER;
    public $GF;
    public $GC;
    public $GP;
    
    // Méthode constructeur
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

// Créer un objet à partir de la classe et transmettre les paramètres au constructeur
$car1 = new Car("Maroc", "0", 0, 0, 0, 0, 0, 0, 0);
$car2 = new Car("Canada", "0", 0, 0, 0, 0, 0, 0, 0);
$car3 = new Car("Croatie", "0", 0, 0, 0, 0, 0, 0, 0);
$car4 = new Car("Belgique", "0", 0, 0, 0, 0, 0, 0, 0);

// Créer un tableau des objets 
$cars = array($car1, $car2, $car3, $car4);


// Parcourez le tableau d'objets et affichez leurs propriétés dans le tableau
echo "<table class='table' id='table'>
        <tr>
          <th scope='col'>Selection</th>
          <th scope='col'>Point</th>
          <th scope='col'>Par</th>
          <th scope='col'>Gan</th>
          <th scope='col'>Emp</th>
          <th scope='col'>Per</th>
          <th scope='col'>GF</th>
          <th scope='col'>GC</th>
          <th scope='col'>DEF</th>
        </tr>";

        foreach($cars as $car){
            echo "<tr>
            <td> $car->Équipe . </td>
            <td> $car->Pts . </td>
            <td> $car->Par . </td>
            <td> $car->Gan . </td>
            <td> $car->EMP . </td>
            <td> $car->PER . </td>
            <td> $car->GF . </td>
            <td> $car->GC . </td>
            <td> $car->GP . </td>
            </tr>";

            
        }   
        echo "</table>";
        // Terminer le tableau HTML          

?>
</body>
</html>


