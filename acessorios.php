<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <title>Acessorios</title>
</head>
<body>
    <div class="cabecalho">
            <img src="img/logo.png" alt="logo" width="150">
            <h1 id="nome-empresa">Repair Tech</h1>
            <a href="faleConosco.html" class="button-contato"><span>Fale conosco</span></a>
    </div>
    <?php
        if(isset($_GET['id'])){
            if($_GET['id'] == "100"){
                echo "<h1>Itens do Notebook</h1>";
            }elseif($_GET['id'] == "200"){
                echo "<h1>Itens do Celular</h1>";
            }elseif($_GET['id'] == "300"){
                echo "<h1>Itens do Computador</h1>";
            }
        }else{
            echo "<h1>Nenhum id foi passado</h1>";
        }
    ?>
   
</body>
</html>