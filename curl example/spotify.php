<?php
//step1
$cSession = curl_init();

//step2
curl_setopt($cSession,CURLOPT_URL,"https://api.spotify.com/v1/artists/13y7CgLHjMVRMDqxdx0Xdo");
curl_setopt($cSession,CURLOPT_RETURNTRANSFER,true);
curl_setopt($cSession,CURLOPT_HEADER, false);



curl_setopt($cSession,CURLOPT_HTTPHEADER, array(
    "Accept: application/json",
    "Content-Type: application/json",
    "Authorization: Bearer BQBmBjDtEd1LJQtdh6ITLf0J1L-ZLu8jHME_Z4yJxz1DnoBXvbbYCG4dppRCJsCS8tghzKPhGVrtFBCz-F8JpABFEuOAJ2lHP0Dxp-SRg9frGMXn_eUjlYY9JyewJHvbSZHrCNqVJTGUQ0umcnz5sEGTkct87Mk4HQ"
));

//step3
$results = curl_exec($cSession);
$err = curl_error($cSession);

//step4
curl_close($cSession);

//step5
// echo $results;

$artist =  json_decode($results);

var_dump($artist);

// echo json_decode($artist);

// var_dump($artist);

?>