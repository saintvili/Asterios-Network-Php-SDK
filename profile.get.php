<?php include 'config.php'; /// Method Profile get
$url = "https://newapi.asterios.ws/api/v2/method/profile.get";
$post_data = array (
    "clientId" => "1743",
    "accountId" => $accountId,
    "accessToken" => $accessToken,
    "profileId" => $accountId,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
$asterios = json_decode($output, true);
?>    
<?php
    $fullname = $asterios["fullname"];
    $normalPhotoUrl = $asterios["normalPhotoUrl"];
    $postsCount = $asterios["postsCount"];
    $likesCount = $asterios["likesCount"];
    $videosCount = $asterios["videosCount"];
    $giftsCount = $asterios["giftsCount"];
    $friendsCount = $asterios["friendsCount"];
    $location = $asterios["location"];
    $status =  $asterios["status"];
    $username = $asterios["username"];
    $birday = $asterios["day"].' /'.$asterios["month"].' /'.$asterios["year"];
    $day = $asterios["day"];
    $month = $asterios["month"];
    $year = $asterios["year"];
    $id = $asterios["id"];
?>