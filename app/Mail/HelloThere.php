<?php

namespace App\Mail;
use App\User;
use App\Coach;
use App\Player;
use App\Club;
use App\Agent;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class HelloThere extends Mailable
{
    use Queueable, SerializesModels;
    public $user;
    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(User $user )
    {
      $this->user = $user;
      // $this->coach = $coach;
      // $this->agent = $agent;
      // $this->club = $club;
      // $this->player = $player;

      // ,Agent $agent,Club $club,Player $player,Coach $coach
    }


    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->markdown('emails.hellothere');
    }
}
