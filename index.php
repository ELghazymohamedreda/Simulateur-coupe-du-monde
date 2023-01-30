<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Prédicteur</title>
</head>
<body>
<nav class="navbar  mb-5">
  <div class="container-fluid">
    <a class="navbar-brand">Prédicteur</a>
    <form class="d-flex" role="search">
      <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-secondary " type="submit">Search</button>
    </form>
  </div>
</nav>
<form action="">
<div class="container cont mt-5" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 1</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/belgium.png" alt="">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text"   name="c">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="d">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="img/canada.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 2</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/croatie.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIA</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text"   name="b">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="a">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">MOROCCO</h4>
            <img src="img/maroc.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 3</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/croatie.png" alt=""> 
            <h4 class="d-flex align-items-center">CROATIA</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text"  name="f">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="h">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="img/canada.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 4</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/maroc.png" alt=""> 
            <h4 class="d-flex align-items-center">MOROCCO</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text"   name="e">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="g">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
            <img src="img/belgium.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 5</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/maroc.png" alt=""> 
            <h4 class="d-flex align-items-center">MOROCCO</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text"   name="i">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="k">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CANADA</h4>
            <img src="img/canada.png" alt="" >
        </div>
    </div>
</div>
<div class="container cont" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 6</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/belgium.png" alt="">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text"   name="l">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="j">
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <h4 class="d-flex align-items-center">CROATIA</h4>
            <img src="img/croatie.png" alt="" >
        </div>
    </div>
</div>

<input id="btn1" type="submit" name='submit' class="d-grid gap-2 col-6 mx-auto" value="Ajouter">

</form>


<?php
    if ( isset( $_GET['submit'] ) ) {
    //récupérer les données du formulaire en utilisant la valeur des attributs name comme clé 
    $maro = $_GET['a']; 
    $croi = $_GET['b']; 
    $belg = $_GET['c']; 
    $cana = $_GET['d']; 
    $maro2 = $_GET['e']; 
    $croi2 = $_GET['f']; 
    $belg2 = $_GET['g']; 
    $cana2 = $_GET['h']; 
    $maro3 = $_GET['i']; 
    $croi3 = $_GET['j']; 
    $cana3 = $_GET['k']; 
    $belg3 = $_GET['l'];


    //counter
    $point = array("MAROC" => 0, "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0); 
    $matches = array("MAROC" => 0, "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $gagnant = array('MAROC' => 0, 'CROATIE' => 0 , 'CANADA' => 0 , 'BELQIQUE' => 0);
    $null = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $defaite = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goalfor = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);
    $goalsConceded = array("MAROC" => 0 , "CROATIE" => 0, "CANADA" => 0, "BELQIQUE" => 0);

    //ajoute point selon compteur par if
    if($maro!="" && $croi!=""){

        $matches["MAROC"] += 1;
        $matches["CROATIE"] += 1;
        $goalfor["MAROC"] += $maro;
        $goalfor["CROATIE"] += $croi;
        $goalsConceded["MAROC"] += $croi;
        $goalsConceded["CROATIE"] += $maro;

        if($maro > $croi ){
            $point["MAROC"] += 3;
            $gagnant["MAROC"] += 1;
            $defaite["CROATIE"] += 1;

        }
        elseif ($maro < $croi ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["MAROC"] += 1;

        }
        else {
            $point["MAROC"] += 1;
            $point["CROATIE"] += 1;
            $null["MAROC"] += 1;
            $null["CROATIE"] += 1;

        }
    }
    
    if($belg!="" && $cana!=""){

        $matches["CANADA"] += 1;
        $matches["BELQIQUE"] += 1;
        $goalfor["BELQIQUE"] += $belg;
        $goalfor["CANADA"] += $cana;
        $goalsConceded["BELQIQUE"] += $cana;
        $goalsConceded["CANADA"] += $belg;

        if($belg > $cana ){
            $point["BELQIQUE"] += 3;
            $gagnant["BELQIQUE"] += 1;
            $defaite["CANADA"] += 1;
            
        }
        elseif ($belg < $cana ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["BELQIQUE"] += 1;
        }
        else {
            $point["BELQIQUE"] += 1;
            $point["CANADA"] += 1;
            $null["BELQIQUE"] += 1;
            $null["CANADA"] += 1;
        }
    }


    if($maro2!="" && $belg2!=""){

        $matches["MAROC"] += 1;
        $matches["BELQIQUE"] += 1;
        $goalfor["MAROC"] += $maro2;
        $goalfor["BELQIQUE"] += $belg2;
        $goalsConceded["MAROC"] += $belg2;
        $goalsConceded["BELQIQUE"] += $maro2;
        

        if($maro2 > $belg2 ){
            $point["MAROC"] += 3;
            $gagnant["MAROC"] += 1;
            $defaite["BELQIQUE"] += 1;

        }
        elseif ($maro2 < $belg2 ){
            $point["BELQIQUE"] += 3;
            $gagnant["BELQIQUE"] += 1;
            $defaite["MAROC"] += 1;

        }
        else {
            $point["MAROC"] += 1;
            $point["BELQIQUE"] += 1;
            $null["MAROC"] += 1;
            $null["BELQIQUE"] += 1;

        }
    }
    
    if($croi2!="" && $cana2!=""){

        $matches["CANADA"] += 1;
        $matches["CROATIE"] += 1;
        $goalfor["CROATIE"] += $croi2;
        $goalfor["CANADA"] += $cana2;
        $goalsConceded["CROATIE"] += $cana2;
        $goalsConceded["CANADA"] += $croi2;

        if($croi2 > $cana2 ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["CANADA"] += 1;
        }
        elseif ($croi2 < $cana2 ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["CROATIE"] += 1;
            
        }
        else {
            $point["CROATIE"] += 1;
            $point["CANADA"] += 1;
            $null["CROATIE"] += 1;
            $null["CANADA"] += 1;
        }
    }

    if($maro3!="" && $cana3!=""){

        $matches["MAROC"] += 1;
        $matches["CANADA"] += 1;
        $goalfor["MAROC"] += $maro3;
        $goalfor["CANADA"] += $cana3;
        $goalsConceded["MAROC"] += $cana3;
        $goalsConceded["CANADA"] += $maro3;

        if($maro3 > $cana3 ){
            $point["MAROC"] += 3;
            $gagnant["MAROC"] += 1;
            $defaite["CANADA"] += 1;

        }
        elseif ($maro3 < $cana3 ){
            $point["CANADA"] += 3;
            $gagnant["CANADA"] += 1;
            $defaite["MAROC"] += 1;

        }
        else {
            $point["MAROC"] += 1;
            $point["CANADA"] += 1;
            $null["MAROC"] += 1;
            $null["CANADA"] += 1;

        }
    }
    
    if($belg3!="" && $croi3!=""){

        $matches["CROATIE"] += 1;
        $matches["BELQIQUE"] += 1;
        $goalfor["BELQIQUE"] += $belg3;
        $goalfor["CROATIE"] += $croi3;
        $goalsConceded["BELQIQUE"] += $croi3;
        $goalsConceded["CROATIE"] += $belg3;

        if($belg3 > $croi3 ){
            $point["BELQIQUE"] += 3;
            $gagnant["BELQIQUE"] += 1;
            $defaite["CROATIE"] += 1;
        }
        elseif ($belg3 < $croi3 ){
            $point["CROATIE"] += 3;
            $gagnant["CROATIE"] += 1;
            $defaite["BELQIQUE"] += 1;
        }
        else {
            $point["BELQIQUE"] += 1;
            $point["CROATIE"] += 1;
            $null["BELQIQUE"] += 1;
            $null["CROATIE"] += 1;
        }
    }

    //ceux compteur final en variables 
    $Mmat = $matches["MAROC"] ;
    $CRmat = $matches["CROATIE"] ;
    $CAmat = $matches["CANADA"] ;
    $Bmat = $matches["BELQIQUE"] ;
    
    //ceux compteur final en variables 
    $Mpts =  $point["MAROC"];
    $CRpts =  $point["CROATIE"];
    $CNpts =  $point["CANADA"];
    $Bpts =  $point["BELQIQUE"];

    //ceux compteur final en variables 
    $Mgan =  $gagnant["MAROC"];
    $CRgan =  $gagnant["CROATIE"];
    $CNgan =  $gagnant["CANADA"];
    $Bgan=  $gagnant["BELQIQUE"];

    //ceux compteur final en variables
    $Mnul =  $null["MAROC"];
    $CRnul = $null["CROATIE"];
    $CNnul = $null["CANADA"];
    $Bnul =  $null["BELQIQUE"];

    //ceux compteur final en variables
    $Mdef =  $defaite["MAROC"];
    $CRdef = $defaite["CROATIE"];
    $CNdef = $defaite["CANADA"];
    $Bdef =  $defaite["BELQIQUE"]; 

    //ceux compteur final en variables
    $Mgoal =  $goalfor["MAROC"];
    $CRgoal = $goalfor["CROATIE"];
    $CNgoal = $goalfor["CANADA"];
    $Bgoal =  $goalfor["BELQIQUE"];

    //ceux compteur final en variables
    $Mgoals =  $goalsConceded["MAROC"];
    $CRgoals = $goalsConceded["CROATIE"];
    $CNgoals = $goalsConceded["CANADA"];
    $Bgoals =  $goalsConceded["BELQIQUE"];



    //ceux compteur final en variables 
    $diffEQ1 = $Mgoal - $Mgoals ;
    $diffEQ2 = $CRgoal - $CRgoals ;
    $diffEQ3 = $CNgoal - $CNgoals ;
    $diffEQ4 = $Bgoal - $Bgoals ;

    echo "
    <div class='container cont pb-0 pt-3' id='divfor'>
    <table class='table table-bordered border-primary border border-dark'>
    <tr>
        <th>Selección</th>
        <th>PTS.</th>
        <th>PAR.</th>
        <th>GAN.</th>
        <th>EMP.</th>
        <th>PER.</th>
        <th>G.F.</th>
        <th>G.C.</th>
        <th>+/-</th>
    </tr>
    <tr>
        <td>MOROCCO</td>
        <td>$Mpts</td>
        <td>$Mmat</td>
        <td>$Mgan</td>
        <td>$Mnul</td>
        <td>$Mdef</td>
        <td>$Mgoal</td>
        <td>$Mgoals</td>
        <td>$diffEQ1</td>

    </tr>
    <tr>
        <td>CROATIA</td>
        <td>$CRpts</td>
        <td>$CRmat</td>
        <td>$CRgan</td>
        <td>$CRnul</td>
        <td>$CRdef</td>
        <td>$CRgoal</td>
        <td>$CRgoals</td>
        <td>$diffEQ2</td>
        
    </tr>
    <tr>
        <td>CANADA</td>
        <td>$CNpts</td>
        <td>$CAmat</td>
        <td>$CNgan</td>
        <td>$CNnul</td>
        <td>$CNdef</td>
        <td>$CNgoal</td>
        <td>$CNgoals</td>
        <td>$diffEQ3</td>
    </tr>
    <tr>
        <td>BELGIUM</td>
        <td>$Bpts</td>
        <td>$Bmat</td>
        <td>$Bgan</td>
        <td>$Bnul</td>
        <td>$Bdef</td>
        <td>$Bgoal</td>
        <td>$Bgoals</td>
        <td>$diffEQ4</td>
    </tr>
    </table>
    </div>
    " ;
}

?>
</body>
</html>


