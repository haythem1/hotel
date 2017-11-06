<?php 
/*
* Batileads configuration file v1.0
* 
*/

$GLOBALS['config'] = array(
	"database" 	=> array(
		"driver" 		=> "mysql",
		"host" 		=> "localhost",
		"user" 		=> "chaabaneimmo14",
		"password" 	=> "PekxU_7tH2",
		"db" 		=> "chaabaneimmo14",
		"charset" 	=> "utf8"
	),										
	'remember' 	=> array(
		'cookie_name' 	=> 'hash',
		'cookie_expiry'	=> 	604800 //per second that means 7 days
		), //how long do we want to remember the user if he checked remember me
	'remember_client' 	=> array(
		'cookie_name' 	=> 'hash_client',
		'cookie_expiry'	=> 	604800 //per second that means 7 days
		),
	'remember_clientb2b' 	=> array(
		'cookie_name' 	=> 'hash_clientb2b',
		'cookie_expiry'	=> 	604800 //per second that means 7 days
		),
	'session' 	=> array(
		'session_name'	=> 'user',
		'token_name'	=> 'token'
		),
	'session_b2b' 	=> array(
		'session_b2b_name'	=> 'userb2b',
		'token_b2b_name'	=> 'token'
		),
	'session_user' 	=> array(
		'session_user_name'	=> 'client',
		'token_user_name'	=> 'token'
		),
	'session_userb2b' 	=> array(
		'session_userb2b_name'	=> 'clientb2b',
		'token_userb2b_name'	=> 'token'
		),
	'visitor' => array(
			'cookie_name' => 'visitor',
			'cookie_expiry' => (365 * 24 * 60 * 60)
		)
	
);

/**
* Config class v1.0
*/
class Config
{	
	public static function get($path = null) {
		if($path){
			$config = $GLOBALS['config'];
			$path = explode('/', $path);

			foreach ($path as $bit) {
				if(isset($config[$bit]));
				$config = $config[$bit];
			}

			return $config;
		}

		return false;
	}
}

?>