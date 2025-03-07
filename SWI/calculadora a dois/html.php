<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Formulário HTML</title>
    <meta charset="utf-8"/>
    <link rel="stylesheet" type="text/css" href="css.css">
    <?php 
    require_once('php.php'); 
    ?>
</head>
<body>
    
    <p> Digite valores pra realizar o calculo</p>
        
    <form action="" method="post">
        
        <div class="field">
            <label for="num1">Primeiro Número:</label>
            <input type="number" name="num1" class="num1" placeholder="Digite o 1º número *" required>
        </div>
        
        

        <div class="field">
            <label for="num2">Segundo Número:</label>
            <input type="number" name="num2" class="num2" placeholder="Digite o 2º número *" required>
        </div>

        <div class="field">
            <label for="result">Total da Soma:</label>
            <input type="text" name="total">
        </div>        
        
        <div class="button">
            <button name="soma">Somar</button>
        </div>
        <div class="button">
            <button name="menos" style="margin-left: 120px; margin-top: -35px;">Subtrair</button>
        </div>      
        <div class="button">
            <button name="mult" style="margin-top: 10px;">Multiplicar</button>
        </div>  
        <div class="button">
            <button name="div" style="margin-left: 120px; margin-top: -35px;">Divisão</button>
        </div>

    </form>
</body>

</html>

<?php

 $calc=new operador();

    if(isset($_POST['soma'])){

        $resultado;
        
        $resultado=$calc->somar($_POST['num1'], $_POST['num2']);

        echo $resultado;
    }
    if(isset($_POST['menos'])){

        $resultado;
        
        $resultado=$calc->sub($_POST['num1'], $_POST['num2']);

        echo $resultado;
    }
    if(isset($_POST['mult'])){

        $resultado;
        
        $resultado=$calc->mult($_POST['num1'], $_POST['num2']);

        echo $resultado;
    }
    if(isset($_POST['div'])){

        $resultado;
        
        $resultado=$calc->div($_POST['num1'], $_POST['num2']);

        echo $resultado;
    }



?>

