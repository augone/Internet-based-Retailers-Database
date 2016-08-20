<?php


//本地测试的服务名
$serverName = "localhost:12";
$connectionInfo = array( "UID”=>”sa",
"PWD"=>"maxiaodong522488",
"Database"=>"ECOMMERCE");
$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn )
{
    echo "Connection established.\n";
}
else
{
    echo "Connection could not be established.\n";
die( print_r( sqlsrv_errors(), true));
}
?>