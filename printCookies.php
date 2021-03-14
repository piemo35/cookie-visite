<?php

function printCookies(){
    $data = explode(" ",$_COOKIE['visite']); // appoggio nell'array $data i cookie letti 

    echo "<div><h2>Visite precedenti: </h2>";
        foreach($data as $index => $val) echo $val."<br>"; // stampo le visite vecchie
    echo "<h2>Visita attuale: </h2>".date("Y-m-d h:i:s");

    array_push($data, date("Y-m-d-h:i:s ")); // aggiungo all'array la visita corrente

    setcookie("visite", implode(" ",$data), time()+3600); // invio il cookie con le visite aggiornate

    echo '<br><br><form action="index.php" method="post">'; //pulsante per eliminazione
    echo '<input type="submit" name="cancella" value="Cancella i Cookie"></form></div>';
}

?>