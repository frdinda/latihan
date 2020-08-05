<?php

$db = $_SERVER["DOCUMENT_ROOT"] ."/access/phptoacc.mdb";
if (!file_exists($db))
{
       die("No database file.");
}

$dbNew = new PDO("odbc:DRIVER={Microsoft Access Driver (*.mdb, *.accdb)}; DBQ=$db; Uid=; Pwd=;");
$sql = "select * from testdb";
$rs = $dbNew->query($sql);

while($result = $rs->fetch())
{
     echo $result[0].": ".$result[1]."<br />";
} 


?>