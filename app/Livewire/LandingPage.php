<?php

namespace App\Livewire;

use App\Models\Subscriber;
use Illuminate\Auth\Notifications\VerifyEmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\URL;
use Livewire\Component;

class LandingPage extends Component
{
    public $email = "";
    public $showSubscribe;
    public $showSuccess;

    protected $rules = [
        'email' => 'required|email:filter|unique:subscribers,email',
    ];

    public function mount(Request $request)
    {
        $this->email = '';
        $this->showSubscribe = false;

        if ($request->has('verified') && $request->verified == 1) {
            $this->showSuccess = true;
        } else {
            $this->showSuccess = false;
        }
    }

    public function subscribe()
    {
        $this->validate();

        DB::transaction(function () {
            $subscriber = Subscriber::create([
                'email' => $this->email
            ]);

            $notification = new VerifyEmail;

            $notification::createUrlUsing(function ($notifible) {
                return URL::temporarySignedRoute(
                    'subscribers.verify',
                    now()->addMinutes(30),
                    [
                        'subscriber' => $notifible->getKey()
                    ]
                );
            });

            $subscriber->notify($notification);
        }, $deadlokRetries = 5);

        $this->reset('email');
        $this->showSubscribe = false;
        $this->showSuccess = true;
    }

    public function render()
    {
        return view('livewire.landing-page');
    }
}
