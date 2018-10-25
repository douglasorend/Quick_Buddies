<?php
global $smcFunc, $sourcedir;

// If SSI.php is in the same place as this file, and SMF isn't defined, this is being run standalone.
if (file_exists(dirname(__FILE__) . '/SSI.php') && !defined('SMF'))
	require_once(dirname(__FILE__) . '/SSI.php');
// Hmm... no SSI.php and no SMF?
elseif (!defined('SMF'))
	die('<b>Error:</b> Cannot install - please verify you put this in the same place as SMF\'s index.php.');
require($sourcedir.'/Subs-Admin.php');

updateSettings(
	array(
		'qb_on_messageindex' => 1, 
		'qb_on_boardindex' => 1,
		'qb_on_display' => 1,
		'qb_on_memberlist' => 1,
		'qb_on_followers' => 1,
	)
);

?>