<?php
session_start(); //Inicia a superglobal $SESSION
?>
<!--ESTRUTURA-->
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/contato.css">
    <link rel="icon" href="img/Doces_da_vovó_sem_marca-removebg-preview.png">
    <title>Contato</title>
</head>
<script src="js/validar.js"></script>
<body>
    <!--INICIO DO CONTAINER-->
    <div id="container">
        <!--CABEÇALHO-->
        <header id="cabecalho">
            <div id="logo"> <img src="img/Doces_da_vovó_sem_marca-removebg-preview.png" width="150" alt="Logo da empresa Doces da vovó" title="Logo da empresa Doces da vovó"></div>
            <div id="menu">
                <nav>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li><a href="#">Produtos</a></li>
                        <li><a href="#">Contato</a></li>
                    </ul>
                </nav>
            </div>
        </header>
        <!--FORMULARIO-->
        <form action="inserir.php" method="post" id="formulario" onsubmit="validar(event)">
            <fieldset>
                <legend>Envie-nos uma mensagem</legend>

                <p><label for="iNome">Nome:</label>
                <input type="text" id="iNome" name="nNome"></p>

                <p><label for="iEmail">Email:</label>
                <input type="email" id="iEmail" name="nEmail"></p>

                <p id="textMensagem"><label for="iMensagem">Mensagem:</label>
                <textarea name="nMensagem" id="iMensagem" cols="50" rows="7"></textarea></p>

                <input type="submit" id="iBotao" value="Enviar">

                <!--MENSAGEM ENVIADA-->
                <?php
                if(isset($_SESSION['mensagem'])){ //verifica se exite um valor na $SESSION
                    echo'<p id="resposta"> Mensagem: '.$_SESSION['mensagem'].'</p>'; //Mostra a mensagem como HTML

                    unset($_SESSION['mensagem']); //Limpa a $SESSION
                }
                ?>
                
            </fieldset>
        </form>
        <footer>Doces da Vovó &copy; 2025</footer>
    </div>
</body>
</html>