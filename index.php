<html>
  <head>
    
    
  </head>

  
  
  <body>
    <p>Hello Teacher itsa me!</p>
     <p>Wazzup bro...JUST WORK...</p>
    
    <button name="testButton">Click</button>
  </body>
  
  
  <?php
  
    if(array_key_exists('testButton', $_POST)){
            
            echo "YOUR TRASH";
        }
  
  ?>

<?php
    $serverName = "server-1200506101.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "mySampleDatabase ", // update me
        "Uid" => "SqlAdmin", // update me
        "PWD" => "berk!@-95AlTek@1-" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $insertsql= "INSERT INTO tblEmployee (EmpName, EmpSurname, EmpAddress, EmpPhone) VALUES ('insertedtestname', 'insertedtestlastname', 'insertedadress', '12345')";
    $getResults= sqlsrv_query($conn, $insertsql);
    
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $deletesql ="DELETE FROM tblEmployee where EmpPhone = '5'";
    $getResults= sqlsrv_query($conn, $deletesql);
  
  
  
  
  
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE)
        echo (sqlsrv_errors());
    while ($row = sqlsrv_fetch_array($getResults, SQLSRV_FETCH_ASSOC)) {
     echo ($row['CategoryName'] . " " . $row['ProductName'] . PHP_EOL);
    }
    sqlsrv_free_stmt($getResults);
  
  
  
  
 
  
  
   echo "ended php";
?>
  
  
</html>
