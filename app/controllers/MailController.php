<?php

class MailController extends BaseController
{

    public function sendMail()
    {
        $msg = nl2br(Input::get('message'));
        Mail::send('emails.message', array('content'=>Input::all(), 'msg'=>$msg), function($message)
        {
            $message->from(Input::get('email'), Input::get('name') );
            $message->to('jonnyandreola@gmail.com', 'Jonny Andreola')->subject('PORTFOLIO CONTACT');
        });

        return Redirect::to('/contact')->with('sent', true);
    }

}