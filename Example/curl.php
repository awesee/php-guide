<?php

    $post_url = "";
    $post_data = array(
                    "id"=>245,
                    "name"=>2
                 );
    $headers = array(
        "Content-type: application/json;charset='utf-8'",
        "Accept: application/json",
        "Cache-Control: no-cache",
        "Pragma: no-cache",
        "Cookie: " . $_SESSION['mobile_module']['rest_cookie']
    );
    // $strCookie="uid=1";
    header("content-type:text/html;charset='utf-8'");
    session_start(); 
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_HEADER, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $post_data);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    // curl_setopt($ch, CURLOPT_COOKIE, $strCookie);

    $result = curl_exec($ch);
    $headerSize = curl_getinfo($ch, CURLINFO_HEADER_SIZE);
    $header = substr($result, 0, $headerSize);
    $body = substr($result, $headerSize);
    preg_match('/Set-Cookie:(.*);/iU', $header, $str); // 正则匹配
    $cookie = trim($str[1]);
    if ($cookie) {
        $_SESSION['mobile_module']['rest_cookie'] = $cookie;
    }
    curl_close($ch);
    
    session_write_close(); 
