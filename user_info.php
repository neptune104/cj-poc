<?php
header('Content-Type: application/json');

//json encode 변환
echo json_encode(
    array(
        array('name' => '김현일'
		, 'id' => 'hyunil92'
		, 'country' => 'Korea'
		, 'company' => 'CJ OliveNetworks'
		, 'email' => 'hyunil.kim3@cj.net'
		, 'token' => '10010')
     
    )
);

?>