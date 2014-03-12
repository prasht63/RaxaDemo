<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<title>Raxa:Demo</title>
<head>

<link rel="stylesheet" href="prasht63_template.css" type="text/css" media="all" />
<link rel="stylesheet" type="text/css" media="screen" href="popup.css">

        
        <script type="text/javascript"
        src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript"
        src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.8.18/jquery-ui.min.js"></script>
        <link rel="stylesheet" type="text/css"
        href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" />
 
        <script type="text/javascript">
                $(document).ready(function(){
			
				


                    $("#prescription").autocomplete({
                        source:'getautocomplete.php',
                        minLength:1,
						selectFirst: true
                    });

                });
				

 
        </script>
   
   <body>
 
    
 
   </body>

        
</head>
<body>
<div id="wrapper"><div id="form-div" style="background: #617798;"><font size=6 color="white">RAXA #tag Editor</font></h1></div></div>
<div id="wrapper">

  <div id="form-div">
     <form class="form" id="form1" action="index.php" type="post">
     <p class="text"><label>Patient ID:<br></label>
        <input type="text" name="pid" class="validate[required,length[6,300]] text-input" id="pid" placehoder="Enter Prescription here"/>
      </p>
      <p class="text">
      
        <textarea name="prescription" class="validate[required,length[6,300]] text-input" id="prescription" placeholder="Enter Prescription here"></textarea>
      </p>
	  
      <p class="submit">
        <input type="submit" value="Prescribe." />
      </p>
    </form>
 
  </div>
  <font size=3 color="white">
  <?php //was not able to make ajax submit work so had to put this code here. 
 
 mysql_connect("localhost","raxa","ok");
 mysql_select_db("raxa");
 
  $pre=$_REQUEST["prescription"];
 $pid=$_REQUEST['pid']; 
 //echo $pid;
 //echo $pre;
 if($pre!=""){
 $sql ="INSERT INTO prescriptions SET
pid='{$pid}',

prescription='{$pre}'  ";

                    // insert the image
                    mysql_query($sql) or die("Error in Query: " . mysql_error());
					 echo "The prescription has been stored succesfully";}
                  
?>
