<?php include("../Template/header.php");
include("../../data/connection.php");
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inexigibilidade</title>
</head>

<body>
    <br>
    <br>

    
    <div class="form">
        <form action="insertDispensa.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
            <h3>Inexigibilidade</h3>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Paciente</span>
                </div>
                <select class="form-select" name="paciente_cpf" id="paciente_cpf">
                    <option value="-1" selected>Selecione um paciente</option>
                    <?php

                    $sqlQuery = "SELECT * FROM paciente ORDER BY nome";

                    $pacientes = $connection->query($sqlQuery);

                    if ($pacientes->num_rows > 0) {

                        while ($row = $pacientes->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["CPF"] ?>">
                                <?php echo $row["nome"] . " - CPF: " . $row["CPF"] ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>


            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Exercício</span>
                </div>
                <input type="text" name="txtExercicio" class="form-control" id="txtExercicio" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Processo</span>
                </div>
                <input type="number" name="numProcesso" class="form-control" id="numProcesso" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Nº Inexigibilidade</span>
                </div>
                <input type="number" name="numInexigibilidade" class="form-control" id="numInexigibilidade" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Objeto</span>
                </div>
                <input type="text" name="txtObjeto" class="form-control" id="txtObjeto" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Paciente</span>
                </div>
                <select class="form-select" name="paciente_cpf" id="paciente_cpf">
                    <option value="-1" selected>Selecione um paciente</option>
                    <?php

                    $sqlQuery = "SELECT * FROM paciente ORDER BY nome";

                    $pacientes = $connection->query($sqlQuery);

                    if ($pacientes->num_rows > 0) {

                        while ($row = $pacientes->fetch_assoc()) {
                    ?>

                            <option value="<?php echo $row["CPF"] ?>">
                                <?php echo $row["nome"] . " - CPF: " . $row["CPF"] ?>
                            </option>

                    <?php
                        }
                    }
                    ?>
                </select>
            </div>


            
            
           

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de início</span>
                </div>
                <input type="datetime-local" name="datei" class="form-control" id="datei" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Portaria nomeando a comissão</span>
                </div>
                <input type="text" name="txtp" class="form-control" id="txtp" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da solicitação de compras/serviços</span>
                </div>
                <input type="datetime-local" name="dates" class="form-control" id="dates" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data de preço estimativo (Orçamento)</span>
                </div>
                <input type="datetime-local" name="datepe" class="form-control" id="datepe" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data da autorização para a abertura do processo</span>
                </div>
                <input type="datetime-local" name="datea" class="form-control" id="datea" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data autuação</span>
                </div>
                <input type="datetime-local" name="dateau" class="form-control" id="dateau" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Especificação do projeto</span>
                </div>
                <input type="text" name="txtEspecificacao" class="form-control" id="txtEspecificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Enquadramento na modalidade pertinente</span>
                </div>
                <input type="text" name="txtEnquadramento" class="form-control" id="txtEnquadramento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Minuta do contrato</span>
                </div>
                <input type="text" name="txtMinuta" class="form-control" id="txtMinuta" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data aprovação da minuta</span>
                </div>
                <input type="datetime-local" name="dateAprov" class="form-control" id="dateAprov" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data proposta do favorecido</span>
                </div>
                <input type="datetime-local" name="dateProp" class="form-control" id="dateProp" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Documentos de habilitação</span>
                </div>
                <input type="text" name="txtHabilitacao" class="form-control" id="txtHabilitacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de inexigibilidade</span>
                </div>
                <input type="datetime-local" name="dateAta" class="form-control" id="dateAta" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data parecer jurídico</span>
                </div>
                <input type="datetime-local" name="dateParecer" class="form-control" id="dateParecer" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ata de dispensa</span>
                </div>
                <input type="datetime-local" name="dateAta" class="form-control" id="dateAta" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data ratificação</span>
                </div>
                <input type="datetime-local" name="dateRetificacao" class="form-control" id="dateRetificacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data contrato firmado</span>
                </div>
                <input type="datetime-local" name="dateCF" class="form-control" id="dateCF" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data publicação da inexigibilidade</span>
                </div>
                <input type="datetime-local" name="datePublicacao" class="form-control" id="datePublicacao" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Cópia notas de empenho e compr. legais</span>
                </div>
                <input type="text" name="txtCopias" class="form-control" id="txtCopias" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Código de registro</span>
                </div>
                <input type="text" name="txtCodReg" class="form-control" id="txtCodReg" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Valor total do processo</span>
                </div>
                <input type="number" name="numTotal" class="form-control" id="numTotal" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo aditivo?</span>
                </div>
                <input type="checkbox" name="checkAditivo" class="form-control" id="checkAditivo" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>
            
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Termo de apostilamento?</span>
                </div>
                <input type="checkbox" name="checkApostilamento" class="form-control" id="checkApostilamento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Observações</span>
                </div>
                <input type="text" name="txtObservacoes" class="form-control" id="txtObservacoes" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Analista responsável</span>
                </div>
                <input type="text" name="txtAnalista" class="form-control" id="txtAnalista" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data e hora de lançamento</span>
                </div>
                <input type="datetime-local" name="dateLancamento" class="form-control" id="dateLancamento" aria-label="Default" aria-describedby="inputGroup-sizing-default">
            </div>

            <br>    
            <div class="buttons">
                
                <input type="submit" class="btn btn-success" value="Cadastrar">
                <input type="reset" class="btn btn-danger"  onclick="window.location.href='../login/index.php'" value="Cancelar">

            </div>

            

            


            
        </form>
    </div>


</body>
</html>