<?
//require_once "contact_save.php";
function cn2db($apParam)
{
	try{
//			
			$sfn ="cn2db : config2.php";
			$servername ="localhost";
			$username="root";
			$password="root";
			$dbname="testing";

// Create connection
			$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
			if(!$conn){
			die("Connection failed: ".mysqli_connect_error());
			}	
			return $conn;	
		}//end of try
		catch(Exception $e){
		}	//end of catch
		}	//end of cn2db
	?>	