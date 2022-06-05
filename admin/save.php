<?php
		include("includes/connect.php");

		$cat = $_POST['cat'];
		$cat_get = $_GET['cat'];
		$act = $_POST['act'];
		$act_get = $_GET['act'];
		$id = $_POST['id'];
		$id_get = $_GET['id'];

		
				if($cat == "chats" || $cat_get == "chats") {
					$sender = addslashes(htmlentities($_POST["sender"], ENT_QUOTES));
$receiver = addslashes(htmlentities($_POST["receiver"], ENT_QUOTES));
$message = addslashes(htmlentities($_POST["message"], ENT_QUOTES));
$file = addslashes(htmlentities($_POST["file"], ENT_QUOTES));
$chatstime = addslashes(htmlentities($_POST["chatstime"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `chats` (  `sender` , `receiver` , `message` , `file` , `chatstime` ) VALUES ( '".$sender."' , '".$receiver."' , '".$message."' , '".$file."' , '".$chatstime."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `chats` SET  `sender` =  '".$sender."' , `receiver` =  '".$receiver."' , `message` =  '".$message."' , `file` =  '".$file."' , `chatstime` =  '".$chatstime."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `chats` WHERE id = '".$id_get."' ");
					}
					header("location:"."chats.php");
				}
				
				if($cat == "friends" || $cat_get == "friends") {
					$useroneid = addslashes(htmlentities($_POST["useroneid"], ENT_QUOTES));
$usertwoid = addslashes(htmlentities($_POST["usertwoid"], ENT_QUOTES));
$date = addslashes(htmlentities($_POST["date"], ENT_QUOTES));
$accepted = addslashes(htmlentities($_POST["accepted"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `friends` (  `useroneid` , `usertwoid` , `date` , `accepted` ) VALUES ( '".$useroneid."' , '".$usertwoid."' , '".$date."' , '".$accepted."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `friends` SET  `useroneid` =  '".$useroneid."' , `usertwoid` =  '".$usertwoid."' , `date` =  '".$date."' , `accepted` =  '".$accepted."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `friends` WHERE id = '".$id_get."' ");
					}
					header("location:"."friends.php");
				}
				
				if($cat == "location" || $cat_get == "location") {
					$userid = addslashes(htmlentities($_POST["userid"], ENT_QUOTES));
$latitude = addslashes(htmlentities($_POST["latitude"], ENT_QUOTES));
$longitude = addslashes(htmlentities($_POST["longitude"], ENT_QUOTES));
$updated_date = addslashes(htmlentities($_POST["updated_date"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `location` (  `userid` , `latitude` , `longitude` , `updated_date` ) VALUES ( '".$userid."' , '".$latitude."' , '".$longitude."' , '".$updated_date."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `location` SET  `userid` =  '".$userid."' , `latitude` =  '".$latitude."' , `longitude` =  '".$longitude."' , `updated_date` =  '".$updated_date."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `location` WHERE id = '".$id_get."' ");
					}
					header("location:"."location.php");
				}
				
				if($cat == "password_resets" || $cat_get == "password_resets") {
					$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$token = addslashes(htmlentities($_POST["token"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `password_resets` (  `email` , `token` ) VALUES ( '".$email."' , '".$token."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `password_resets` SET  `email` =  '".$email."' , `token` =  '".$token."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `password_resets` WHERE id = '".$id_get."' ");
					}
					header("location:"."password_resets.php");
				}
				
				if($cat == "payments" || $cat_get == "payments") {
					$userid = addslashes(htmlentities($_POST["userid"], ENT_QUOTES));
$payment = addslashes(htmlentities($_POST["payment"], ENT_QUOTES));
$date = addslashes(htmlentities($_POST["date"], ENT_QUOTES));
$khaltino = addslashes(htmlentities($_POST["khaltino"], ENT_QUOTES));
$remarks = addslashes(htmlentities($_POST["remarks"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `payments` (  `userid` , `payment` , `date` , `khaltino` , `remarks` ) VALUES ( '".$userid."' , '".$payment."' , '".$date."' , '".$khaltino."' , '".$remarks."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `payments` SET  `userid` =  '".$userid."' , `payment` =  '".$payment."' , `date` =  '".$date."' , `khaltino` =  '".$khaltino."' , `remarks` =  '".$remarks."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `payments` WHERE id = '".$id_get."' ");
					}
					header("location:"."payments.php");
				}
				
				if($cat == "profiles" || $cat_get == "profiles") {
					$date = addslashes(htmlentities($_POST["date"], ENT_QUOTES));
$username = addslashes(htmlentities($_POST["username"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$phone = addslashes(htmlentities($_POST["phone"], ENT_QUOTES));
$bio = addslashes(htmlentities($_POST["bio"], ENT_QUOTES));
$notificationid = addslashes(htmlentities($_POST["notificationid"], ENT_QUOTES));
$dateofbirth = addslashes(htmlentities($_POST["dateofbirth"], ENT_QUOTES));
$profileimage = addslashes(htmlentities($_POST["profileimage"], ENT_QUOTES));
$gender = addslashes(htmlentities($_POST["gender"], ENT_QUOTES));
$chats = addslashes(htmlentities($_POST["chats"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$address = addslashes(htmlentities($_POST["address"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `profiles` (  `date` , `username` , `email` , `phone` , `bio` , `notificationid` , `dateofbirth` , `profileimage` , `gender` , `chats` , `password` , `address` ) VALUES ( '".$date."' , '".$username."' , '".$email."' , '".$phone."' , '".$bio."' , '".$notificationid."' , '".$dateofbirth."' , '".$profileimage."' , '".$gender."' , '".$chats."' , '".md5($password)."', '".$address."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `profiles` SET  `date` =  '".$date."' , `username` =  '".$username."' , `email` =  '".$email."' , `phone` =  '".$phone."' , `bio` =  '".$bio."' , `notificationid` =  '".$notificationid."' , `dateofbirth` =  '".$dateofbirth."' , `profileimage` =  '".$profileimage."' , `gender` =  '".$gender."' , `chats` =  '".$chats."' , `address` =  '".$address."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `profiles` WHERE id = '".$id_get."' ");
					}
					header("location:"."profiles.php");
				}
				
				if($cat == "users" || $cat_get == "users") {
					$name = addslashes(htmlentities($_POST["name"], ENT_QUOTES));
$email = addslashes(htmlentities($_POST["email"], ENT_QUOTES));
$password = addslashes(htmlentities($_POST["password"], ENT_QUOTES));
$role = addslashes(htmlentities($_POST["role"], ENT_QUOTES));


				if($act == "add") {
					mysqli_query($link, "INSERT INTO `users` (  `name` , `email` , `password` , `role` ) VALUES ( '".$name."' , '".$email."' , '".md5($password)."', '".$role."' ) ");
				}elseif ($act == "edit") {
					mysqli_query($link, "UPDATE `users` SET  `name` =  '".$name."' , `email` =  '".$email."' , `role` =  '".$role."'  WHERE `id` = '".$id."' "); 
					}elseif ($act_get == "delete") {
						mysqli_query($link, "DELETE FROM `users` WHERE id = '".$id_get."' ");
					}
					header("location:"."users.php");
				}
				?>