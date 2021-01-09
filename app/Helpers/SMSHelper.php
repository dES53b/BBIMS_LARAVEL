<?php

namespace App\Helpers;

/**
 *
 */
class SMS
{
  function sendSMS($phone, $message){
    $username = 'sandbox';
    $key = '1c69c9a7a5bf058bcaf59a5f695a1e915a0351e6d5c55e8edc398d81084dab6e';
  //  $from = 'Blood Bank Group';
    $africasTalking = new AfricasTalking($username, $key);
    $sms = $africasTalking->sms();

    try {
      $result = $sms->send([
        'to' => $phone,
        'message' => $message,
        'from' => 'BBIMS'

      ]);
    } catch (\Exception $e) {

      echo $e->message;
    }
    return $result;
  }


}



 ?>
