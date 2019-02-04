<?php 

function dbconn(){
	$host ='localhost';
	$user = 'root';
	$pass = '';
	$dbname = 'dd_db';
	$conn;
	try {
		$conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);
	} catch (PDOException $e) {
		echo 'Connection Error' . $e -> getMessage();
	}

	return $conn;
}

function viewAllClients(){
	$conn = dbconn();
	$sql="SELECT * FROM CLIENT ORDER BY client_id DESC";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	$rows=$stmt->fetchAll();
	$conn=null;
	return $rows;
}


function viewAllDesigners(){
	$conn = dbconn();
	$sql="SELECT * FROM DESIGNER ORDER BY des_id DESC";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	$rows=$stmt->fetchAll();
	$conn=null;
	return $rows;
}


function viewAllProjects(){
	$conn = dbconn();
	$sql="SELECT * FROM PROJECT ORDER BY proj_id DESC";
	$stmt=$conn->prepare($sql);
	$stmt->execute();
	$rows=$stmt->fetchAll();
	$conn=null;
	return $rows;
}

function registerClient($username, $password,$name, $email,$phone,$company){
	$conn = dbconn();
	$sql="INSERT INTO CLIENT(client_username,client_pass,client_name,client_email,client_phone,client_company) VALUES(?,?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($username, $password,$name, $email, $phone, $company));
	$conn=null;
}

function registerDesigner($username, $password,$name, $email){
	$conn = dbconn();
	$sql="INSERT INTO DESIGNER(des_username,des_pass,des_name,des_email) VALUES(?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($username, $password,$name, $email));
	$conn=null;
}

function login($username, $pass)
	{
		$db = dbconn();
		$sql = "SELECT * FROM CLIENT WHERE client_username = ? AND client_pass = ?";
		$s = $db->prepare($sql);
		$s->execute(array($username, $pass));
		$users = $s->fetch();
		$db = null;
		return $users;
	}

function postproj($client_id,$proj_name,$proj_desc,$proj_category,$proj_files,$proj_package){
	$conn = dbconn();
	$sql="INSERT INTO PROJECT(client_id,proj_name,proj_desc,proj_category,proj_files,proj_package) VALUES(?,?,?,?,?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($client_id,$proj_name,$proj_desc,$proj_category,$proj_files,$proj_package));
	$conn=null;
}



function viewNote($noteID){
	$conn = dbconn();
	$sql="SELECT * FROM tbl_notes WHERE noteID=?";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($noteID));
	$row=$stmt->fetch();
	$conn=null;
	return $row;
}

function deleteNote($noteID){
	$conn = dbconn();
	$sql="DELETE FROM tbl_notes WHERE noteID=?";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($noteID));
	$conn=null;
}

/*function addNote($noteTitle, $noteContent){
	$conn = dbconn();
	$sql="INSERT INTO tbl_notes(noteTitle,noteContent) VALUES(?,?)";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($noteTitle, $noteContent));
	$conn=null;
}

function editNote($noteTitle, $noteContent, $noteID){
	$conn = dbconn();
	$sql="UPDATE tbl_notes SET noteTitle=?,noteContent=? WHERE noteID=?";
	$stmt=$conn->prepare($sql);
	$stmt->execute(array($noteTitle, $noteContent, $noteID));
	$conn=null;
}*/

?>