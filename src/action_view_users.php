<?PHP
$tb = 'user';
$dir = 'uploads/';

if ($_GET['v'] == true) {
	goto_page('view_user.php?v=true&q=' . $_GET['q']);
}

if ($_GET['e'] == true) {
	goto_page('edit_user.php?e=true&q=' . $_GET['q']);
}

if ($_GET['d'] == true)
{
	$db_res = sql_select_one($db_con, $tb, 'ID', $_GET['q']);
	if (is_array($db_res))
	{
		$sub_dir = Main::sub_dir($db_res);
		delete_file($db_res['pass'],$sub_dir);
		delete_file($db_res['sign'],$sub_dir);
		delete_file($db_res['thumb'],$sub_dir);	
		rmdir($sub_dir);			
	}
	
	$db_res = sql_delete($db_con, $tb, 'ID', $_GET['q']);
	
	if ($db_res > 0) {	
	//Main::keylog($db_con,4);	
	
		$error = 'Record deleted successfully';
		$errno = 200;
	}	else {
		$error = 'Deleted record no longer exist';
		$errno = 300;
	}
	
}

$size = sql_count($db_con, $tb);
$pager = new Pager($size);
$sql_stmt = 'SELECT * FROM `'.$tb.'` ORDER BY surname ASC '.$pager->clause;
$db_res = sql_query($db_con, $sql_stmt);

if (is_array($db_res))
{		
	$sn = $pager->off; $row = ''; $rows = '';	
	foreach ($db_res as $key => $value)
	{
		$sn += 1;
		$email_buf = strlen($value['email']) >= 7? '<a href="mailto:'.$value['email'].'">'.$value['email'].'</a>': 'N/A';
		
		$row = '<tr>
			<td>
				<button class="btn btn-alt" onClick="onView('.$value['ID'].')" title="View">&#128065;</button>							
			</td>
			<td>'. $sn .'</td>			
			<td nw>'. strtoupper($value['surname']) .'</td>
			<td nw>'. ucwords($value['fname'].' '.$value['mname']) .'</td>
			<td>'. $value['sex'] .'</td>
			<td>'. $value['dob'] .'</td>		
			<td>'. $value['phone'] .'</td>
			<td>'. $value['address'] .'</td>			
			<td>'. enum_f(Lists::STATE, $value['state']) .'</td>
			<td>'. $value['lgo'] .'</td>
			<td>'. $value['edu'] .'</td>								
			<td>'. date_f($value['reg_date']) .'</td>
			<td nw ar>
				<button class="btn btn-pri" onClick="onEdit('.$value['ID'].')" title="Edit">&#9998;</button> 
				<button class="btn btn-sec" onClick="onDelete('.$value['ID'].')" title="Delete">&#10006;</button>
			</td>
		</tr>';

		$rows .= $row;
	}
}

$enum_user = Main::bios($db_con);
$ddl_user = Enums::option($enum_user, $_POST['q']);
?>