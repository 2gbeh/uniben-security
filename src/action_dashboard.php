<?PHP
$tb = 'user';
$row = sql_select_all($db_con, $tb);
$size = count($row);

# AGE DEMO
$bar_labels = array('0 – 12','13 – 18','19 – 44','45 – 64','65 >');
$bar_values = array(0,0,0,0,0);
foreach ($row as $assoc) {
	$yob = date('Y', strtotime($assoc['dob']));
	$age = date('Y') - (int) $yob;
	
	if ($age <= 12)
		$bar_values[0] += 1;
	else if ($age >= 13 && $age <= 18)
		$bar_values[1] += 1;
	else if ($age >= 19 && $age <= 44)
		$bar_values[2] += 1;
	else if ($age >= 45 && $age <= 64)
		$bar_values[3] += 1;
	else // > 65
		$bar_values[4] += 1;
}

# SEX DEMO
$male_int = sql_select_count($db_con, $tb, 'sex', 'M');
$ring_rate_sex = round(($male_int * 100) / $size);

# ICT DEMO
$ict_int = sql_select_count($db_con, $tb, 'ict', 1);
$ring_rate_ict = round(($ict_int * 100) / $size);


# SOO DEMO
$states = Lists::STATE;
$col_labels = $col_values = array();
$i = 0;
foreach ($states as $key => $value) {
	$sub = substr($value,0,3);
	array_push($col_labels, strtoupper($sub));	
	
	$sql_stmt = 'SELECT COUNT(ID) AS var FROM `'.$tb.'` WHERE state="'.$key.'"';
	$result = sql_query($db_con, $sql_stmt);		
	$count = (int) $result[0]['var'];	
	array_push($col_values, $count);
}
array_shift($col_labels);
array_shift($col_values);
?>