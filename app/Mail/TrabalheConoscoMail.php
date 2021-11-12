<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class TrabalheConoscoMail extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($data)
    {
        $this->data = $data;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {   

        $email = $this->data;
        
        return $this
        ->subject('Formulário Trabalhe Conosco')
        ->replyTo($email['email'])
        ->markdown('mail.trabalheconosco')->with([
                'nome'      => $email['nome'],
                'email'     => $email['email'],
                'telefone'  => $email['telefone'],
                'cargo'     => $email['cargo'],
                'mensagem'  => $email['mensagem'],
            ]
        );

    }
}
