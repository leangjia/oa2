<?php
/*
	[PHPOA] (C) 2011-2014 天生创想 Inc.
	$Id: function_workbench.php 1209087 2014-01-08 08:58:28Z phpoa $
*/
!defined('IN_TOA') && exit('Access Denied!');
//
function workbench_registadd($rid,$hour,$number,$type){
		global $_USER;
  		$registration_log = array(
			'rid' => $rid,
			'hour' => $hour,
			'number' => $number,
			'type' => $type
		);
		insert_db('registration_log',$registration_log);
		return ;
}
?>