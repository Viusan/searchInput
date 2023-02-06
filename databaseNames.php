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
        $array[] = $row;
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
    $arrayMedNavn = array();

    for($var = 0; $var < 10; $var++){
      array_push($arrayMedNavn, $array[$var]['username']);
    }
    /*
    print_r($arrayMedNavn);
    */
    if(isset($_POST['searchedName'])){
      $name = $_POST['searchedName'];
  
      if(!empty($name)){
        foreach ($arrayMedNavn as $existingName){
          if(strpos($existingName, $name) !== false){
            echo "<p>".$existingName."</p>";
            echo "<br>";
          }
        }
      }
    }
