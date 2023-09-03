<?PHP
$tb = 'user'; 
$dir = 'uploads/';

if ($_GET['e'] == true) {
	goto_page('edit_user.php?e=true&q=' . $_GET['q']);
}

if ($_GET['d'] == true) {
	goto_page('view_users.php?d=true&q=' . $_GET['q']);
}

if ($_GET['v'] == true)
{
	//Main::keylog($db_con,2);
		
	$row = '';
	$db_res = sql_select_id($db_con, $tb, $_GET['q']);
	if ($db_res) 
	{
		$row = $db_res;
		$sub_dir = Main::sub_dir($row);		
		
		if (substr($row['pass'],0,4) != 'pass')
			$pass_buf = $dir . 'default.png';
		else
			$pass_buf = $sub_dir . $row['pass'];
			
		if (substr($row['sign'],0,4) != 'sign')
			$sign_buf = $dir . 'affix_sign.png';
		else
			$sign_buf = $sub_dir . $row['sign'];			
			
		if (substr($row['thumb'],0,5) != 'thumb')
			$thumb_buf = $dir . 'affix_thumb.png';
		else
			$thumb_buf = $sub_dir . $row['thumb'];
	}
	else 
	{
		$error = 'Selected acccount does not exist';
		$errno = 400;	
	}
}
?>