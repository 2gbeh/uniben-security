<?PHP
# 
$db_con = connect_db(USERNAME, PASSWORD, DATABASE);

# 
Anum::main(HOSTED);

# 
$sizeof_user = sql_count($db_con, 'user');

#


#
$list_nav = array(
	'Dashboard' => array(),
	'Home' => array(
		array('?r=true&q=sales', 'fa fa-list', 'Book Supply'),
		array('?r=true&q=credits', 'fa fa-list', 'Book Return')
	),	
	'Add Employee' => array(
		array('add_user.php', 'fa fa-plus', 'Add New'),
		array('view_users.php', 'fa fa-list', 'View Records')
	),	
	'Manage Employees' => array(
		array('add_user.php', 'fa fa-plus', 'Add New'),
		array('view_users.php', 'fa fa-list', 'View Records')
	),
	'Employee Profile' => array(
		array('add_user.php', 'fa fa-plus', 'Add Employee'),
		array('view_users.php', 'fa fa-list', 'View Employees')
	),
	'My Account' => array(
		array('profile.php', 'fa fa-user-alt', 'Profile Info'),
		array('settings.php', 'fa fa-user-edit', 'Update Password')
	),	
	'Admin Account' => array(
		array('add_admin.php', 'fa fa-plus', 'Add New'),
		array('view_admins.php', 'fa fa-list', 'View Records')
	),
	'Help Desk' => array(
		array('add_ticket.php', 'fa fa-plus', 'Add New'),
		array('view_tickets.php', 'fa fa-list', 'View Records')
	),
);

$list_aside_top = array(
	array('dashboard.php', 'fa fa-chart-area', 'Dashboard'),
//	array('home.php', 'fa fa-home', 'Home'),
	array('add_user.php', 'fas fa-user', 'Add Employee'),
	array('view_users.php', 'fas fa-user-friends', 'Manage Employees', $sizeof_user),	
);

$list_aside_bell = '<img src="img/bell.png" alt="" />';
$list_aside_end = array(
	array('profile.php', 'fa fa-user-cog', 'My Account'),
	array('view_admins.php', 'fa fa-users-cog', 'Admin Account', $sizeof_admin),
	array('view_tickets.php', 'fas fa-exclamation-triangle', 'Help Desk', $list_aside_bell),
	array(WEBMAIL, 'fas fa-inbox', 'Access Webmail'),
	array(CPANEL, 'fa fa-server', 'Access cPanel'),
	array(INDEX, 'fa fa-globe', 'Visit Website')
);

?>