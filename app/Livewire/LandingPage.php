<?php

namespace App\Livewire;

use Livewire\Component;

class LandingPage extends Component
{
    public $email;

    public function subscribe()
    {
        \Log::debug($this->email);
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
