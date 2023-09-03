<?PHP
$tb = 'user';
$dir = 'uploads/';

if ($_GET['e'] == true) {	
	$_POST = sql_select_id($db_con, $tb, $_GET['q']);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST')
{
	$post = sanitize_request($_POST);

	array_pop($post);
	$db_res = sql_update($db_con, $tb, $post, 'ID', $_POST['ID']);
	
	//var_dump($_POST,$_FILES,$post,$db_res);
		
	if (is_numeric($db_res)) 
	{
		//Main::keylog($db_con,3);
		
		//$_POST = NULL;
		$error = 'Record updated successfully';
		$errno = 200;
	}
	else
	{
		$error = $db_res;
		$errno = 400;		
	}
}

$enum_surname = sql_column_distinct($db_con, $tb, 'surname');
$hint_surname = Enums::datalist($enum_surname, 'hint_surname');

$enum_mname = sql_column_distinct($db_con, $tb, 'mname');
$hint_mname = Enums::datalist($enum_mname, 'hint_mname');

$enum_fname = sql_column_distinct($db_con, $tb, 'fname');
$hint_fname = Enums::datalist($enum_fname, 'hint_fname');

$ddl_sex = Enums::option(Lists::GENDER, $_POST['sex']);

$ddl_country = Enums::option(Lists::COUNTRY, $_POST['country']);

$ddl_state = Enums::option(Lists::STATE, $_POST['state']);

$enum_lgo = sql_column_distinct($db_con, $tb, 'lgo');
$hint_lgo = Enums::datalist($enum_lgo, 'hint_lgo');

$enum_edu = sql_column_distinct($db_con, $tb, 'edu');
$hint_edu = Enums::datalist($enum_edu, 'hint_edu');

$ddl_ict = Enums::option(Lists::BOOL, $_POST['ict']);

$ddl_marital = Enums::option(Lists::MARITAL, $_POST['marital']);

$enum_kin_rel = sql_column_distinct($db_con, $tb, 'kin_rel');
$hint_kin_rel = Enums::datalist($enum_kin_rel, 'hint_kin_rel');

$ddl_crime = Enums::option(Lists::BOOL, $_POST['crime']);

$ddl_cult = Enums::option(Lists::BOOL, $_POST['cult']);


?>