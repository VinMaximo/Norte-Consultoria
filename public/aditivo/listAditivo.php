<?php include("../Template/header.php") ;
//$codigo=$_POST["codigo"]; 
?>

<?php

    include("../../data/connection.php");

    $sql = "SELECT * FROM aditivo where codigo_processo='$codigo'";

    $dadosAditivo = $connection -> query($sql);

    if($dadosAditivo -> num_rows > 0)
    {
    ?>
    <div class="form">

    

    
        <div style="margin-left: 100px; margin-right: 100px;" style="text-align: center;">
        <br>
       
            <br>
            <table class="table" style="text-align: center;">
                <tr>
                    <th>Numero</th>
                    <th>Data</th>
                    <th>Valor</th>
                    <th>Prazo</th>
                    <th>Tipo</th>
                    <th>Empresa</th>
                    <th>Codigo</th>
                    <th></th>
                </tr>

                <?php
                    while($exibir = $dadosAditivo -> fetch_assoc())
                    {
                    ?>
                        <tr>
                        <td><?php echo $exibir["numero_aditivo"] ?></td>
                        <td><?php echo $exibir["data_aditivo"] ?></td>
                        <td><?php echo $exibir["valor_aditivo"] ?></td>
                        <td><?php echo $exibir["prazo_aditivo"] ?></td>
                        <td><?php echo $exibir["tipo_aditivo"] ?></td>
                        <td><?php echo $exibir["nome_empresa"] ?></td>
                        <td><?php echo $exibir["codigo_processo"] ?></td>
                            <td>
                            <form name="editbutton" action="../aditivo/editAditivo.php" method="POST">
                                <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                                <input type="hidden" name="id" value="<?php echo $exibir["id_aditivo"] ?>">
                                <input type="hidden" name="action" value="<?php echo $action ?>">
                                <input type="submit" class="btn btn-success btn-sm" value="Editar">
                            </form>
                                <br>
                                <form name="deletebutton" action="../aditivo/deleteAditivo.php" method="POST">
                                <input type="hidden" name="codigo" value="<?php echo $codigo ?>">
                                <input type="hidden" name="tipo" value="<?php echo $tipo ?>">
                                <input type="hidden" name="id" value="<?php echo $exibir["id_aditivo"] ?>">
                                <input type="hidden" name="action" value="<?php echo $action ?>">
                                <input type="submit" class="btn btn-danger btn-sm" value="Excluir">
                            </form>


                            </td>
                        </tr>
                    <?php
                        }
                    ?>
            </table>
        </div>
    </div>
    <?php
    }
    else
    {
        echo "Nenhum registro encontrado.";
    }
    ?>

<?php
error_reporting(0);
?>
