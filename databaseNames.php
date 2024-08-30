<?php
   $servername = "localhost";
   $dBUsername = "root";
   $dBPassword = "";
   $dBName = "search";
   //Starter connection 
   $conn = mysqli_connect($servername, $dBUsername, $dBPassword, $dBName);
 
   $array = array();

    $sql = "SELECT * FROM users";
    $result = $conn-> query($sql);
    if($result -> num_rows > 0){
      while ($row = $result -> fetch_assoc()){
        $array[] = $row; //Put the database data into an array
        /*
        echo $row['username'];
        */
      }
    }
    /*
    echo "<br>";
    print_r($array);
    echo "<br>";
    */
    $arrayMedNavn = array(); //Creating a second array

    for($var = 0; $var < 20; $var++){
      array_push($arrayMedNavn, $array[$var]['username']); //Putting data from array1 into array2
    }
    /*
    print_r($arrayMedNavn);
    */
    if(isset($_POST['searchedName'])){//Checking if there is value in the input field
      $name = $_POST['searchedName'];
  
      if(!empty($name)){
        foreach ($arrayMedNavn as $existingName){
          if(strpos($existingName, $name) !== false){//If what ever you are typing in input field exists in database, it displays info
            echo "<p>".$existingName."</p>";
            echo "<br>";
          }
        }
      }
    }
