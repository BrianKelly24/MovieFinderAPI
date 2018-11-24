<?php
    
    session_destroy();
    session_start();
    include 'dbHandler.php';
    
    $first = $_POST['first'];
    $last = $_POST['last'];
    $email = $_POST['email'];
    $uid = $_POST['uid'];
    $enc = md5($POST['pwd']);
    $pwdUpdate = md5($POST['pwdUpdate']);
    $src = $_POST['srcUpdate'];
    
    if(isset($_POST['signup']))
	{
		$sql = "INSERT INTO user (first, last, email, uid, pwd)
		VALUES ('$first', '$last', '$email', '$uid', '$enc')";

		$result = mysqli_query($conn, $sql);
		
		header("Location: ../index.php");
		
        //check for empty fields
        if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($enc))
        {
        	$_SESSION['signupErrorEmpty'] = "";
        	
        	header("Location: signup.php");
        }
  
	}
	
	/*if(isset($_POST['signup'])) z{
		$sql = "INSERT INTO user (first, last, email, uid, pwd)
		VALUES ('$first', '$last', '$email', '$uid', '$enc')";

		$first = mysqli_real_escape_string($conn, $_POST['first']);
		$last = mysqli_real_escape_string($conn, $_POST['last']);
		$email = mysqli_real_escape_string($conn, $_POST['email']);
		$uid = mysqli_real_escape_string($conn, $_POST['uid']);
		$enc = mysqli_real_escape_string($conn, md5($_POST['pwd']));
        
        //check for empty fields
        if(empty($first) || empty($last) || empty($email) || empty($uid) || empty($enc)) {
        	header("Location: ../signup.php?signup=empty");
			exit();
        }else {
        	if(!preg_match("/^[a-zA-Z]*$", $first || !preg_match("/^[a-zA-Z]*$", $last)) {
        		header("Location: ../signup.php?signup=invalid");
				exit();
        	}else {
        		if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        			header("Location: ../signup.php?signup=email");
        			exit();
        		}
        	}
        }
	}else {
		header("Location: ../signup.php");
		exit();
	}*/
	
	if(isset($_POST['update']))
	{
	    $sql = "UPDATE user
	    SET pwd = '$pwdUpdate'
	    WHERE uid = '$uid' AND pwd = '$pwd'";
	    
	    $result = mysqli_query($conn, $sql);
	    
	    header("Location: ../favourites.php");
	}
	
	if(isset($_POST['avatar']))
	{
	    $sql = "UPDATE user
	    SET src = '$src'
	    WHERE uid = '$uid' AND pwd = '$enc'";
	    
	    $result = mysqli_query($conn, $sql);
	    
	    header("Location: ../favourites.php");
	}
	
	if(isset($_POST['delete']))
	{
	    $sql = "DELETE FROM user
	    WHERE uid = '$uid' AND pwd = '$enc'";
	    
	    $result = mysqli_query($conn, $sql);
	    
        session_destroy();
	    
	    header("Location: ../index.php");
	}
	
	if(isset($_POST['login']))
	{
	    $sql = "SELECT * FROM user WHERE uid='$uid' AND pwd='$enc'";
	    
	    $result = mysqli_query($conn, $sql);
	    
	    header("Location: ../index.php");
	    
	    if(!$row = mysqli_fetch_assoc($result))
	    { 
	        $_SESSION['loginError'] = "";
	        
	        header("Location: login.php");
	    }
	    else
	    {
	        $_SESSION['uid'] = $row['uid'];
	        $_SESSION['src'] = $row['src'];
	        $_SESSION['email'] = $row['email'];
	        $_SESSION['pwd'] = $row['pwd'];
	        
	        header("Location: ../index.php");
	    }
	}
    
?>