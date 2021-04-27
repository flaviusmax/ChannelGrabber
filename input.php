<?php

include 'bd.php';




$affectedRow = 0;
$xml = simplexml_load_file("input.xml") or die("Eroare: nu s-a creat");

foreach ($xml->children() as $row) {
	$id = $row->id;
    $name = $row->name;
    $adresa1 = $row->address_line1;
    $adresa2 = $row->address_line2;

    
    $sql = "INSERT INTO tabel1(id, name, address_line1 , address_line2) VALUES ('" . $id . "','" . $name . "','" . $adresa1 . "','" . $adresa2 . "')";
    
    $result = mysqli_query($connection, $sql);
    
    if (! empty($result)) {
        $affectedRow ++;
    } else {
        $error_message = mysqli_error($connection) . "\n";
    }
}
?>
<h2> Datele au fost intruduse </h2>
<?php
if ($affectedRow > 0) {
    $message = $affectedRow . " randuri inserate";
} else {
    $message = "Niciun rand inserat";
}

?>