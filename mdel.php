 <?php

//$connection = mysql_connect("localhost", 'root');
//$db = mysql_select_db("my_bd");
//mysql_set_charset("utf8");
//$result = mysql_query(" SELECT * FROM articles ");
//$row = mysql_fetch_array($result);
//var_dump($row);
//echo $row['title'];
$d = new DateTime();
echo $d->format(d_m_Y);
 $db = new PDO('mysql:host=127.0.0.1;dbname=my_bd', 'root', '');
$sql = "SELECT * FROM articles";
  
	 $res = $db->query($sql);
//var_dump($db->errorInfo());

     $dats = $res->fetchAll(PDO::FETCH_ASSOC);
    //var_dump($dats);
//echo $dats['id']. ' ' . $dats['title'];
//	 print $db->errorCode();
//
////     $db->errorCode();
////	 var_dump($res);
////	 while($dats = $res -> fetch(PDO::FETCH_ASSOC)){
////	 echo $dats['id']. ' ' . $dats['title'];
////	 }
?>