<html>
  <head>
    
    
  </head>

  
  
  <body>
    <p>This website will automatically query perform the following queries</p>
    <p>INSERT INTO tblEmployee (EmpName, EmpSurname, EmpAddress, EmpPhone) VALUES ('insertedtestname', 'insertedtestlastname', 'insertedadress', '12345')</p>
    <p>DELETE FROM tblEmployee where EmpPhone = '5'</p>
    <p>We can use SSMS to view the changes that have been done to the database!</p>    
  </body>
  
  
  <?php
  
    if(array_key_exists('testButton', $_POST)){
            
            echo "YOUR TRASH";
        }
  
  ?>

<?php
    $serverName = "server-groupberk12345.database.windows.net"; // update me
    $connectionOptions = array(
        "Database" => "groupBerkDatabase", // update me
        "Uid" => "groupBerkAdmin", // update me
        "PWD" => "group!@-BeRk1-@?Password" // update me
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
