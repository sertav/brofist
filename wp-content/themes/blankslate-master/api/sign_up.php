<?php


function test()
{
    var_dump($_POST);
    die();
//    {"partner_user":{"company_name":"Eugene Ratke","email":"velda@simonis.org","password":"topsecret","password_confirmation":"topsecret","terms_accepted":true,"skype":"trully_my_skype"}}


    $data['partner_user'] = $_POST;
    $json = json_encode($data);

    try {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, "https://admin.brofist.partners/api/client/partner/");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $json);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $data = curl_exec($ch);
        $result = json_decode($data,true);
        if(isset($result['errors'])){
           return $result;
        }

//        header('Location: https://admin.brofist.partners/partner/dashboard');
//        print_r($result);
    } catch (Exception $exception) {

    }

}

test();