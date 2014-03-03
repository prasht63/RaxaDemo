<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title>Raxa:Demo</title>

<link rel="stylesheet" href="prasht63_template.css" type="text/css" media="all" />


        
        
</head>
<body>
<div id="wrapper"><div id="form-div" style="background: #617798;"><font size=6 color="white">RAXA Thats What Doctor Said Demo</font></h1></div></div>
<div id="wrapper">

  <div id="form-div">
    <form class="form" id="form1" action="translate.php">
     
      <p class="text">
        <textarea name="prescription" class="validate[required,length[6,300]] text-input" id="prescription" placehoder="Enter Prescription here"><?php echo $_REQUEST['prescription'];?></textarea>
      </p>
      <p class="submit">
        <input type="submit" value="Tell me What did the Doctor Say." />
      </p>
    </form>

  </div>
  <div id="wrapper"><div id="form-div" style="background: #617798;"><font size=3 color="white">
<?php

$prescription=$_REQUEST['prescription'];

$array_len=substr_count($prescription,'+');
$medicine= explode("+", $prescription);


echo"The doctor has advised you to take:<br>";
for($i=0;$i<=$array_len;$i++)
{ $c=$i+1;
$detail=explode(" ", $medicine[$i]);



$days=$detail[1];
if(intval($detail[2])==123){$times="3 times a day";}
if(intval($detail[2])==13){$times="2 times a day once in the morning and once at night";}
if(intval($detail[2])==12){$times="2 times a day once in the morning and once after lunch";}
if(intval($detail[2])==1){$times="1 time a day";}
if(intval($detail[2])==2){$times="1 time a day after lunch";}
if(intval($detail[2])==3){$times="1 time a day at night";}
echo"$c.$detail[0]  $times for $days days.";if($i<$array_len){echo "<br>";}


}

?></font></h1></div></div>
