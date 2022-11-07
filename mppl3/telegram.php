<?php
   include_once("connect.php");
      function generateCode($limit){
        $code = '';
        for($i = 0; $i < $limit; $i++) { $code .= mt_rand(0, 9); }
          return $code;}
      function sendMessage($telegram_id, $message_text, $secret_token) {
          $url = "https://api.telegram.org/bot" . $secret_token . "/sendMessage?parse_mode=markdown&chat_id=" . $telegram_id;
          $url = $url . "&text=" . urlencode($message_text);
          $ch = curl_init();
          $optArray = array(
              CURLOPT_URL => $url,
              CURLOPT_RETURNTRANSFER => true
          );
          curl_setopt_array($ch, $optArray);
          $result = curl_exec($ch);
          $err = curl_error($ch);
          curl_close($ch);
  
          if ($err) {
              echo 'Pesan gagal terkirim, error :' . $err;
          }else{
              echo '';
          }
      }
      
     $result = mysqli_query($mysqli, "SELECT chat_id FROM administrator WHERE username = '$username'");
     while ($row = $result->fetch_assoc()) {
       $telegram_id=$row['chat_id'];
      }
      
      
      $message_text = generateCode(8);
      $hasil = mysqli_query($mysqli, "UPDATE administrator SET verifCode = '$message_text' WHERE username = '$username'");
      $secret_token = '5103155724:AAGK9H4qMI-q3aLJoUiaCyUtO-YPV__rtX4';
      
    
     ?>