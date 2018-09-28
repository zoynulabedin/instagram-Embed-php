<?php
            
$token = get_user_meta( get_current_user_id(), 'instagram_token', true);

$url = 'https://api.instagram.com/v1/users/self/media/recent/?access_token=' . $token;

try {
	$curl_connection = curl_init($url);
	curl_setopt($curl_connection, CURLOPT_CONNECTTIMEOUT, 30);
	curl_setopt($curl_connection, CURLOPT_RETURNTRANSFER, true);
	curl_setopt($curl_connection, CURLOPT_SSL_VERIFYPEER, false);
	
	//Data are stored in $data
	$data = json_decode(curl_exec($curl_connection), true);
	curl_close($curl_connection);
} catch(Exception $e) {
	return $e->getMessage();
}
echo "<div class='instagram-gallery'>";
echo '<div class="insta-list">';


foreach( $data['data'] as $data){
    echo "<div class='insta-list-item'><img src=\"{$data['images']['standard_resolution']['url']}\"></div>";
}


echo '</div>';
echo "</div>";

?>