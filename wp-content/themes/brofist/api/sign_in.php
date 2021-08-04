<?php

function signIn($data = NULL)
{
    $data['partner_user'] = $_POST;
    $json = json_encode($data['partner_user']);
    $url = "admin.brofist.partners/api/client/partner/sign_in";
    try {
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HEADER, 0);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT, TRUE);
        curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json', 'Accept: application/json'));
        $data = curl_exec($ch);
        $statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);

        session_start();
        session_regenerate_id();

        echo $statusCode;

        session_write_close();

        curl_close($ch);
        return $data;

//        if (!isset($result['error'])) {
//            echo json_encode($result);
//
//
//            die();
//        } else {
//            echo $result['error'];
//            die();
//        }
    } catch (Exception $exception) {

    }
}
signIn();

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
//        if (isset($result['error'])) {
//            echo json_encode($result);
//            die();
//        }
//
//        session_start();
//        session_regenerate_id();
//        preg_match_all('/^Set-Cookie:\s*([^;]*)/mi', $data, $matches);
//        $cookies = array();
//        foreach($matches[1] as $item) {
//            parse_str($item, $cookie);
//            $cookies = array_merge($cookies, $cookie);
//        }
//        setcookie( "_session_id", $cookies['_session_id'], time()+(60*60*24*30) );
//        session_write_close();
//
//        echo json_encode(['status'=>'201']);
//        json_encode($cookies);
//    } catch (Exception $exception) {
//
//    }
//}
//signIn();

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


