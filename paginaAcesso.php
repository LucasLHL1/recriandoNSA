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
    <title>NSA - Online - Aluno</title>
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
                <li>DOWNLOADS</li>
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

        <div class="projetoOffice365">
            <div class="blocoSeparacao">

                <div class="projetoOfficeFuncionando" style="">
                    <div class="testeAlinhamento">
                        <div class="textoProjetoOffice365"> <span class="">Projeto Office 365</span> </div>
                    </div>
                    <span class="">
                        <p class="emailInformado"> E-MAIL INSTITUCIONAL: <a href="">
                                <?php echo $email ?>
                        </p></a>
                    </span>
                    <button class="btnTrocaSenha">
                        Solicitar troca de senha
                    </button>
                    <p class="termosDeUso"> TERMO DE USO: <a href="#">clique aqui</a></p>
                    <div class="coloreFundoTeste">
                        <div class="coloreFundo">
                            <span>Para acessar seu e-mail institucional e outros benefícios: <a href="">clique
                                    aqui</a></span>
                        </div>
                    </div>
                </div>
                <div class="alinhaMensagens">
                    <div class="alinhadorMensagens">
                        <div>
                            Mensagens para o aluno
                        </div>
                    </div>
                    <div class="divMensagens">
                        <table class="caixaDeMensagens" border="">
                            <tr class="estilizacaoTr">
                                <th>&nbsp;</th>
                                <th>Data</th>
                                <th>Assunto</th>
                                <th>Remetente</th>
                            </tr>
                            <tr>
                                <td><img src="imagens/envelope.png" class="envelopeIco" alt=""></td>
                                <td>20/06/2022</td>
                                <td><a href="#">REMATRÍCULA</a></td>
                                <td>SECRETARIA</td>
                            </tr>
                            <tr>
                                <td><img src="imagens/envelope.png" class="envelopeIco" alt=""></td>
                                <td>13/06/2022</td>
                                <td><a href="#">REMATRÍCULA</a></td>
                                <td>SECRETARIA</td>
                            </tr>
                            <tr>
                                <td><img src="imagens/envelope.png" class="envelopeIco" alt=""></td>
                                <td>09/05/2022</td>
                                <td class="nomeProfessor"><a href="#">PROJETO DEVMENTHORS</a></td>
                                <td class="">ARNALDO</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="blocoSeparacao">
                <div class="alinhaNoticias">
                    NOTÍCIAS
                </div>
                <div class="noticias">
                    <table class="tabelaNoticias" border="">
                        <tr class="estilizacaoTr">
                            <th>Data</th>
                            <th>Assunto</th>
                        </tr>
                        <tr>
                            <td>08/09/2022</td>
                            <td><a href="#">VAGA APRENDIZ - ARANÃO TRANSPORTE 8.9.22</a></td>
                        </tr>
                        <tr>
                            <td>08/09/2022</td>
                            <td><a href="#">VAGA DE ESTÁGIO - ADM/LOG - UNIPAC 8.9.22</a></td>
                        </tr>
                        <tr>
                            <td>06/09/2022</td>
                            <td><a href="#">VAGA DE ESTÁGIO BE MERSION/MEGA EASY 6.9.22</a></td>
                        </tr>
                        <tr>
                            <td>06/09/2022</td>
                            <td><a href="#">VAGA DE ESTÁGIO MENIN ADM 6.9.22</a></td>
                        </tr>
                        <tr>
                            <td>06/09/2022</td>
                            <td><a href="#">VAGA DE ESTÁGIO MENIN CONT 6.9.22</a></td>
                        </tr>
                        <tr>
                            <td>31/08/2022</td>
                            <td><a href="#">VAGA DE ESTÁGIO - BELLINTANI ADV - 31/08/2022</a></td>
                        </tr>
                        <tr>
                            <td>02/08/2022</td>
                            <td><a href="#">AVISO DA BIBLIOTECA</a></td>
                        </tr>
                        <tr>
                            <td>29/04/2022</td>
                            <td><a href="#">CADASTRE-SE NO CIEE - VAGAS DE ESTÁGIO</a></td>
                        </tr>
                        <tr>
                            <td>11/04/2022</td>
                            <td><a href="#">DIVULGAÇÃO MENÇÕES (NOTAS)</a></td>
                        </tr>
                        <tr>
                            <td>03/02/2022</td>
                            <td><a href="#">APROVEITAMENTO DE ESTUDOS</a></td>
                        </tr>
                        <tr>
                            <td>11/02/2019</td>
                            <td><a href="#">SIGA NAS REDES SOCIAIS... ETEC ANTONIO DEVISATE</a></td>
                        </tr>
                        <tr>
                            <td>24/07/2017</td>
                            <td><a href="#">ACESSO WIFI APM DEVISATE-2017</a></td>
                        </tr>
                        <tr>
                            <td>07/06/2017</td>
                            <td><a href="#">PREZADO (A) ESTUDANTE ESTAGIÁRIO (A),</a></td>
                        </tr>
                        <tr>
                            <td>21/08/2015</td>
                            <td><a href="#">RECICLAETEC</a></td>
                        </tr>
                        <tr>
                            <td>29/06/2015</td>
                            <td><a href="#">INFORMAÇÕES RELEVANTES</a></td>
                        </tr>
                        <tr>
                            <td>21/06/2013</td>
                            <td><a href="#">APM PRECISA DE VOCE</a></td>
                        </tr>
                    </table>
                </div>
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