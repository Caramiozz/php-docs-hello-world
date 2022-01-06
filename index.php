<html>
  <head>
    
    
  </head>

  
  
  <body>
    <p>Hello Teacher itsa me!</p>
  </body> 

<?php

 $serverName = "server-1200506101.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "mySampleDatabase", // update me
        "Uid" => "SqlAdmin", // update me
        "PWD" => "berk!@-95AlTek@1-" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT * FROM tblEmployee WHERE EmpName = 'berk' ";
    $getResults= sqlsrv_query($conn, $tsql);
    echo ("Reading data from table" . PHP_EOL);
    if ($getResults == FALSE){
        
        echo "getResults is false";
        echo $getResults;
      
    }
    
    echo "echoing the final part";

    sqlsrv_free_stmt($getResults[0]);

?>
  
  
</html>
