<?php 
if (isset($_POST['checkme']) && !strlen($_POST['email']) || !strlen($_POST['nimi']) || !strlen($_POST['teema']) || !strlen($_POST['kiri']))
{ 
    echo"Palun vajuta brauseri back-nuppu, osad v&auml;ljad j&auml;id t&auml;itmata!"; 
} 
elseif(isset($_POST['checkme'])) 
{ 

?> 
<div align="center" style="color: blue; 
font-family: verdana, serif; font-weight: bold; font-size: 14px;"> 

T&auml;name kirja eest! 

<br>Me loeme Sinu kirja niipea kui v&otilde;imalik <br> </div> 

<?php 

@mail("tepslukk@hot.ee", $_POST['teema']." (Veebilehelt)", $_POST['kiri'], 
 "From: " . $_POST['nimi'] . "<".$_POST['email'].">\nReply-To: " .  
$_POST['email'] . "\nX-Mailer: PHP.ee/". phpversion()); 

} 
?>