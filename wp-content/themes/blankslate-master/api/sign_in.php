<?php

function test()
{
    $data = [
        'partner_user'=>[
            'email'=>'ser-tav@yandex.ru',
            'password'=>"123123Ss"
        ]
    ];

    $json = json_encode($data);

    try {

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,            "https://admin.brofist.partners/api/client/partner/sign_in" );
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1 );
        curl_setopt($ch, CURLOPT_POST,           1 );
        curl_setopt($ch, CURLOPT_POSTFIELDS,   $json );
        curl_setopt($ch, CURLOPT_HTTPHEADER,     array('Content-Type: application/json'));
        $result=curl_exec ($ch);
        print_r($result);
        die();
        header('Location: https://admin.brofist.partners/partner/dashboard');
//        print_r($result);
    }catch (Exception $exception){
        print_r($exception);
    }

}

test();