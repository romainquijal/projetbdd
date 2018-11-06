<?php
  try
  {
	  $db_config = array();
	  $db_config['SGBD']	= 'mysql';
	  $db_config['HOST']	= 'localhost';
	  $db_config['DB_NAME']	= 'projet';
	  $db_config['USER']	= 'root';
	  $db_config['PASSWORD']	= 'root';
	  $db_config['OPTIONS']	= array(
		// Activation des exceptions PDO :
		PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
		// Change le fetch mode par défaut sur FETCH_ASSOC ( fetch() retournera un tableau associatif ) :
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
	);

	$pdo = new PDO($db_config['SGBD'] .':host='. $db_config['HOST'] .';dbname='. $db_config['DB_NAME'],
	$db_config['USER'],
	$db_config['PASSWORD'],
	$db_config['OPTIONS']);
	unset($db_config);
}
catch(Exception $e)
{
	trigger_error($e->getMessage(), E_USER_ERROR);
}

?>
