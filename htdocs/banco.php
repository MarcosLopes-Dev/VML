<?php


    $link = mysqli_connect('localhost', 'admin', 'A3lqo100', "vml");
    if (!$link) {
        die('Erro na conexão com banco de dados! - ' . mysql_error());
    } 
        $query_select = "SELECT nome, valor, tipo FROM produtos";
        $result = $link->query($query_select);
        $i = 0;
        $total = $result->num_rows;
        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
            
            $nomes[$i]= $row["nome"];
                $valores[$i]= $row["valor"];
                $tipos[$i]= $row["tipo"];
            $i= $i + 1;
            }
            
        } 
        else 
        {
            echo "Sem produtos cadastrados no banco de dados";
        }


?>