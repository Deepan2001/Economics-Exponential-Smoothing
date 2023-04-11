<?php

require_once 'dbconfig.php';

class USER
{	

	private $conn;
	
	public function __construct()
	{
		$database = new Database();
		$db = $database->dbConnection();
		$this->conn = $db;
    }
	
	public function runQuery($sql)
	{
		$stmt = $this->conn->prepare($sql);
		return $stmt;
	}
	
	public function lasdID()
	{
		$stmt = $this->conn->lastInsertId();
		return $stmt;
	}
	//Registration Code 
	
	public	function register($fullName,$email,$contactNo,$password) {
		try {
			$upassword = hash( 'sha256', $password );
			$stmt = $this->conn->prepare( "INSERT INTO userregister(userName,userEmail,Mobile,userPassword) 
			                                             VALUES(:fullName1,:email1, :contactNo1,:upassword1)" );
			$stmt->bindparam( ":fullName1", $fullName );
			$stmt->bindparam( ":email1", $email );
			$stmt->bindparam( ":contactNo1", $contactNo );
			$stmt->bindparam( ":upassword1", $upassword );
			$stmt->execute();
			return $stmt;
		} catch ( PDOException $ex ) {
			echo $ex->getMessage();
		}
	}
	
	
	
	//Login Code
	public function login( $userEmail, $upass ) {
		try {
			$stmt1 = $this->conn->prepare( "SELECT * FROM userregister WHERE userEmail=:email_id" );
			$stmt1->execute( array( ":email_id" => $userEmail ) );
			$userRow = $stmt1->fetch( PDO::FETCH_ASSOC );		
			if ( $stmt1->rowCount() == 1 ) {
					if ( $userRow[ 'userPassword' ] == hash( 'sha256', $upass ) ) {	
					$_SESSION[ 'userSession' ] = $userRow[ 'userEmail' ];
						return true;
					} else {
						header( "Location: index.php?notAvail" );
						exit;
					}
					
				
			} else {
				header( "Location: index.php?error" );
				exit;
			}
		} catch ( PDOException $ex ) {
			echo $ex->getMessage();
		}
	}
	
	public	function is_logged_in() {
		if ( isset( $_SESSION[ 'userSession' ] ) ) {
			return true;
		}
	}

	public	function redirect( $url ) {
		header( "Location: $url" );
	}

	public	function logout() {
		session_destroy();
		$_SESSION[ 'userSession' ] = false;
	}
	
	function send_mail( $email, $message, $subject ) {
		require_once( 'mailer/class.phpmailer.php' );
		$mail = new PHPMailer();
		$mail->IsSMTP();
		$mail->SMTPDebug = 0;
		$mail->SMTPAuth = true;
		$mail->SMTPSecure = "ssl";
		$mail->Host = "smtp.gmail.com";
		$mail->Port = 465;
		$mail->AddAddress( $email );
		$mail->Username = "your_gmail_id_here@gmail.com";
		$mail->Password = "your_gmail_password_here";
		$mail->SetFrom( 'your_gmail_id_here@gmail.com', 'Coding Cage' );
		$mail->AddReplyTo( "your_gmail_id_here@gmail.com", "Coding Cage" );
		$mail->Subject = $subject;
		$mail->MsgHTML( $message );
		$mail->Send();
	}
}