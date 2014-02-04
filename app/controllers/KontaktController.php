<?php

use Input, Redirect, Mail, Session;

class KontaktController extends BaseController {

	public function sendMail()
	{
		   $data = array(
		    'email_content' => Input::get('email_content'),
		    'subject' => Input::get('email_subject'),
		    'sender_email' => Input::get('sender_email'),
		    'sender_name' => Input::get('sender_name'),
		    );
		   Mail::send('emails.default', $data, function($message) use ($data)
		   {
		    $message->to('pagodemc@gmail.com');
		    $message->subject('laraveil@czarnodziej.sanfree.eu');
		});

		   Session::flash('success', true);
		   return Redirect::route('kontakt');
	}

}