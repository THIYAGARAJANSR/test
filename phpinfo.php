<?php 
// echo phpinfo();

// print_r($_SERVER);


// (
//     [PATH] => /usr/local/jdk/bin:/usr/kerberos/sbin:/usr/kerberos/bin:/usr/local/sbin:/usr/local/bin:/sbin:/bin:/usr/sbin:/usr/bin:/usr/X11R6/bin:/usr/local/bin:/usr/X11R6/bin:/root/bin:/opt/bin
//     [PWD] => /usr/local/cpanel/cgi-sys
//     [SHLVL] => 0
//     [PHP_FCGI_MAX_REQUESTS] => 5000
//     [SCRIPT_NAME] => /index.php
//     [REQUEST_URI] => /
//     [QUERY_STRING] => 
//     [REQUEST_METHOD] => GET
//     [SERVER_PROTOCOL] => HTTP/1.1
//     [GATEWAY_INTERFACE] => CGI/1.1
//     [REMOTE_PORT] => 53994
//     [SCRIPT_FILENAME] => /home/trajan450/public_html/sub_domain/thiyagu/index.php
//     [SERVER_ADMIN] => webmaster@thiyagu.socialnewrules.com
//     [CONTEXT_DOCUMENT_ROOT] => /home/trajan450/public_html/sub_domain/thiyagu
//     [CONTEXT_PREFIX] => 
//     [REQUEST_SCHEME] => http
//     [DOCUMENT_ROOT] => /home/trajan450/public_html/sub_domain/thiyagu
//     [REMOTE_ADDR] => 122.165.151.17
//     [SERVER_PORT] => 80
//     [SERVER_ADDR] => 148.66.136.121
//     [SERVER_NAME] => thiyagu.socialnewrules.com
//     [SERVER_SOFTWARE] => Apache
//     [SERVER_SIGNATURE] => 
//     [LD_LIBRARY_PATH] => /usr/local/apache/lib
//     [HTTP_COOKIE] => _ga=GA1.2.721781331.1514366331; _gid=GA1.2.137543168.1514366331; _gat_gtag_UA_108700732_1=1; socialnewrules-_zldp=Jlg11HKjLpKOeBPO2GRHivHCnPGph%2BWyWp5SkWfSrdGS%2BKkbP8QWfmqJ6m%2FH931y; socialnewrules-_zldt=4f9046b1-6f0e-47e5-a740-9ff7839a8ad9
//     [HTTP_ACCEPT_LANGUAGE] => en-US,en;q=0.9
//     [HTTP_ACCEPT_ENCODING] => gzip, deflate
//     [HTTP_ACCEPT] => text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8
//     [HTTP_UPGRADE_INSECURE_REQUESTS] => 1
//     [HTTP_USER_AGENT] => Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/63.0.3239.84 Safari/537.36
//     [HTTP_CACHE_CONTROL] => max-age=0
//     [HTTP_CONNECTION] => close
//     [HTTP_HOST] => thiyagu.socialnewrules.com
//     [UNIQUE_ID] => WkNliB5FP3h0is@e4vlNpwAAAZE
//     [FCGI_ROLE] => RESPONDER
//     [PHP_SELF] => /index.php
//     [REQUEST_TIME_FLOAT] => 1514366344.9747
//     [REQUEST_TIME] => 1514366344
// )

// if ($_SERVER['REMOTE_ADDR']) {
//     $remote_addr = $_SERVER['REMOTE_ADDR'];
// } elseif ($_SERVER['REQUEST_SCHEME']) {
//     $request_scheme = $_SERVER['REQUEST_SCHEME'];
// } elseif ($_SERVER['HTTP_ACCEPT_LANGUAGE']) {
//     $http_accept_language = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
// } elseif ($_SERVER['REQUEST_TIME']){
//     $request_time = $_SERVER['REQUEST_TIME'];
// } elseif ($_SERVER['HTTP_HOST']) {
//     $http_host = $_SERVER['HTTP_HOST'];
// } elseif ($_SERVER['REMOTE_ADDR']) {
//     $ipaddress = $_SERVER['REMOTE_ADDR'];
// } else {
//     $ipaddress = 'UNKNOWN';
// }

// $post_items["hiddenval"] = 'hiddenval_953sYt11358';
// $post_items["first"] = 'test';
// $post_items["last"] = 'test';
// $post_items["email"] = 'ramani.shenll@gmail.com';
// $post_items["city"] = 'AL';
// $post_items["state"] = 'Al';
// $post_items["id_title"] = '1';
// $post_items["gender"] = 'M';
// $post_items["approved"] = '1';
// $post_items["school_name"] = '2';

// // $post_string = implode ('&', $post_items);
// $post_string = json_encode($post_items);
// $ch = curl_init();
// // $headers = array("Content-Type:application/x-www-form-urlencoded"); 
// $headers = array("Content-Type:application/json"); 
// curl_setopt($ch, CURLOPT_URL,"https://www2.lawcountabilityjd.com/users/register");
// // curl_setopt($ch, CURLOPT_URL,"https://www2.lawcountabilityjd.com/users/register?encoding=UTF-8");
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// curl_setopt($ch, CURLOPT_HTTPHEADER , $headers);       
// curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
// curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1 );
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// $server_output = curl_exec ($ch); // Post to Salesforce

// if($errno = curl_errno($ch)) {
//     $error_message = curl_strerror($errno);
//     echo "cURL error ({$errno}):\n {$error_message}";
// }    
// curl_close($ch); // close cURL resource


// echo $server_output;
// exit;



// $curl = curl_init();

//  // Optional Authentication:
//  curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
//  curl_setopt($curl, CURLOPT_URL, $url);
//  curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
//  curl_setopt($curl, CURLOPT_POST, $method);

//  if ($data) {
//   $params = http_build_query($data);
//      curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
//  }

//  $result = curl_exec($curl);
//  $err = curl_error($curl);

//  curl_close($curl);

//  if ($err) {
//   return false;
//  } else {
//   return $result;
// }

  ?>