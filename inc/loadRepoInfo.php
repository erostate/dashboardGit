<?php
$url = "https://api.github.com/repos/Erostate/portfolio";

$curl = curl_init();
$authorization = "Authorization: Bearer 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";

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, ['User-Agent: My-GUI-GitHub', 'Content-Type: application/json' , $authorization ]);

$reponse = curl_exec($curl);
$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);

if ($httpCode == 200) {
    $json = json_decode($reponse);
    
    if(!empty($json)) {
        echo "<script>console.log($reponse)</script>";
    } else {
        echo "Reponse vide";
    }
} else {
    echo "Reponse : " . $reponse;
}
