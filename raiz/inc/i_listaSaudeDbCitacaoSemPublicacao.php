<h3>Lista citações sem publicação</h3>
<?php
$queryCSPu1 = "SELECT * ";
$queryCSPu1 .= "FROM citacao ";
$queryCSPu1 .= "WHERE IdPublicacao = ''";
mysqli_set_charset($connection,"utf8");
$resultCSPu1 = mysqli_query( $connection, $queryCSPu1 );
if ( !$result1 ) {
    die( "1. Query falhou: " . $queryCSPu1 . "<br />" );
}
while ( $rowCSPu1 = mysqli_fetch_assoc( $resultCSPu1 ) ) {

    //echo $nString . "<br />";

    // echo "Autor " . $row1[ "AutSobrenome" ] . "tem " . $nString . " obras relacionadas. <br />";
      echo "Citação: <br /><strong>" . $rowCSPu1[ "CitCitacao" ] .  "</strong><br /> não tem relação com nenhuma publicação! <br />";
      echo "<a class='botao' href='listaSaudeDbCheckUp.php?msgDelIdCitacao=" . $rowCSPu1[ "IdCitacao" ] . "'>DELETA CITAÇÃO</a>";
      echo "<hr>";
}
//mysqli_free_result( $resultCSPu1 );
?>