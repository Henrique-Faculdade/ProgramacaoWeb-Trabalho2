<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/alerta.css">
    <title>Document</title>
</head>
<body>
    <div class="alerta">
    
        <h1> 
        <img src="img/confirmar.png"height="200">
            <?php 
                if($_POST['nome'] && $_POST['telefone'] && $_POST['email'] && $_POST['observacao']){
                    echo "<u>".$_POST['nome']."</u>  seus dados foram cadastrados com sucesso!" ;
                   
                }else{
                    header('Location: faleConosco.html');
                }
            ?> 
        </h1>  
    </div>
</body>
</html>