<!DOCTYPE html>
<html>
   <head>
       <title>Tickets</title>
       <style>
           table, td, th{
               border:1px solid black;
               border-collapse:collapse;
           }
           td, th {
               padding:10px;
           }
           th{
               text-align:left;
               background-color:black;
               color:white;
           }
           tr:nth-child(even){
               background-color:silver;
           }
           tr:nth-child(odd){
               background-color:white;
            }
        </style>
    </head>
    <body>
        <h1>Tickets</h1>

        <p>Gerenciador de tickets</p>

        <?php

            $servidor = "ambiente_db_1";
            $usuario = "monty";
            $senha = "some_pass";
            $banco = "tickets";

            $conn = new mysqli($servidor, $usuario, $senha, $banco);

            if($conn->connect_error){
                die("Falha de conexão: " . $conn->connect_error);

            }
        ?>
        <table>
            <tr>
                <th>ID</th>
                <th>Titulo</th>
                <th>Status</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Criar novo usuario</td>
                <td>Aberto</td>
            </tr>    
            <tr>
                <td>2</td>
                <td>Analisar fatura</td>
                <td>Aberto</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Criar novo usuario de acesso</td>
                <td>Aberto</td>
            </tr>
        </table>
    </body>
</html>
      
