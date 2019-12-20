<?php include 'config.php'; /// Method Profile get
$url = "https://newapi.asterios.ws/api/v23/method/account.getSettings";
$post_data = array (
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
$getSettings_json = json_decode($output, true);
?>    
<?php
    $getSettings_messagesCount = $getSettings_json["messagesCount"];
?>