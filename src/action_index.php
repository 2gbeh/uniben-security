<?PHP
$tb = 'admin';
$nav = 'dashboard.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$post = sanitize_request($_POST);	
	$db_res = sql_select_one($db_con, $tb, 'username', $post['username']);
	
	$errno = 400;	
	if (is_array($db_res))
	{
		if ($post['password'] == $db_res['password']) 
		{
			set_session('user', $db_res);			
			//Main::keylog($db_con);			
			goto_page($nav);
			
			$_POST = NULL;			
			$error = 'Log in successful';
			$errno = 200;			
		}
		else
			$error = 'Incorrect password';
	}
	else
		$error = 'Username not found';	
}
?>