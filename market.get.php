<?php include 'config.php'; /// Method Profile get
$url = "https://newapi.asterios.ws/api/v23/method/market.getMyItems";
$post_data = array (
 
    "accountId" => $accountId,
    "accessToken" => $accessToken,
    "itemId" => $_GET['getmarket_itemId'],
);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
$output = curl_exec($ch);
curl_close($ch);
$market_json = json_decode($output, true);
?>    
<?php
    $market_itemCount = $market_json["itemCount"];
    $market_itemId = $market_json["itemId"];

?>