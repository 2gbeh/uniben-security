<?PHP
class Main
{
	public static function bio ($db_con, $id) {
		$row = self::bios($db_con);
		return $row[$id];
	}
	
	public static function bios ($db_con) {
		$tb = 'user';
		$arr = array();
		$db_res = sql_select_all($db_con, $tb);
		foreach ($db_res as $row) {
			$id = $row['ID'];
			$arr[$id] = strtoupper($row['surname']).', '.ucwords($row['fname'].' '.$row['mname']).' ('.$row['sex'].')';
		}
		return $arr;
	}
	
	public static function sub_dir ($post, $dir = 'uploads/') {
		$names = strtolower($post['surname'].'_'.$post['fname'].'_'.$post['mname']);
		return $dir . $names . '/';
	}
}
$new_main = new Main();
?>