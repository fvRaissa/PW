<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="css/style.css ">

</head>
<body>
    
  <h1 class="titulo">Cadastre seu Produto</h1>
    <div id="container">
        <form method="post" action="/produto-salvar">
            @csrf
            <input type="text" name="txtNome" class="caixa_txt" placeholder="Nome Produto">
            <br>
            <input type="text" name="txtDesc" class="caixa_txt" placeholder="Descrição">
            <br>
            <input type="text" name="valor" class="caixa_txt" placeholder="Valor">
            <br>
            <input type="text"  name="qts" class="caixa_msg" placeholder="Quantidade">
            <br>
            <button id="enviar">Enviar</button>
    
        </form>
    </div>


</body>
</html>