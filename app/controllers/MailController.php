<?php

class MailController extends BaseController
{

    public function sendMail()
    {
        $input = Input::all();

        Mail::send('emails.message', $input, function($message)
        {
            $message->to('jonnyandreola@gmail.com', 'John Smith')->subject('Message WEBSITE');
        });
        return $input;
    }

}