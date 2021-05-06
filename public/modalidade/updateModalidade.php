<?php

include_once("../../data/connection.php");
    
if (isset($_POST)) {
    $id = $_POST["modalidadeId"];
    $exercicio = $_POST["txtExercicio"];
    $num_processo = $_POST["numProcesso"];
    $modalidade = $_POST["modalidade"]; 
    $numero = $_POST["numero"];
    $objeto = $_POST["txtObjeto"];
    $registro = $_POST["registro"];
    $categoria = $_POST["categoria"];
    $dt_edital = $_POST["dateEdital"];
    $dt_entrega = $_POST["dateEntrega"];
    $dt_abertura = $_POST["dateAbertura"];
    $dt_portaria = $_POST["dateNomeacao"];
    $dt_solicitacao = $_POST["dates"];
    $dt_orcamento = $_POST["datepe"];
    $dt_autorizacao = $_POST["datea"];
    $dt_autuacao = $_POST["dateau"];
    $enquadramento = $_POST["txtEnquadramento"];
    $dt_anexos = $_POST["dateEditalEAnexos"];
    $dt_aprovacao = $_POST["dateAprovMin"];
    $minuta = $_POST["txtMinuta"];
    $dt_publicacao = $_POST["datePubEd"];
    $especificacao = $_POST["txtEspecificacaoObjeto"];
    $dt_recibo = $_POST["dateRecibo"];
    $documentos = $_POST["txtHabilitacao"];
    $dt_ata = $_POST["dateAtaAbertura"];
    $dt_confirmacao = $_POST["dateAutenticidade"];
    $prazo = $_POST["datePrazoRecursal"];
    $date_ata_julgamento= $_POST["dateAtaJulgamento"];
    $classificados = $_POST["txtClassificados"];
    $dt_pub_resultado = $_POST["dateResultadoJulgamento"];
    $dt_parecer_juridico = $_POST["dateParecer"];
    $dt_adjudicacao = $_POST["dateAdjudicacao"];
    $dt_homologacao = $_POST["dateHomologacao"];
    $dt_contrato_firmado = $_POST["dateCF"];
    $dt_publicacao_contrato = $_POST["datePublicacao"];
    $copia = $_POST["txtCopias"];
    $codigo = $_POST["txtCodReg"];
    $valor_total = $_POST["numTotal"];
    $observacoes = $_POST["txtObservacoes"];
    $dt_lancamento = $_POST["dateLancamento"];

    $sql = "UPDATE modalidade
    SET exercicio='".$exercicio."' ,  " .
    "num_processo='".$num_processo."' ,  " .
    "modalidade='".$modalidade."' ,  " .
    "numero='".$numero."' ,  " .
    "objeto='".$objeto."' ,  " .
    "registro='".$registro."' ,  " .
    "categoria='".$categoria."' ,  " .
    "dt_edital='".$dt_edital."' ,  " .
    "dt_entrega='".$dt_entrega."' ,  " .
    "dt_abertura='".$dt_abertura."' ,  " .
    "dt_portaria='".$dt_portaria."' ,  " .
    "dt_solicitacao='".$dt_solicitacao."' ,  " .
    "dt_orcamento='".$dt_orcamento."' ,  " .
    "dt_autorizacao='".$dt_autorizacao."' ,  " .
    "dt_autuacao='".$dt_autuacao."' ,  " .
    "enquadramento='".$enquadramento."' ,  " .
    "dt_anexos='".$dt_anexos."' ,  " .
    "dt_aprovacao='".$dt_aprovacao."' ,  " .
    "minuta='".$minuta."' ,  " .
    "dt_publicacao='".$dt_publicacao."' ,  " .
    "especificacao='".$especificacao."' ,  " .
    "dt_recibo='".$dt_recibo."' ,  " .
    "documentos='".$documentos."' ,  " .
    "dt_ata='".$dt_ata."' ,  " .
    "dt_confirmacao='".$dt_confirmacao."' ,  " .
    "prazo='".$prazo."' ,  " .
    "dt_ata_julgamento='".$date_ata_julgamento."' ,  " .
    "classificados='".$classificados."' ,  " .
    "dt_pub_resultado='".$dt_pub_resultado."' ,  " .
    "dt_parecer_juridico='".$dt_parecer_juridico."' ,  " .
    "dt_adjudicacao='".$dt_adjudicacao."' ,  " .
    "dt_homologacao='".$dt_homologacao."' ,  " .
    "dt_contrato_firmado='".$dt_contrato_firmado."' ,  " .
    "dt_publicacao_contrato='".$dt_publicacao_contrato."' ,  " .
    "copia='".$copia."' ,  " .
    "codigo='".$codigo."' ,  " .
    "valor_total='".$valor_total."' ,  " .
    "observacoes='".$observacoes."' ,  " .
    "dt_lancamento='".$dt_lancamento."'  " .
    "WHERE id_modalidade = " . $id;


$resultado = $connection -> query($sql);

if ($resultado){ 
    ?>
    <script>
        alert("Modalidade editada com sucesso");
        window.location = 'createModalidade.php';
    </script>
<?php
} else { 
    echo $sql;?>
    <script>
        alert("Ocorreu um erro ao editar a modalidade");
       
       
    </script>
    
<?php
}

}

?>