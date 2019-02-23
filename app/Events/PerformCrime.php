<?php

namespace App\Events;

use App\Models\Crime;
use Illuminate\Queue\SerializesModels;

class PerformCrime
{
    use SerializesModels;

    public $crime;

    /**
     * Create a new event instance.
     *
     * @param  \App\Models\Crime  $crime
     * @return void
     */
    public function __construct(Crime $crime)
    {
        $this->crime = $crime;
    }
}