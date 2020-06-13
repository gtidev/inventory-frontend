<?php
  class Functions {      
    function httprequest ($method, $url, $header = null, $body = null) {
        $cu = curl_init();
        // $headers = array(
        //   'Accept: application/json',
        //   'Content-Type: application/json',
        // );
        curl_setopt($cu, CURLOPT_URL, $url);
        curl_setopt($cu, CURLOPT_HTTPHEADER, $header);
        curl_setopt($cu, CURLOPT_HEADER, 0);
        // $body = '{}';
    
        curl_setopt($cu, CURLOPT_CUSTOMREQUEST, $method == 'get' ? 'GET' : 'POST'); 
        if ($method == 'post') curl_setopt($cu, CURLOPT_POSTFIELDS, $body);
        curl_setopt($cu, CURLOPT_RETURNTRANSFER, true);
    
        // Timeout in seconds
        curl_setopt($cu, CURLOPT_TIMEOUT, 100);
        $result = curl_exec($cu);

        // return json_decode($result);
        
        $response = json_decode($result);

        if ($response->message == 'token expired') {
          redirect(base_url('/Auth/login'));
        }

        return $response;
      }
  }
?>