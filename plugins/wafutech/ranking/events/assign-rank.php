<?php namespace Wafutech\Ranking\Events;

use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Event;

class AssignRank extends Event {

    use SerializesModels;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public $userid;
    public $points;
    public function __construct($userid,$points)
    {
         $this->userid = $userid;
         $this->points = $points;

    }

    /**
     * Get the channels the event should be broadcast on.
     *
     * @return array
     */
    public function broadcastOn()
    {
        return [];
    }
}