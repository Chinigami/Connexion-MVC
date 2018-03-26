<?php 

	function users($login, $pw)
	{
		global $connexion;

		$query = $connexion->prepare('Select username, usergroup from mvc_users where login = :login and pw = :pw');

		$query->bindParam(':login', $login, PDO::PARAM_STR, 5);
		$query->bindParam(':pw', $pw, PDO::PARAM_STR, 2);

		$query->execute();
		$users = $query->fetch();
		
		return $users;
	}
