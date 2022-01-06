<html>
  <head>
    
    
  </head>

  
  
  <body>
    <p>Hello Teacher itsa me!</p>
     <p>Wazzup bro...JUST WORK...</p>
  </body> 

<?php
    $serverName = "your_server.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "mySampleDatabase ", // update me
        "Uid" => "SqlAdmin", // update me
        "PWD" => "berk!@-95AlTek@1-" // update me
    );
    //Establishes the connection
    $conn = sqlsrv_connect($serverName, $connectionOptions);
    $tsql= "SELECT TOP 20 pc.Name as CategoryName, p.name as ProductName
         FROM [SalesLT].[ProductCategory] pc
         JOIN [SalesLT].[Product] p
         ON pc.productcategoryid = p.productcategoryid";
    $getResults= sqlsrv_query($conn, $tsql);
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
