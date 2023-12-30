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
    <h1 class= "text-center" style="color: red;" >MEDIA DAS NOTAS</h1>
    <label for="" class="form-label">FORNEÇA A PRIMEIRA NOTA </label>
    <input type= "number" name ="numero[]" class="form-control"  value ="<?=$_POST ['numero[]'] ?? null?>">
    <br>
    <label for="" class="form-label">FORNEÇA A SEGUNDA NOTA</label>
    <input type= "number" name ="numero[]" class="form-control"  value ="<?=$_POST ['numero[]'] ?? null?>">
    <br>
    <label for="" class="form-label">FORNEÇA A TERCEIRA NOTA</label>
    <input type= "number" name ="numero[]" class="form-control"  value ="<?=$_POST ['numero[]'] ?? null?>">
    <br>
    <label for="" class="form-label">FORNEÇA A QUARTA NOTA</label>
    <input type= "number" name ="numero[]" class="form-control"  value ="<?=$_POST ['numero[]'] ?? null?>">
    <br>
    <div class="row justify-content-md-center">
            <div class="col-md-auto">
            <a href="" class="btn btn-outline-secondary btn-lg  ">LIMPAR</a>
            <button class="btn btn-outline-success btn-lg  ">ENVIAR</button>  
            </div>
        </div>
    <br>
    </form> 
    <br><br>
    <?php

        $numeros = filter_input(INPUT_POST, "numero", FILTER_SANITIZE_NUMBER_INT, FILTER_FORCE_ARRAY);

        echo "<div class='alert alert-primary'>CERTIFIQUE-SE DE PREENCHER TODOS OS CAMPOS !!</div>";    
           
        for ($index = 0; $index < count($numeros); $index++){ 
            echo "<div class='alert alert-primary'>1ª NOTA: $numeros[$index]</div>"; 
           if($index =1){
            echo "<div class='alert alert-primary'>2ª NOTA: $numeros[$index]</div>"; 
           }
           if($index =2){
            echo "<div class='alert alert-primary'>3ª NOTA: $numeros[$index]</div>"; 
           }
           if($index =3){
            echo "<div class='alert alert-primary'>4ª NOTA: $numeros[$index]</div>"; 
           }
          
            
          } 
          $media =($numeros[0] + $numeros[1] + $numeros[2] + $numeros[3])/4; 
          echo "<div class='alert alert-success'> MEDIA DAS NOTAS: $media</div>"; 
          
    ?>
    
</body>
</html>