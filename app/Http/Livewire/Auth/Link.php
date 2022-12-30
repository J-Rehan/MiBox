<?php

namespace App\Http\Livewire\Auth;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;
use DB;

class Link extends Component
{
    public $success_error = '';
    public $fail_error = '';
    public $show_modal  = '';
    public $token  = '';
    public $email  = '';
    public $password  = '';
    public $password_confirmation  = '';
    public $login_error = '';

    protected $rules = [
        'email' => 'required|email|exists:admins,email',
        'password' => 'required|string|min:6|confirmed',
        'password_confirmation' => 'required'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function submitResetPasswordForm() {
        $this->validate();

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $this->email,
                'token' => $this->token
            ])->first();

        if(!$updatePassword){

            $this->login_error = 'Invalid token!';
        }
        else{
            $user = Admin::where('email', $this->email)->update(['password' => Hash::make($this->password)]);

            DB::table('password_resets')->where(['email'=> $this->email])->delete();

            session()->flash('success_message', 'Your password has been changed!');
            return redirect(route('admin.auth.loginForm'));
        }

    }
    public function mount($token)
    {
        $this->token = $token;
    }
    public function render()
    {
        return view('livewire.auth.forgot-password-link', ['$email' => $this->email,'token'=>$this->token])->extends('layouts.app');
    }
}
