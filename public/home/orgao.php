<?php
include("../Template/header.php");
include("../login/valida.php");
include("../../data/connection.php");


?>

<br>
<br>
<div class="form">
<form action="alteraorgao.php" method="POST" style="margin-left: 100px; margin-right: 100px;">
<div class="input-group mb-3" >

    <div class="input-group-prepend">
        <span class="input-group-text" id="inputGroup-sizing-default">Órgão</span>
    </div>
    <select class="form-select" name="orgao" id="orgao">
        <?php
        
            $sqlQuery = "SELECT * FROM orgao";
        


        $orgaos = $connection->query($sqlQuery);

        if ($orgaos->num_rows > 0) {

            while ($row = $orgaos->fetch_assoc()) {
        ?>

                <option value="<?php echo $row["nome_orgao"] ?>">
                    <?php echo $row["nome_orgao"]  ?>
                </option>

        <?php
            }
        }
        ?>
    </select>
    

    &nbsp;
    <input type="submit" class="btn btn-success" value="OK" >
    &nbsp;&nbsp;&nbsp;
    <a href="../orgao/listorgao.php" class="btn btn-primary">Gerenciar órgãos</a>
    </form>
</div>
</div>