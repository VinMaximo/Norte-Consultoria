<?php include("../Template/header.php");
include("../../data/connection.php");
include("../Login/valida.php");
if (isset($_POST["action"])) {
} else {
?>
    <script>
        window.location = "../dispensa/listDispensa.php";
    </script>
<?php
}


$codigo = $_POST["codigo"];
$tipo = $_POST["tipo"];
$action = $_POST["action"];

$sql = "SELECT * FROM modalidade WHERE codigo_processo = '" . $codigo . "'";
$resultado = $connection->query($sql);
$modalidade = $resultado->fetch_assoc();



?>


<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modalidade</title>
</head>

<body>
    <br>
    <br>


    <div class="form">
        <form action="updateModalidade.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Modalidade</h3>

            <div class="buttons">

                <!--&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;-->
                <p align="right">
                <a href="../modalidade/listModalidade.php" class="btn btn-primary">Voltar </a>
                    <a href="#vencedores" class="btn btn-primary">Vencedores </a>
                    <a href="#aditivo" class="btn btn-primary">Aditivo</a>

                    <a href="#consideracoes" class="btn btn-primary">Considera????es</a>

                </p>

            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Id da modalidade</span>
                </div>

                <input type="number" name="modalidadeId" class="form-control input-sm" id="modalidadeId" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["id_modalidade"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exerc??cio</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["exercicio"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">N?? Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["num_processo"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"> Modalidade</span>
                </div>
                <select class="form-select" name="modalidade" id="modalidade">
                    
                    <?php

                    $sqlQuery = "SELECT * FROM tipo_modalidade ORDER BY modalidade";

                    $modalidadet = $connection->query($sqlQuery);

                    if ($modalidadet->num_rows > 0) {

                        while ($row = $modalidadet->fetch_assoc()) {
                            if ($modalidade["modalidade"] === $row["modalidade"]) {

                    ?>
                                <option value="<?php echo $row["modalidade"] ?>" selected>
                                    <?php echo $row["modalidade"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["modalidade"] ?>">

                                    <?php echo $row["modalidade"]  ?>
                                </option>
                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default"> N??mero </span>
                </div>
                <input type="number" name="numero" class="form-control" id="numero" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["numero"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <textarea name="txtObjeto" id="txtObjeto" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["objeto"]?> </textarea>
            </div>

            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Registro de pre??o?</span>
                </div>
                <select class="form-select" name="registro" id="registro">
                    <option value="-1" selected></option>
                    <?php

                    $sqlQuery = "SELECT * FROM registro ORDER BY registro";

                    $registro = $connection->query($sqlQuery);

                    if ($registro->num_rows > 0) {

                        while ($row = $registro->fetch_assoc()) {
                            if ($modalidade["registro"] === $row["registro"]) {

                    ?>
                                <option value="<?php echo $row["registro"] ?>" selected>
                                    <?php echo $row["registro"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["registro"] ?>">

                                    <?php echo $row["registro"]  ?>
                                </option>
                    <?php
                            }
                        }
                    }
                    ?>
                </select>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Categoria</span>
                </div>
                <select class="form-select" name="txtCategoria" id="txtCategoria">

                    <?php

                    $sqlQuery = "SELECT * FROM categoria ORDER BY categoria";

                    $categoria = $connection->query($sqlQuery);

                    if ($categoria->num_rows > 0) {

                        while ($row = $categoria->fetch_assoc()) {
                            if ($modalidade["categoria"] === $row["categoria"]) {

                    ?>
                                <option value="<?php echo $row["categoria"] ?>" selected>
                                    <?php echo $row["categoria"]  ?>
                                </option>
                            <?php
                            } else {
                            ?>
                                <option value="<?php echo $row["categoria"] ?>">

                                    <?php echo $row["categoria"]  ?>
                                </option>
                    <?php
                            }
                        }
                    }

                    ?>
                </select>
            </div>






            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data edital</span>
                </div>
                <input type="date" name="dateEdital" class="form-control" id="dateEdital" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_edital"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data entrega</span>
                </div>
                <input type="date" name="dateEntrega" class="form-control" id="dateEntrega" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_entrega"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data abertura</span>
                </div>
                <input type="date" name="dateAbertura" class="form-control" id="dateAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_abertura"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da sess??o</span>
                </div>
                <input type="date" name="datesess" class="form-control" id="datesess" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_sessao"] ?>">
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data portaria nomeando a comiss??o</span>
                </div>
                <input type="date" name="dateNomeacao" class="form-control" id="dateNomeacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_portaria"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicita????o de compras/servi??os</span>
                </div>
                <input type="date" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_solicitacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de pre??o estimativo (Or??amento)</span>
                </div>
                <input type="date" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_orcamento"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autoriza????o para a abertura do processo</span>
                </div>
                <input type="date" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_autorizacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autua????o</span>
                </div>
                <input type="date" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_autuacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <textarea name="txtEnquadramento" id="txtEnquadramento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["enquadramento"]?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data edital e seus anexos</span>
                </div>
                <input type="date" name="dateEditalEAnexos" class="form-control" id="dateEditalEAnexos" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_anexos"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato/ata reg. pre??os</span>
                </div>
                <textarea name="txtMinuta" id="txtMinuta" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["minuta"]?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aprova????o da minutas e seus anexos</span>
                </div>
                <input type="date" name="dateAprovMin" class="form-control" id="dateAprovMin" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_aprovacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de emiss??o</span>
                </div>
                <input type="date" name="dateemi" class="form-control" id="dateemi" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_emissao"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publica????o do edital</span>
                </div>
                <input type="date" name="datePubEd" class="form-control" id="datePubEd" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_publicacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especifica????o do projeto</span>
                </div>
                <textarea name="txtEspecificacao" id="txtEspecificacao" cols="200" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["especificacao"]?> </textarea>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data recibo de entrega do convite</span>
                </div>
                <input type="date" name="dateRecibo" class="form-control" id="dateRecibo" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_recibo"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilita????o</span>
                </div>
                <textarea name="txtHabilitacao" id="txtHabilitacao" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["documentos"]?></textarea> 
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de abertura</span>
                </div>
                <input type="date" name="dateAtaAbertura" class="form-control" id="dateAtaAbertura" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_ata"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data confirma????o de autenticidade</span>
                </div>
                <input type="date" name="dateAutenticidade" class="form-control" id="dateAutenticidade" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_confirmacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo recursal da proposta</span>
                </div>
                <input type="date" name="datePrazoProposta" class="form-control" id="datePrazoProposta" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["prazo"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de julgamento</span>
                </div>
                <input type="date" name="dateAtaJulgamento" class="form-control" id="dateAtaJulgamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_ata_julgamento"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Classificados das propostas</span>
                </div>
                <textarea name="txtClassificados" id="txtClassificados" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["classificados"]?></textarea> 
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publica????o do resultado do julgamento</span>
                </div>
                <input type="date" name="dateResultadoJulgamento" class="form-control" id="dateResultadoJulgamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_pub_res"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Prazo recursal da habilita????o</span>
                </div>
                <input type="date" name="datePrazoHabilitacao" class="form-control" id="datePrazoHabilitacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["prazo2"] ?>">
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jur??dico</span>
                </div>
                <input type="date" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_parecer_juridico"] ?>">
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data adjudica????o</span>
                </div>
                <input type="date" name="dateAdjudicacao" class="form-control" id="dateAdjudicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_adjudicacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data homologa????o</span>
                </div>
                <input type="date" name="dateHomologacao" class="form-control" id="dateHomologacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_homologacao"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="date" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_contrato_firmado"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publica????o do contrato</span>
                </div>
                <input type="date" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_publicacao_contrato"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de ??ltima pesquisa de pre??o</span>
                </div>
                <input type="date" name="datePesquisa" class="form-control" id="datePesquisa" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_pesquisa"] ?>">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo de apostilamento</span>
                </div>
                <textarea name="txtApostilamento" id="txtApostilamento" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["apostilamento"]?> </textarea>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">C??pia notas de empenho e compr. legais</span>
                </div>
                <textarea name="txtCopias" id="txtCopias" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["copia"]?> </textarea>
            </div>



            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observa????es</span>
                </div>
                <textarea name="txtObservacoes" id="txtObservacoes" cols="190" oninput='if(this.scrollHeight > this.offsetHeight) this.rows += 1'> <?php echo $modalidade["observacoes"]?> </textarea>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lan??amento</span>
                </div>
                <input type="datetime" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default" value="<?php echo $modalidade["dt_lancamento"] ?>" readonly>
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Porcentagem de aditivo permitida</span>
                </div>
                <input oninput="v_ = this.value; if(v_.length > 5){ this.value = v_.slice(0, 5); }" onblur="v_ = this.value; if(!~v_.indexOf('.')){ vl_ = v_.length; z_ = vl_ == 1 ? '0.00' : ( vl_ == 3 ? '0' : (vl_ == 2 ? '00' : ''));this.value = v_.length < 5 && v_ != '100' ? (((v_[0] ? v_[0] : '')+(v_[1] ? v_[1]+'.' : '')+(v_[2] ? v_[2] : '')+(v_[3] ? v_[3] : '')+(v_[4] ? v_[4] : '')+z_)):('100.00')};" type="number" id="numPorcent" step=".01"  max="100" value="<?php echo $modalidade["porcentagem"] ?>">
            </div>



            <br>
            <div class="buttons">
                <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                <input type="hidden" name="action" value="<?php echo $action ?>">

                <input type="submit" class="btn btn-success" value="Atualizar">
                <input type="reset" class="btn btn-danger" onclick="window.location.href='../modalidade/listModalidade.php'" value="Cancelar">

            </div>

        </form>

    </div>

    <section id="vencedores"></section>
    <?php
    include("../vencedor/createVencedor.php");
    ?>