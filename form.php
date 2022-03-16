<?php
header("Access-Control-Allow-Origin: *");
if (isset($_GET['text']) AND isset($_GET['id']) AND isset($_GET['token'])) {
   $text=$_GET['text'];
   $id=$_GET['id'];
   $token=$_GET['token'];
   $webhookurl= "https://discordapp.com/api/webhooks/$id/$token";
   $json_data = json_encode([
      "content" => "$text"
   ], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );

   $ch = curl_init( $webhookurl );
   curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
   curl_setopt( $ch, CURLOPT_POST, 1);
   curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
   curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
   curl_setopt( $ch, CURLOPT_HEADER, 0);
   curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

   $response = curl_exec( $ch );
   curl_close( $ch );
   echo "Sukses mengirim pesan ke discord";
} else {
   echo "VARIABLE BELUM DISET";
}
?>