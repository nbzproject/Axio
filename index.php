﻿<?php

include_once "mail.php";

if (isset($_POST['address']) and $_POST['address'] !== '' and isset($_POST['message']) and $_POST['message'] !== '')
{
	sendmail($_POST['address'], $_POST['message']);
	
	echo('Ну, допустим, улетело письмо');
	
} else {
	
	$txt = "<html><head></head><body>";
	
	
	$txt .= "<form action='index.php'>";
	
	$txt .= "<label>Контактный Email</label><br>";
                                                                            
	$txt .= "<input type='email' name='address' value='' size='40' />";
	
	$txt .= "<label>Комментарии</label><br>";
    
	$txt .= "<textarea name='message' cols='40' rows='3'></textarea>";
	
	$txt .= "<input type='submit' value='Послать' />";
	
	$txt .= "</body></html>";
	
	print $txt;
}




?>