<?php

namespace App\Http\Livewire\Auth;

use Livewire\Component;
use App\Models\Admin;
use Mail;
use Str;
use DB;
use Carbon\Carbon;

class ForgetPassword extends Component
{
    public $email = '';
    public $success_error = '';
    public $fail_error = '';
    public $show_modal = '';

    protected $rules = [
        'email' => 'required|email|exists:admins,email',
    ];

    public function updatingEmail()
    {
        $this->success_error = '';
        $this->fail_error = '';
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function forgetPassword()
    {
        $this->error = '';
        $this->validate();

        $user = Admin::where('email', $this->email)->first();

        $token = Str::random(64);

        DB::table('password_resets')->insert([
            'email' => $this->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        try {
            Mail::send(
                'emails.forget_password',
                array(
                    'name' => $user->name,
                    'token' => $token,
                    'link' => route('admin.reset.password.get', $token),
                    'minutes' => 20
                ),
                function ($message) use ($user) {
                    $message->from(env("MAIL_FROM_ADDRESS", env('APP_NAME')));
//                     $message->to("jatin123@yopmail.com")->subject('Reset Password Request');
                    $message->to($user->email)->subject('Reset Password Request');
                }
            );

            $this->success_error = 'Reset password link is sent to your registerd email address.';
        } catch (\Exception $e) {

            $this->fail_error = 'Please try after some time';
        }


        // $credentails = [
        //     'email' => $this->email,
        // ];
        // if (auth('admin')->attempt($credentails)) {
        //     return redirect()->route('admin.dashboard.index');
        // } else {
        //     $this->password = '';
        //     $this->login_error = 'Invalid login credentials';
        // }
    }

    public function render()
    {
        return view('livewire.auth.forget-password');
    }
}
