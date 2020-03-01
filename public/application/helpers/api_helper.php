<?php
defined('BASEPATH') or exit('No direct script access allowed');

function exec_restAPI($method, $url, $data = null, $apiKey = null)
{
    $curl = curl_init();

    switch ($method) {
        case "POST":
            curl_setopt($curl, CURLOPT_POST, 1);
            if ($data !== null) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            } else {
                curl_setopt($curl, CURLOPT_POSTFIELDS, "{}");
            }
            break;
        case "PUT":
            curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
            if ($data !== null) {
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data));
            } else {
                curl_setopt($curl, CURLOPT_POSTFIELDS, "{}");
            }
            break;
        default:
            if ($data !== null) {
                $url = sprintf("%s?%s", $url, http_build_query($data));
            }
    }

    curl_setopt($curl, CURLOPT_URL, $url);
    if ($apiKey !== null) {
        curl_setopt($curl, CURLOPT_HTTPHEADER, array(
            'apikey: ' . $apiKey['api'],
            'empid: ' . $apiKey['empid'],
            'Content-Type: application/json'
        ));
    } else {
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    }
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    // EXECUTE:
    $result = curl_exec($curl);
    if (!$result) {
        return array(
            'status' => '500',
            'data' => [
                'message' => 'Internal Server Error'
            ]
        );
    }
    $http_status = curl_getinfo($curl, CURLINFO_HTTP_CODE);

    curl_close($curl);

    if ($http_status == 401) {
        $CI;
        $CI =& get_instance();
        $CI->load->library('session');
        $CI->session->unset_userdata(array('token', 'userid'));

        redirect('/', 'refresh');
    }

    return array(
        'status' => $http_status,
        'data' => json_decode($result, true)
    );
}
