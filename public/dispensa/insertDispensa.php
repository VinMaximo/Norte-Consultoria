<?php

include_once("../../data/connection.php");

$exercicio = $_POST["txtExercicio"];
$nProcesso = $_POST["numProcesso"];
$nDispensa = $_POST["numDispensa"];
$inciso = $_POST["inciso"];
$objeto = $_POST["txtObjeto"];
$categoria = $_POST["txtCategoria"];
$dInicio = $_POST["datei"];
$dRatificacao = $_POST["dater"];
$dPortariaComissao = $_POST["datep"];
$dSolicitacaoCompras = $_POST["dates"];
$dOrcamento = $_POST["datepe"];
$dAutorizacao = $_POST["datea"];
$dAutuacao = $_POST["dateau"];
$especificacao = $_POST["txtEspecificacao"];
$enquadramento = $_POST["txtEnquadramento"];
$minuta = $_POST["txtMinuta"];
$dPropostaFavorecido = $_POST["dateProp"];
$habilitacao = $_POST["txtHabilitacao"];
$dAtaDispensa = $_POST["dateAta"];
$dParecerJuridico = $_POST["dateParecer"];
$dContratoFormado = $_POST["dateCF"];
$dPublicacaoDispensa = $_POST["datePublicacao"];
$copiaNotas = $_POST["txtCopias"];
$valorTotal = $_POST["numTotal"];
$observacoes = $_POST["txtObservacoes"];
$analistaResponsavel = $_POST["txtAnalista"];
$dLancamento = $_POST["dateLancamento"];


$sql = "INSERT INTO 
    dispensa (exercicio, num_processo, num_dispensa, inciso, objeto, categoria, data_inicio, data_ratificacao, data_portaria_comissao, data_solicitacao_compras_servicos, data_preco_estimativo, data_autorizacao_abertura, data_autuacao, especificacao_objeto, enquadramento, minuta_contrato, data_proposta_favorecido, documento_habilitacao, data_ata, data_parecer_juridico, data_contrato_firmado, data_publicacao, copia_empenho_compras_legais, valor_total, observacoes, data_lancamento)
    VALUES('$exercicio', '$nProcesso', '$nDispensa', '$inciso', '$objeto', '$categoria', '$dInicio', '$dRatificacao' ,'$dPortariaComissao' ,'$dSolicitacaoCompras', '$dOrcamento' ,'$dAutorizacao','$dAutuacao','$especificacao', '$enquadramento', '$minuta', '$dPropostaFavorecido', '$habilitacao', '$dAtaDispensa', '$dParecerJuridico', '$dContratoFormado', '$dPublicacaoDispensa', '$copiaNotas', '$valorTotal', '$observacoes', '$dLancamento')";


$resultado = $connection -> query($sql);

if ($resultado){ ?>
    <script>
        alert("Dispensa cadastrada com sucesso");
        window.location = 'createDispensa.php';
    </script>
<?php
} else { ?>
    <script>
        alert("Ocorreu um erro ao cadastrar a dispensa");
        window.location = 'createDispensa.php';
       
    </script>
    
<?php
}

?>