<?PHP
Context::set(NULL,'index.php');

Context::set('Dashboard','dashboard.php');

Context::set('Home','home.php');

Context::set('View Employees','view_users.php');
Context::set('View Employee','view_user.php');
Context::set('Edit Employee','edit_user.php');
Context::set('Add Employee','add_user.php');

Context::set('Profile','profile.php');

Context::set('Settings','settings.php');

Context::set('View Admins','view_admins.php');
Context::set('Add Admin','add_admin.php');

Context::set('View Tickets','view_tickets.php');
Context::set('Add Ticket','add_ticket.php');

Context::set('Software License Expired!','anum.php');

//Context::map();
extract(Context::get());
?>
