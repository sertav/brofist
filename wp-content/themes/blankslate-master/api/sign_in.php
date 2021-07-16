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
        curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
        $data = curl_exec($ch);
        $result = json_decode($data, true);
        if (isset($result['error'])) {
            echo json_encode($result);
            die();
        }
        echo json_encode(['status'=>'201']);
        die();
    } catch (Exception $exception) {

    }

}

signIn();

