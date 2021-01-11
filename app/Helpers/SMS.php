<?php

namespace App\Helpers;
use AfricasTalking\SDK\AfricasTalking;

/**
 *
 */
class SMS
{
  function sendSMS($phone, $message){
    $username = 'sandbox';
    $key = '0999ad0eacbf0d678eaef60e32e768ca7ccfa4e6d56520d86f16f9aa854fbc9e';
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
