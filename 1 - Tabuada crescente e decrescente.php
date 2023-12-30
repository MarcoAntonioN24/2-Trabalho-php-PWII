<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
    <title>Document</title>
</head>

<body style="background-color:lightgrey;">
    <br><br>
    <div class="container">
    <form action="" method="post">
    <br><br>
    <h1 class="text-center" style="color: red; ">TABUADA CRESCENTE E DESCRESCENTE</h1>
    <br>
    <label for="" class="form-label" >Forneça um número a ter sua tabuada calculada</label>
    <input type= "number" name ="numero1" class="form-control" value ="<?=$_POST ['numero1'] ?? null?>">
    <br>
    <label for="" class="form-label">Forneça o valor inicial da tabuada</label>
    <input type= "number" name ="numeroini" class="form-control"  value ="<?=$_POST ['numeroini'] ?? null?>">
    <br>
    <label for="" class="form-label">Forneça o valor final da tabuada</label>
    <input type= "number" name ="numerofin" class="form-control"  value ="<?=$_POST ['numerofin'] ?? null?>">

    <br>
        <div class="row justify-content-md-center">
            <div class="col-md-auto">
            <a href="" class="btn btn-outline-secondary btn-lg  ">LIMPAR</a>
            <button class="btn btn-outline-success btn-lg  ">ENVIAR</button>  
            </div>
        </div>
    <br>

    </form> 
    <?php
    $num1 = filter_input(INPUT_POST, "numero1", FILTER_SANITIZE_NUMBER_INT);
    $numini = filter_input(INPUT_POST, "numeroini", FILTER_SANITIZE_NUMBER_INT);
    $numfin = filter_input(INPUT_POST, "numerofin", FILTER_SANITIZE_NUMBER_INT);

    if ($num1 === NULL || $numini === NULL || $numfin === NULL) {
        echo "<div class='alert alert-primary'>CERTIFIQUE-SE DE PREENCHER TODOS OS CAMPOS !!</div>";
    } else if ($numini == $numfin) {
        echo "<div class='alert alert-danger'>VALOR INICIAL NÃO PODE SER IGUAL O VALOR FINAL !!</div>";      
    } else {
        if ($numini < $numfin) { 
            ?>
            <ul class="list-group">
            <?php
            /* TABUADA CRESCENTE */
            for ($resp = 0; $resp < $num1 * $numfin; $numini++) {
                $resp = $num1 * $numini;
                ?>
                <li class="list-group-item list-group-item-info"><?= $num1 ?> * <?= $numini ?> = <?= $resp ?></li>
                <?php       
            }           
            ?>
            </ul>
            <br><br>
            <?php
            
        }else{
            ?>
            <ul class="list-group">
            <?php
            /* TABUADA CRESCENTE */
            for ($resp = $num1 * $numini ; $resp > $num1 * $numfin; $numini-=1) {
                $resp = $num1 * $numini;
                ?>
                <li class="list-group-item list-group-item-info"><?= $num1 ?> * <?= $numini ?> = <?= $resp ?></li>
                <?php       
            }           
            ?>
            </ul>
            <?php

        }
        
        
    }
?>

<br><br>
   
</div>
</body>
</html>