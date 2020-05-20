<?php

require_once __DIR__.'/public/index.php';

use App\Database\Connection;

$connectionObj =  Connection::getInstance();
$connection = $connectionObj->getConnection();

// echo "--------------------------------------------------------------------------------------------------";
// echo "<br/>";
// echo "starting database connection";
// echo '<br/>';
// echo "--------------------------------------------------------------------------------------------------";
// echo '<br/>';
// echo "Dumping connection Object";
// echo '<br/>';
// var_dump($connection);
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "Insert data to the table";
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';


// $sql = "INSERT INTO departments (name, code) VALUES (?, ?)";

// $dbStatement = $connectionObj->prepareStatement($sql);

// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "preparing the database for the sql statement";
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';

// $dbStatement->bind_param("ss", $deparmentName, $departmentCode);

// $deparmentName = 'support';
// $departmentCode = 'support';

// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "Inserting one record in the database.";
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';
// $result1 = $connectionObj->execute();

// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "Output of the first result. Bool value";
// echo '<br/>';
// echo $result1;
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';


// $departmentCode = 'adfa';
// $deparmentName = 'asasdf';
// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "Inserting second record in the database.";
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';

// $result2 = $connectionObj->execute();

// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "Output of the first result. Bool value";
// echo '<br/>';
// echo $result2;
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';




// $statement = $connectionObj->closeStatement();

// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "preparing the close the sql statement. Bool value";
// echo '<br/>';
// echo $statement;
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';

// $db = $connectionObj->close();
// echo '----------------------------------------------------------------------------------------------------';
// echo '<br/>';
// echo "preparing the close the database connection. Bool value";
// echo '<br/>';
// echo $db;
// echo '<br/>';
// echo '----------------------------------------------------------------------------------------------------';


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