<?php

$curl = curl_init();

curl_setopt_array($curl, [
	CURLOPT_URL => "https://google-news.p.rapidapi.com/v1/search?q=Elon%20Musk&country=US&lang=en",
	CURLOPT_RETURNTRANSFER => true,
	CURLOPT_FOLLOWLOCATION => true,
	CURLOPT_ENCODING => "",
	CURLOPT_MAXREDIRS => 10,
	CURLOPT_TIMEOUT => 30,
	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
	CURLOPT_CUSTOMREQUEST => "GET",
	CURLOPT_HTTPHEADER => [
		"x-rapidapi-host: google-news.p.rapidapi.com",
		"x-rapidapi-key: 0c2e4ca1d880496e9fa73acf7604c3f1"
	],
]);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
	echo "cURL Error #:" . $err;
} else {
	echo $response;
}
?>