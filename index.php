<?php

include 'bd.php';


    //fetch table rows from mysql db
    $sql = "select * from tabel1";
  

  $result = mysqli_query($connection, $sql) or die("Eroare " . mysqli_error($connection));
  
     //create an array
    $emparray = array();
    while($row =mysqli_fetch_assoc($result))
    {
        $emparray[] = $row;
    }
	
	
	//Convert PHP Array to JSON String
	
	 echo json_encode($emparray);
	 
	 //
	 
	     //close the db connection
    mysqli_close($connection);
	
	//creted the file
	$exportJsonFile = json_encode($emparray);
    file_put_contents('jsonFile.json', $exportJsonFile);
	


  
  
?>