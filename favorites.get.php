<?php include 'config.php'; /// Method Profile get
$url = "https://newapi.asterios.ws/api/v23/method/favorites.get";
$post_data = array (
    "clientId" => '1743',
    "accountId" => $accountId,
    "accessToken" => $accessToken,
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
$favorites_json = json_decode($output, true);
?>    
<?php
    $favorites_lastItemId = $favorites_json["itemId"];
    $favorites_imgUrl = $favorites_json["items"][$_GET['fv_numb']]['imgUrl'];
    $favorites_Id = $favorites_json["saved_images"][$_GET['fv_numb']]['id'];
    $favorites_Date = $favorites_json["saved_images"][$_GET['fv_numb']]['date'];
    $favorites_FromUserId = $favorites_json["saved_images"][$_GET['fv_numb']]['fromUserId'];
    $favorites_TimeAgo = $favorites_json["saved_images"][$_GET['fv_numb']]['timeAgo'];
    $favorites_Post = $favorites_json["saved_images"][$_GET['fv_numb']]['post'];
?>
