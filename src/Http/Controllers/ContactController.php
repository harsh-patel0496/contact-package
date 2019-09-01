<?php

namespace hplink\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use hplink\Contact\Models\Contact;
use Illuminate\Http\Request;
use Mail;
use hplink\Contact\Mail\ContactMail;

class ContactController extends Controller
{
    public function index(){
    	return view('contact::contact');
    }

    public function send(Request $request){
    	$input = $request->all();
    	$data = Contact::create($input);
    	$to = config('contact.email');
    	if(!empty($data))
    		$success = Mail::to($to)->send(new ContactMail($data));

    	echo"<pre>";print_r($success);
    }
}
