<?php
 mysql_connect("localhost","raxa","ok");
 mysql_select_db("raxa");
 
 //$term="#paracetamol #an";debugging
  $term=$_GET["term"];

 {
 
 $array_len=substr_count($term,' ');
//echo $array_len; debugging
 $a=explode(" ",$term);
//echo $term; debugging
 $term=$a[$array_len];
 //$term="#".$term; debugging
// echo $term; debug

for($i=0;$i<$array_len;$i++)
{ {
$pre=$pre." ".$a[$i];}
}
//echo $pre; debug
 $query=mysql_query("SELECT * FROM drugs where name like '%".$term."%' order by name ");
 
 $json=array();
 
    while($student=mysql_fetch_array($query)){
         $json[]=array(
                    'value'=> $pre." ".$student["name"],
                    
                        );
    }
 
 echo json_encode($json);
 }
?>
