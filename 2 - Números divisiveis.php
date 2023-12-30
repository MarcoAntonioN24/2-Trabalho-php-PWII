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
    <h1 class= "text-center" style="color: red;" >NÚMEROS DIVISÍVEIS</h1>
    <br>
    <label for="" class="form-label">Forneça o valor inicial </label>
    <input type= "number" name ="numeroini" class="form-control"  value ="<?=$_POST ['numeroini'] ?? null?>">
    <br>
    <label for="" class="form-label">Forneça o valor final</label>
    <input type= "number" name ="numerofin" class="form-control"  value ="<?=$_POST ['numerofin'] ?? null?>">
    <br>
    <label for="" class="form-label">Forneça o divisor</label>
    <input type= "number" name ="divi" class="form-control"  value ="<?=$_POST ['divi'] ?? null?>">

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
       $numini = filter_input (INPUT_POST,"numeroini",FILTER_SANITIZE_NUMBER_INT);
       $numfin = filter_input (INPUT_POST,"numerofin",FILTER_SANITIZE_NUMBER_INT);
       $numdivi = filter_input (INPUT_POST,"divi",FILTER_SANITIZE_NUMBER_INT);

       if(strlen(trim($numini)) == 0 || strlen(trim($numfin)) == 0 || strlen(trim($numdivi)) == 0 ){
        echo "<div class='alert alert-primary'>CERTIFIQUE-SE DE PREENCHER TODOS OS CAMPOS !!</div>";
        
       }else if($numini >= $numfin || $numdivi <2){ 
            echo "<div class='alert alert-danger'>VALOR INICIAL NÃO PODE SER IGUAL O VALOR FINAL E DIVISOR NÃO PODE SER 1 OU 0 !!</div>";    
     
       }else{ 
           $quant=0;
           ?>
           <ul class="list-group">
           <?php
           for($cont = $numini; $cont<=$numfin;$cont++){
           
            $restvid=0;
            if( $cont % $numdivi == $restvid ){
                ?>
                <li class="list-group-item-info list-group-item active" aria-current="true">VALOR ATUAL = <?=$cont?></li>
                <?php
                $quant+=1;
            }           
            else{
                ?>
                <li class="list-group-item list-group-item-info">VALOR ATUAL = <?=$cont?></li>
                <?php
            }        
           }       
            ?> 
            </ul>
            <?php
            echo "'<br>'<div class='alert alert-primary'>QUANTIDADE DE NÚMEROS DIVISÍVEIS POR $numdivi ENCONTRADOS = $quant </div>";
        
        }
    ?>




   
</div>
</body>
</html>
