<?php

require_once __DIR__.'/public/index.php';

use App\Repository\Implementation\User\UserRepository;

try {
	$userRepo = new UserRepository;
	$user = $userRepo->findById(2);
	print_r($user);

} catch (\Exception $e) {
	echo $e->getMessage();
	echo '<br/>';
	echo $e->getCode();
	echo '<br/>';
	dump($e);
}


// use App\Database\Connection;

// $connectionObj =  Connection::getInstance();
// $connection = $connectionObj->getConnection();

// $sql = "SELECT * FROM users WHERE id =1";

// $dbStatement = $connectionObj->prepareStatement($sql);

// $dbStatement->execute();
// // $result = $dbStatement->get_result();
// $result = $connectionObj->getResult();
// // print_r($result);
// while($row= $result->fetch_assoc()) {
// 	print_r($row);
// }
// die;




//connecting to the database
// $db = new Mysqli(
// 			$config['DB']['connections']['mysql']['host'],
// 			$config['DB']['connections']['mysql']['user'],
// 			$config['DB']['connections']['mysql']['password'],
// 			$config['DB']['connections']['mysql']['database'],
// 			$config['DB']['connections']['mysql']['port']
// 		);

// if($db->connect_error) {
// 	throw new \Excception("connection to database failed.");	
// }

// var_dump($db);

//$sql = "INSERT INTO departments (name, code) VALUES (?, ?)";
// $dbStatement = $db->prepare($sql);

// $dbStatement->bind_param("ss", $deparmentName, $departmentCode);

// $deparmentName = 'Web Deparment';
// $departmentCode = 'web';

// $dbStatement->execute();

// $deparmentName = 'Academy Deparment';
// $departmentCode = 'ahq';
// $dbStatement->execute();

// $dbStatement->close();

// echo '<br/>';
// echo "New recorded inserted into department table";
// $db->close();



// $stmp->execute();

// $result = $stmp->get_result();

// while($row= $result->fetch_assoc(MYSQL_ASSOC)) {
// 	print_r($row);
// }