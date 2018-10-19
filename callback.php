<?php
    require_once('config.php');
    if(isset($_SESSION['accesstoken'])){
        $client->setAccessToken($_SESSION['accesstoken']);
       }
   else if (isset($_GET['code'])) {
        $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
        $_SESSION['accesstoken']=$token;
    }
    else{
        header('location:index.php');
    }
    $oauth = new Google_Service_Oauth2($client);
    $user = $oauth->userinfo->get();
    $userdata['name']=$user->name;
    $userdata['gender']=$user->gender;
    $userdata['picture']=$user->picture;
    $userdata['email']=$user->email;
    $_SESSION['user']=$userdata;
    header("location:usesrinfosignup.php");
?>