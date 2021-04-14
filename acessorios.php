<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/default.css">
    <link rel="stylesheet" href="./css/nav.css">
    <link rel="stylesheet" href="./css/footer.css">
    <link rel="stylesheet" href="./css/acessorios.css">
    <title>Acessorios</title>
</head>
<body>
    <div class="cabecalho">
            <a href="index.html" class="button-orcamento"><span>Inicio</span></a>
            <img src="img/logo.png" alt="logo" width="150">
            <h1 id="nome-empresa">Repair Tech</h1>
            <a href="faleConosco.html" class="button-contato"><span>Fale conosco</span></a>
    </div>
    <?php if(isset($_GET['id'])): ?>
        <div class="imagens">
            <?php if($_GET['id'] == "100"):?>
                <img id="acessorio-1" src="./img/notebook/1.png" alt="fonte" height="200">
                <img id="acessorio-2" src="./img/notebook/2.png" alt="Base" height="200">
                <img id="acessorio-3" src="./img/notebook/3.png" alt="maleta" height="200">
                <h1 id="message">Fonte Notebook <br> R$ 100,00</h1>
                <h1 id="message">Base Notebook <br> R$ 150,00</h1>
                <h1 id="message">Maleta Dell Notebook <br> R$ 250,00 </h1>
            <?php endif; ?>

            <?php if($_GET['id'] == "200"): ?>
                <img id="acessorio-1" src="./img/celular/1.png" alt="Fone" height="200">
                <img id="acessorio-2" src="./img/celular/2.png" alt="Carregador" height="200">
                <img id="acessorio-3" src="./img/celular/3.png" alt="Pelicola" height="200">
                <h1 id="message">Fone Celular</h1>
                <h1 id="message">Carregador Celular</h1>
                <h1 id="message">Pelicola/Campinha Celular</h1>
            <?php endif; ?>

            <?php if($_GET['id'] == "300"): ?>
                <img id="acessorio-1" src="./img/computador/1.png" alt="Teclado/Mouse" height="200">
                <img id="acessorio-2" src="./img/computador/2.png" alt="Gabinete" height="200">
                <img id="acessorio-3" src="./img/computador/3.png" alt="Mouse Pad Razer" height="200">
                <h1 id="message">Teclado/Mouse</h1>
                <h1 id="message">Gabinete</h1>
                <h1 id="message">Mouse Pad Razer</h1>
            <?php endif; ?>
        </div>

    <?php endif; ?>
   
</body>
</html>