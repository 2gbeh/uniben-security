<?PHP
// CONSTANTS
define('APPNAME', 	'UNIBEN Security Department');
define('ALIAS', 		'UNIBEN SEC DPT');
define('CAPTION', 	'');
define('COMPANY', 	'University of Benin');
define('SUMMARY', 	'Welcome to University of Benin (UNIBEN). P.M.B 1154 Ugbowo-Lagos Road, Benin City, Edo State, Nigeria.');
define('KEYWORDS', 	'university of benin,uniben,security department,imonah emmanuel,hwp labs,tugbeh emmanuel');
define('COPYRIGHT',	'Copyright &copy; 2021 '.COMPANY);
define('EMAIL',			'info@uniben.edu');
define('EMAIL_2',		'');
define('PHONE',			'09037845681');
define('PHONE_2',		'08075952272');
define('PHONE_3',		'08176505860');
define('ADDRESS',		'P.M.B 1154 Ugbowo-Lagos Road, Benin City, Edo State, Nigeria.');
define('THEME_PRI',	'#910299');
define('THEME_SEC',	'');
define('THEME_ALT',	'');

// APACHE
define('SERVER', 		'usec');
define('DATABASE',	SERVER.'_db');
if ($_SERVER['SERVER_NAME'] == 'localhost') {
	define('USERNAME',	'root');
	define('PASSWORD',	'');
} else {
	define('USERNAME',	SERVER.'_root');
	define('PASSWORD', 	'_Strongp@ssw0rd');
}

// ISP
define('INDEX', 		'index.php');
define('DOMAIN', 		'hwplabs.com.ng');
define('CPANEL', 		'#https://'.DOMAIN.'/cpanel');
define('WEBMAIL', 	'#https://'.DOMAIN.'/webmail');;
define('WEBMAIL_1',	'info@'.DOMAIN);
define('WEBMAIL_2',	'support@'.DOMAIN);
define('WEBMAIL_3',	'admin@'.DOMAIN);
define('VERSION',		'3.20.1.21');
define('HOSTED',		'2021-01-20');
define('REVISED',		'2022-01-19');

// META TAGS
$m = array();
$m['author'] =					'HWP Labs';
$m['classification'] = 	'Enterprise Application Software';
$m['copyright'] = 			date('Y');
$m['coverage'] = 				'Nigeria';
$m['description'] = 		SUMMARY;
$m['designer'] = 				'Tugbeh, E.O.';
$m['keywords'] = 				KEYWORDS;
$m['language'] = 				'en';
$m['owner'] = 					COMPANY;
$m['reply_to'] = 				WEBMAIL_1;
$m['revised'] = 				REVISED;
$m['robots'] = 					'index,follow';
$m['theme_color'] = 		THEME_PRI;
$m['url'] = 						'https://'.DOMAIN.'/';
$m['viewport'] = 				! isset($page_ctx_viewport)? '': 'width=device-width, initial-scale=1.0';
$m['title'] = 					! isset($page_ctx_title)? APPNAME: $page_ctx_title.' - '.ALIAS;
$META = (object)$m;
?>