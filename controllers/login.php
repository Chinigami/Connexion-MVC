<?php
	include_once(views/vlogin.php);
	
	include_once(models/musers.php);
	
	$users=users($_POST(login), $_POST(pw));
	
	if($users['usergroup'] = 1)
	{
		include_once(controllers/admin.php);
	}
	elseif($users['usergroup'] = 2)
	{
		include_once(controllers/resp.php);
	}
	elseif($users['usergroup'] = 3)
	{
		include_once(controllers/cont.php);
	}
	else
	{
		include_once(views/v404.php);
	}
