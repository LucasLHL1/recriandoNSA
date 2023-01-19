<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSA - Online</title>
    <link rel="stylesheet" href="estilizacao.css">
</head>

<body>
    <center>
        <div class="">
            <fieldset class="bombaIcoGrande">
                <legend>
                    <img src="imagens/bomba.png" onClick="myFunction()" class="bombaIco" alt="">
                </legend>
                <h2>NSA - ONLINE</h2>

                <div class="bordaForm">


                    <form action="paginaAcesso.php" method="POST" class="formulario">


                        <label for="seletor">Entrar como:</label>
                        <select name="seletor" id="seletor" required>
                            <option value="aluno">ALUNO</option>
                            <option value="etec">ETEC</option>
                            <option value="professor">PROFESSOR</option>
                            <option value="responsavel">RESPONSÁVEL</option>
                            <option value="supervisao">SUPERVISÃO</option>
                            <option value="monitoramento">MONITORAMENTO</option>
                        </select>
                        <label for="codigoEtec">Código da Etec:</label>
                        <input type="text" name="codigoEtec" id="codigoEtec" class="codigoEtec" required>
                        <img src="imagens/interrogacao.png" class="interrogacaoIco" alt=""><br>
                        <label for="rm">RM:</label>
                        <input type="text" name="rm" id="rm" class="rmUsuario" required><br>
                        <label for="senhaAcesso"> Senha do NSA:</label>
                        <input type="password" name="senhaAcesso" id="senhaAcesso" class="senhaUsuario" required> <br>
                        <br>
                        <br>
                        <a href="#">
                            <p> Solicitar nova senha</p>
                        </a>
                        <a href="#">Baixe os aplicativos para Smartphone</a>
                        <input type="submit" name="enviar" id="enviar" value="ENTRAR">

                    </form>
                </div>
        </div>
        </legend>
        </fieldset>
        </div>
        <p class="direitosAutorais">Sistema NSA - © 2008 - 2022 - Todos os direitos reservados</p>
    </center>







</body>

</html>