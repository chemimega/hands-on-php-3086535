<?php
//Create a user in LLOOF
$token = '8fd1f951d825f32d54fbd3c5a8fddde9';
$functionname="core_user_create_users";
$serverurl = 'https://lloof.net/webservice/rest/server.php' . '?wstoken=' . $token . '&wsfunction=' . $functionname;
$curl = curl_init();
curl_setopt($curl, CURLOPT_URL, $serverurl);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_POST, true);

for($i = 1;$i<11;$i++) {
  unset($params);
  $params = 'users[0][username]=aaaaborra'.$i;
  $params.= '&users[0][password]=Your_password1';
  $params.= '&users[0][firstname]=aaaaborra'.$i;
  $params.= '&users[0][lastname]=aaaaborra'.$i;
  $params.= '&users[0][email]=ty@mail.rus'.$i;
  curl_setopt($curl, CURLOPT_POSTFIELDS, $params);
  $response = curl_exec($curl);
  echo "<pre>";
  print_r($response);
  echo"</pre>";

}
curl_close($curl); 

?>


