<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

use App\User;
use App\Coach;
use App\Player;
use App\Club;
use App\Agent;


class VerifyMail extends Mailable
{
    use Queueable, SerializesModels;

public $players;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($players)
    {
        $this->players = $players;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        
        return $this->view('emails.verifyplayer');
    }
}