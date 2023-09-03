<?PHP
$tb = 'admin'; 

if ($_GET['d'] == true)
{
	$db_res = sql_delete($db_con, $tb, 'ID', $_GET['q']);
	
	if ($db_res > 0) {
		//Main::keylog($db_con,4);
		
		$error = 'Record deleted successfully';
		$errno = 200;
	} else {
		$error = 'Deleted record no longer exist';
		$errno = 300;
	}
}

$size = sql_count($db_con, $tb);
$pager = new Pager($size, 15);
$sql_stmt = 'SELECT * FROM `'.$tb.'` ORDER BY id ASC '.$pager->clause;

$db_res = sql_query($db_con, $sql_stmt);

if (is_array($db_res))
{		
	$sn = $pager->off; $row = ''; $rows = '';	
	foreach ($db_res as $key => $value)
	{
		$sn += 1;		
		$email = $value['email']? '<a href="mailto:'.$value['email'].'">'.$value['email'].'</a>': 'N/A';
		
		$row = '<tr>
			<td>'. $sn .'</td>
			<td nw>'. ucwords($value['names']) .'</td>
			<td>'. $value['gender'] .'</td>						
			<td>'. $value['username'] .'</td>
			<td>' .$email. '</td>
			<td>'. null_f($value['phone']) .'</td>			
			<td>'. enum_f(Lists::ADMIN, $value['access']) .'</td>			
			<td>'. date_f($value['DATE']) .'</td>
			<td>'. time_f($value['DATE']) .'</td>
			<td nw ar>
				<button class="btn btn-pri" onClick="onEdit('.$value['ID'].')" title="Edit">&#9998;</button> 
				<button class="btn btn-sec" onClick="onDelete('.$value['ID'].')" title="Delete">&#10006;</button>
			</td>
		</tr>';

		$rows .= $row;
	}
}
?>