<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Login extends Component
{
    public $email;
    public $password;
    public $remember = true;

    // Validation rules
    protected $rules = [
        'email' => 'required|email',
        'password' => 'required',
    ];

    // Handle the login process
    public function login()
    {
        // Validate the form data
        $this->validate();

        // Attempt to log in the user
        if (Auth::attempt(['email' => $this->email, 'password' => $this->password], $this->remember)) {
            // Redirect to intended page or home if no intended route
            return redirect()->intended('/');
        } else {
            // Return error message if login fails
            session()->flash('error', 'Invalid email or password');
        }
    }
    
    public function render()
    {
        return view('livewire.auth.login');
    }
}
