<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Mail;

class ContactForm extends Component
{
    public $name;
    public $email;
    public $comment;
    public $success;
    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'comment' => 'required|min:5',
    ];

    public function contactFormSubmit()
    {
        $contact = $this->validate();

        Mail::send('email',
            array(
                'name' => $this->name,
                'email' => $this->email,
                'comment' => $this->comment,
            ),
            function($message){
                $message->from('arm65@njit.edu');
                $message->to('arm65@njit.edu', 'Bobby')->subject('Your Site Contact Form');
            }
        );

        $this->success = 'Thank you for reaching out to us!';

        $this->clearFields();
    }

    private function clearFields()
    {
        $this->name = '';
        $this->email = '';
        $this->comment = '';
    }

    public function render()
    {
        return view('livewire.contact-form');
    }
}
