<?PHP
$tb = 'admin';

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$post = sanitize_request($_POST);
	
	$db_res = sql_insert($db_con, $tb, $post);
		
	if (is_numeric($db_res))
	{
		//Main::keylog($db_con,1);
		
		$_POST = NULL;		
		$error = 'Record saved successfully';
		$errno = 200;
	}
	else
	{
		$error = $db_res;
		$errno = 400;		
	}
}

$ddl_gender = Enums::option(Lists::GENDER, $_POST['gender']);

$ddl_access = Enums::option(Lists::ADMIN, $_POST['access']);
?>