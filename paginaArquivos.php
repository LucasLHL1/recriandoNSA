<?php

$valorRM = "99999";
$nome = "LUCAS HENRIQUE LOPES";
$ra = "999999999-9/SP";
$status = "CURSANDO";
$turma = "TURMA A";
$semestre = "1° SEMESTRE";
$ano = "2022";
$modulo = "2° MÓDULO";
$grupo = "GRUPO B";
$email = "exemplo.email@etec.sp.gov.br";


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NSA - Online - Arquivos</title>
    <link rel="stylesheet" href="estilizacao.css">
</head>

<body>
    <center>
        <img id="ctl00_imgTimbre" src="imagens/031.bmp"
            style="height:108px;width:132px;border-width:0px; position: absolute;">
        <img src="imagens/logocps2011.png" class="cps" alt="">
    </center>
    <div class="menu">
        <ul class="listaMenu">
            <li class="listaMenuLi"><a href="paginaAcesso.php">INÍCIO</a></li>
            <div class="dropdown">
                <li class="testeDownloadsCor">DOWNLOADS</li>
                <div class="dropdown-content">
                    <a href="paginaArquivos.php">ARQUIVOS</a>
                    <a href="#">MATERIAL DIDÁTICO</a>
                    <a href="#">POAH</a>
                </div>
            </div>
            <li>DIÁRIOS</li>
            <li>MENÇÕES</li>
            <li>PROFESSORES</li>
            <li class="sugestoes"><a href="" class="sugestoes">SUGESTÕES OU RECLAMAÇÕES</a></li>
            <li>CADASTRO</li>
            <li>DECLARAÇÕES</li>
            <li>REMATRÍCULA</li>
            <li>PESQUISA</li>
            <li class="botaoSair">SAIR</li>
        </ul>
    </div>
    <div class="conteudoSite">

        <div class=identificacaoAluno>

            <center>
                <p class="identificacaoAlunoo"> Identificação do Aluno</p>
                <img src="imagens/fotoIdentificacao.png" class="fotoIdentificacao" alt="">
                <input type="submit" value="ALTERAR FOTO" class="alterarFoto">
            </center>
            <ul class="identificacaoAlunoo">
                <li>
                    <span class="valorRM"> <strong> RM: </strong><span style="font-size:12px; margin-left:3px">
                            <?php echo $valorRM ?>
                        </span></span>
                </li>
                <li>
                    <span class="nomeIdentificador"> <strong> Nome:</strong><span
                            style="font-size:12px; margin-left:3px"><?php echo $nome ?></span> </span>
                </li>
                <li>
                    <span class="valorRA"><strong>RA SED:</strong><span style="margin-left:3px">
                            <?php echo $ra ?>
                        </span></span>
                </li>
                <li>
                    <span><strong>Habilitação:</strong></span>
                    <select name="curso" id="curso" class="curso">
                        <option value="desenvolvimentoSistemas" class="desenvolvimentoSistemas">TÉCNICO EM
                            DESENVOLVIMENTO DE SISTEMAS</option>
                    </select>
                </li>
                <li>
                    <span><strong>Sit. Matrícula:</strong>
                        <?php echo $status ?>
                    </span>
                </li>
                <li>
                    <span><strong>Turma:</strong><?php echo $turma ?></span>
                </li>
                <li>
                    <span><strong>Semestre OC:</strong>
                        <?php echo $semestre ?>
                    </span>
                </li>
                <li>
                    <span><strong>Ano OC:</strong> <?php echo $ano ?></span>
                </li>
                <li>
                    <span><strong>Módulo/Série:</strong>
                        <?php echo $modulo ?>
                    </span>
                </li>
                <li>
                    <span><strong>Grupo da Divisão:</strong>
                        <?php echo $grupo ?>
                    </span>
                </li>

            </ul>
        </div>

        <div class="conteudoDownloads">
            <div class="arrumaSpan">
                <span class="testee">DOWNLOADS </span>
            </div>
            <p class="regimentoComum"><a href="#">Regimento comum das Etecs</a></p>
            <img src="imagens/home.png" class="homeImagem" alt="">
            <div class="espacamentoTabela">
                <table class="tabelaArquivos" border="1">
                    <tr class="estilizacaoTr">
                        <th class="espacamentoTituloTabela">&nbsp;</th>
                        <th class="espacamentoTituloTabela">Nome da Pasta ou Arquivo</th>
                        <th class="espacamentoTituloTabela">Tipo</th>
                        <th class="espacamentoTituloTabela">Tamanho</th>
                        <th class="espacamentoTituloTabela">Modificado em</th>
                    </tr>
                    <tr class="">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Visita Técnica</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td class="espacamentoTituloTabela"></td>
                        <td>18/08/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Tcc</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>13/06/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Currículo 2022</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>09/05/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Calendário 2022</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Canvas</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Capacitação Design Thinking 12-09-2020</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Coaching Educacional</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">CONSELHO DE ESCOLA</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Coordenação - todos cursos</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Desafio Inova</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Direção</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Diretoria de Serviços</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Logo 2019</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/rar.png" alt=""></td>
                        <td class="paddingTabela"><a href="#">Modelo_OFICIO PATROCINIO - APM 2019.zip</a></td>
                        <td class="espacamentoTituloTabela">.zip</td>
                        <td class="paddingTabelaa">
                            <center> 106,17 KB</center>
                        </td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Oficina TCC</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Orientadora Educacional</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Pais e Responsáveis</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Palestras materiais</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Planos de Cursos</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">PPG - Plano Plurianual de Gestão</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Programa Aprendiz Pualista - 2022</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Programa de Estágio - 2022</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Repres de Turma</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                    <tr class="paddingTabela">
                        <td class="espacamentoTituloTabela"><img src="imagens/pasta.png" alt=""></td>
                        <td><a href="#">Secretaria Acadêmica</a></td>
                        <td class="espacamentoTituloTabela">Pasta</td>
                        <td></td>
                        <td>15/04/2022</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
    <div class="alinhaFooter">
        <div class="footer">
            Sistema NSA - © 2008 - 2022 - Todos os direitos reservados
        </div>
    </div>

</body>

</html>