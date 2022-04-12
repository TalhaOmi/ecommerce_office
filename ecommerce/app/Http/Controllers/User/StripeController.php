<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StripeController extends Controller
{
    public function StripeOrder(Request $request){



	\Stripe\Stripe::setApiKey('sk_test_51Knn5gC2C6bEX1zgOSNSklA2hVidaMAU8xcsLNv4Q1VJxHnI3db7ntT9uCgYWxLO67sLQqxj4DOKgiutygv05tjO009N9Y3jDZ');


	$token = $_POST['stripeToken'];
	$charge = \Stripe\Charge::create([
	  'amount' => 999*100,
	  'currency' => 'usd',
	  'description' => 'Easy Online Store',
	  'source' => $token,
	  'metadata' => ['order_id' => '6735'],
	]);

	dd($charge);




    } // end method 




}