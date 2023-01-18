
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
<form action="">
<div class="container" id="divfor">
    <div class="row">
        <h2 class="mb-4 mt-4">PARTIDA 1</h2>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <img src="img/belgium.png" alt="">
            <h4 class="d-flex align-items-center">BELGIUM</h4>
        </div>
        <div class="col-sm-4 d-flex justify-content-evenly">
            <input type="text"   name="a">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="b">
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
            <input type="text"   name="c">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="d">
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
            <input type="text"  name="e">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="f">
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
            <input type="text"   name="g">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="h">
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
            <input type="text"   name="e">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="f">
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
            <input type="text"   name="g">
            <h3 class="d-flex align-items-center">vs</h3>
            <input type="text"  name="h">
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
    $maro3 = $_GET['e']; 
    $croi3 = $_GET['f']; 
    $cana3 = $_GET['g']; 
    $belg3 = $_GET['h'];


    //counter
    // $arrayName = array('' => , );
    $point = array("MAROCP" => 0, "CROATIEP" => 0, "CANADAP" => 0, "BELQIQUEP" => 0); 
    $matches = array("MAROCM" => 0, "CROATIEM" => 0, "CANADAM" => 0, "BELQIQUEM" => 0);
    $gagnant = array('MAROCG' => 0, 'CROATIEG' => 0 , 'CANADAG' => 0 , 'BELQIQUEG' => 0);
    $null = array("MAROCN" => 0 , "CROATIEN" => 0, "CANADAN" => 0, "BELQIQUEN" => 0);
    $defaite = array("MAROCD" => 0 , "CROATIED" => 0, "CANADAD" => 0, "BELQIQUED" => 0);

    //ajoute point selon compteur par if
    if($maro!="" && $croi!=""){

        $matches["MAROCM"] += 1;
        $matches["CROATIEM"] += 1;

        if($maro > $croi ){
            $point["MAROCP"] += 3;
            $gagnant["MAROCG"] += 1;
            $defaite["CROATIED"] += 1;

        }
        elseif ($maro < $croi ){
            $point["CROATIEP"] += 3;
            $gagnant["CROATIEG"] += 1;
            $defaite["MAROCGD"] += 1;

        }
        else {
            $point["MAROCP"] += 1;
            $point["CROATIEP"] += 1;
            $null["MAROCN"] += 1;
            $null["CROATIEN"] += 1;

        }
    }
    
    if($belg!="" && $cana!=""){

        $matches["CANADAM"] += 1;
        $matches["BELQIQUEM"] += 1;

        if($belg > $cana ){
            $point["BELQIQUEP"] += 3;
            $gagnant["BELQIQUEG"] += 1;
            $defaite["CANADAD"] += 1;
            
        }
        elseif ($belg < $cana ){
            $point["CANADAP"] += 3;
            $gagnant["CANADAG"] += 1;
            $defaite["BELQIQUED"] += 1;
        }
        else {
            $point["BELQIQUEP"] += 1;
            $point["CANADAP"] += 1;
            $null["BELQIQUEN"] += 1;
            $null["CANADAN"] += 1;
        }
    }


    if($maro2!="" && $croi2!=""){

        $matches["MAROCM"] += 1;
        $matches["CROATIEM"] += 1;

        if($maro2 > $croi2 ){
            $point["MAROCP"] += 3;
            $gagnant["MAROCG"] += 1;
            $defaite["CROATIED"] += 1;

        }
        elseif ($maro2 < $croi2 ){
            $point["CROATIEP"] += 3;
            $gagnant["CROATIEG"] += 1;
            $defaite["MAROCD"] += 1;

        }
        else {
            $point["MAROCP"] += 1;
            $point["CROATIEP"] += 1;
            $null["MAROCN"] += 1;
            $null["CROATIEN"] += 1;

        }
    }
    
    if($belg2!="" && $cana2!=""){

        $matches["CANADAM"] += 1;
        $matches["BELQIQUEM"] += 1;

        if($belg2 > $cana2 ){
            $point["BELQIQUEP"] += 3;
            $gagnant["BELQIQUEG"] += 1;
            $defaite["CANADAD"] += 1;
        }
        elseif ($belg2 < $cana2 ){
            $point["CANADAP"] += 3;
            $gagnant["CANADAG"] += 1;
            $defaite["BELQIQUED"] += 1;
            
        }
        else {
            $point["BELQIQUEP"] += 1;
            $point["CANADAP"] += 1;
            $null["BELQIQUEN"] += 1;
            $null["CANADAN"] += 1;
        }
    }

    if($maro3!="" && $croi3!=""){

        $matches["MAROCM"] += 1;
        $matches["CROATIEM"] += 1;

        if($maro3 > $croi3 ){
            $point["MAROCP"] += 3;
            $gagnant["MAROCG"] += 1;
            $defaite["CROATIED"] += 1;

        }
        elseif ($maro3 < $croi3 ){
            $point["CROATIEP"] += 3;
            $gagnant["CROATIEG"] += 1;
            $defaite["MAROCD"] += 1;

        }
        else {
            $point["MAROCP"] += 1;
            $point["CROATIEP"] += 1;
            $null["MAROCN"] += 1;
            $null["CROATIEN"] += 1;

        }
    }
    
    if($belg3!="" && $cana3!=""){

        $matches["CANADAM"] += 1;
        $matches["BELQIQUEM"] += 1;

        if($belg3 > $cana3 ){
            $point["BELQIQUEP"] += 3;
            $gagnant["BELQIQUEG"] += 1;
            $defaite["CANADAD"] += 1;
        }
        elseif ($belg3 < $cana3 ){
            $point["CANADAP"] += 3;
            $gagnant["CANADAG"] += 1;
            $defaite["BELQIQUED"] += 1;
        }
        else {
            $point["BELQIQUEP"] += 1;
            $point["CANADAP"] += 1;
            $null["BELQIQUEN"] += 1;
            $null["CANADAN"] += 1;
        }
    }

    //ceux compteur final en variables 
    $Mmat = $matches["MAROCM"] ;
    $CRmat = $matches["CROATIEM"] ;
    $CAmat = $matches["CANADAM"] ;
    $Bmat = $matches["BELQIQUEM"] ;
    
    //ceux compteur final en variables 
    $Mpts =  $point["MAROCP"];
    $CRpts =  $point["CROATIEP"];
    $CNpts =  $point["CANADAP"];
    $Bpts =  $point["BELQIQUEP"];

    //ceux compteur final en variables 
    $Mgan =  $gagnant["MAROCG"];
    $CRgan =  $gagnant["CROATIEG"];
    $CNgan =  $gagnant["CANADAG"];
    $Bgan=  $gagnant["BELQIQUEG"];

    //ceux compteur final en variables
    $Mnul =  $null["MAROCN"];
    $CRnul = $null["CROATIEN"];
    $CNnul = $null["CANADAN"];
    $Bnul =  $null["BELQIQUEN"];

    //ceux compteur final en variables
    $Mdef =  $defaite["MAROCD"];
    $CRdef = $defaite["CROATIED"];
    $CNdef = $defaite["CANADAD"];
    $Bdef =  $defaite["BELQIQUED"];

    echo "
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

    </tr>
    <tr>
        <td>BELGIUM</td>
        <td>$CRpts</td>
        <td>$CRmat</td>
        <td>$CRgan</td>
        <td>$CRnul</td>
        <td>$CRdef</td>
        
    </tr>
    <tr>
        <td>CANADA</td>
        <td>$CNpts</td>
        <td>$CAmat</td>
        <td>$CNgan</td>
        <td>$CNnul</td>
        <td>$CNdef</td>
    </tr>
    <tr>
        <td>CROATIA</td>
        <td>$Bpts</td>
        <td>$Bmat</td>
        <td>$Bgan</td>
        <td>$Bnul</td>
        <td>$Bdef</td>
    </tr>
    </table>
    " ;
}

?>
</body>
</html>


