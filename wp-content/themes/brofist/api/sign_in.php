<?php

function signIn()
{
    $data['partner_user'] = $_POST;
    $json = json_encode($data);
    try {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, "https://admin.brofist.partners/api/client/partner/sign_in");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HEADER, 1);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $data = curl_exec($ch);
        $result = json_decode($data, true);
        if (isset($result['error'])) {
            echo json_encode($result);
            die();
        }

        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $data, $matches);
        $cookies = array();
        foreach($matches[1] as $item) {
            parse_str($item, $cookie);
            $cookies = array_merge($cookies, $cookie);
        }
        setcookie( "_session_id", $cookies['_session_id'], time()+(60*60*24*30) );

        die();
//        echo json_encode(['status'=>'201']);
//        die();
    } catch (Exception $exception) {

    }

}

signIn();

//function signIn(){
//    $data['partner_user'] = [
//        'email'=>'onyeganyan@mail.ru',
//        'password'=>'12345678'
//    ];
//    $json = json_encode($data);
//    $ch = curl_init();
//    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
//    curl_setopt($ch, CURLOPT_URL, "https://admin.brofist.partners/api/client/partner/sign_in");
//    curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
//    $result = curl_exec($ch);
//
//// Matching the response to extract cookie value
//    preg_match_all('/^Set-Cookie:\s*([^;]*)/mi',
//        $result,  $match_found);
//
//    $cookies = array();
//    foreach($match_found[1] as $item) {
//        parse_str($item,  $cookie);
//        $cookies = array_merge($cookies,  $cookie);
//    }
//    print_r($cookies);
//    die();
//    curl_close($ch);
//}
//
//signIn();


//function signIn()
//{
//    $data['partner_user'] = $_POST;
//    $json = json_encode($data);
//    try {
//        $ch = curl_init();
//
//        curl_setopt($ch, CURLOPT_URL, "https://admin.brofist.partners/api/client/partner/sign_in");
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//        curl_setopt($ch, CURLOPT_POST, 1);
//        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
//        curl_setopt($ch, CURLOPT_HEADER, 1);
//        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
//        $data = curl_exec($ch);
//        $result = json_decode($data, true);
//        var_dump($data);
//        if (isset($result['errors'])) {
//            echo json_encode($result);
//            die();
//        }
//        echo json_encode(['status'=>'201']);
//        die();
//
//    } catch (Exception $exception) {
//
//    }
//
//}
//
//signIn();