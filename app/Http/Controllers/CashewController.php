<?php

namespace App\Http\Controllers;

use App\CPU\CartManager;
use App\CPU\Convert;
use App\CPU\OrderManager;
use Illuminate\Http\Request;
use App\CPU\Helpers;
use Redirect;

class CashewController extends Controller
{

 function paymentProcess(Request $request) {

  session()->forget('cashew_token');

  $secret = '032de64135a112a5d7e26912a0b934bf96f71acb5819bfb76753458556a35a40';
  $store_url = 'https://www.lebskom.com/ ';

  $base_url = 'https://api.cashewpayments.com/v1';
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $base_url.'/identity/store/authorize');
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_POST, 1);

  $headers = array();
  $headers[] = 'Cashewsecretkey: '.$secret;
  $headers[] = 'Storeurl: '.$store_url;
  curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
  $result = curl_exec($ch);
  if (curl_errno($ch)) {
  echo 'Error:' . curl_error($ch);
  }
  curl_close($ch);
  session()->put('cashew_token', json_decode($result)->data->token);

  $token = session()->get('cashew_token');

  if ($token) {

   $discount = session()->has('coupon_discount') ? session('coupon_discount') : 0;
   $value = CartManager::cart_grand_total() - $discount;
   $tran = OrderManager::gen_unique_id();
   $user = Helpers::get_customer();

  $data = [
   "orderReference" => $tran,
   "currencyCode" => "AED",
   "totalAmount" => round($value,2),
   "shipping" => [
       "name" => $user->f_name,
       "address" =>  [
        "firstName" => $user->f_name,
        "lastName"=> $user->f_name,
        "phone"=> "000",
        "alternatePhone"=> "000",
        "address1" => "address1",
        "address2" => "address2",
        "city" => "city",
        "state" => "Dubai",
        "country" => "United Arab Emirates",
        "postalCode" => "Dubai"
       ],
       "billingAddress" => [
        "name" => $user->f_name,
        "address" =>  [
         "firstName" => $user->f_name,
         "lastName"=> $user->f_name,
         "phone"=> "000",
         "alternatePhone"=> "000",
         "address1" => "address1",
         "address2" => "address2",
         "city" => "city",
         "state" => "Dubai",
         "country" => "United Arab Emirates",
         "postalCode" => "Dubai"
        ],
        "customer" => [
         "id" => $user->id,
         "mobileNumber" => "000",
         "email" => "$user->email",
         "firstName" => $user->f_name,
         "lastName" => $user->f_name,
         "gender" => "Male",
         "account" => "000",
         "dateOfBirth" => "1993-06-16",
         "dateJoined" => "2020-03-01",
         "defaultAddress" => [
          "firstName"=> $user->f_name,
          "lastName"=> $user->f_name,
          "phone"=> "000",
          "alternatePhone"=> "000",
          "address1"=> "address1",
          "address2"=> "address2",
          "city"=> "city",
          "state"=> "Dubai",
          "country"=> "United Arab Emirates",
          "postalCode"=> "Dubai"
         ],
       ],
      ],
   ],
  ];

   $mainURL = 'https://checkout.cashewpayments.com/';

   $burl = 'https://api.cashewpayments.com/v1';
   $url = $burl.'/checkouts';
   $ch = curl_init();
   curl_setopt($ch, CURLOPT_URL, $url);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
   curl_setopt($ch, CURLOPT_POST, 1);

   $headers = array();
   $headers[] = 'Authorization: '.$token;
   $headers[] = 'Content-Type: application/json';
   curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
   $result = curl_exec($ch);
   if (curl_errno($ch)) {
   echo 'Error:' . curl_error($ch);
   } else {
    return Redirect::to($mainURL . json_decode($result)->data->orderId . "?token=" . urlencode(json_decode($result)->data->token) . "&storeToken=". urlencode(session()->get('cashew_token')) );
   // echo session()->get('cashew_token');
   // echo json_decode($result)->data->orderId;
   }
   curl_close($ch);

   // echo json_decode($result)->data->token;
   // echo json_decode($result)->data->url;
   // echo json_decode($result)->data->orderId;

   // return Redirect::to($mainURL . json_decode($result)->data->orderId . "?token=" . json_decode($result)->data->token);

   // echo $result;
  }

 }

}