<?php

namespace App\Http\Controllers;

use App\Models\Sale;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $sales = Sale::paginate(10);
        return view('index',compact('sales'));
    }


      // ================= sms mobile  notification ==================

      public function send_sms(){
        // $user = User::orderBy('id', 'asc')->pluck('id');
        // $user = User::first();
        // $user->notify(new SMSNotification());
        // return $user;


    // $basic  = new \Vonage\Client\Credentials\Basic("3087de55", "3tDC6EXqdEgTZXfs");
    //  $client = new \Vonage\Client($basic);

    //    $response = $client->sms()->send(
    //     new \Vonage\SMS\Message\SMS("917418667102", 'cicada', 'A text message sent using the Nexmo SMS API')
    // );
    
    // $message = $response->current();
    
    // if ($message->getStatus() == 0) {
    //     echo "The message was sent successfully\n";
    // } else {
    //     echo "The message failed with status: " . $message->getStatus() . "\n";
    // }
    }

}
