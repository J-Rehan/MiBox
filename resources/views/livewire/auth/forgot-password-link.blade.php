<div class="">
    <section class="login_class vh-100">
        <div class="container h-100">
            <div class="row d-flex justify-content-center align-items-center h-100">
                <div class="col-md-6">
                    <div class="login_area">
                        <div class="title_area">
                            <h1>{{ __('Password Assistance') }}</h1>
                            <br>
                        </div>
                            <form wire:submit.prevent="submitResetPasswordForm" method="post">
                            <div>
                                @if($login_error)
                                    <div class="alert alert-danger">
                                        {{ $login_error }}
                                    </div>
                                @endif
                                @if($success_error)
                                    <div class="alert alert-success">
                                        {{ $success_error }}
                                    </div>
                                @endif
                            </div>
                            <input type="hidden" name="token" value="{{ $token }}">
                            <div class="form-group form-group--placeholder-label">
                                <div class="input-group" id="show_hide_password">
                                    <input wire:model="email" id="email" type="text" class="form-control password email @error('email') form-control-danger @enderror" placeholder="Email" >

                                    <!-- <label for="email">Email</label> -->
                                </div>

                                @error('email') <p class="error-msg">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-group  form-group--placeholder-label">
                                <div class="input-group" id="show_hide_password">
                                    <input wire:model="password" id="password" type="password" class="form-control password @error('password') form-control-danger @enderror" placeholder="Password">
                                    <!-- <label for="password">Password</label> -->
                                    <!-- <div wire:ignore class="input-group-addon">
                                        <a href="javascript:void(0)"><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                    </div> -->
                                </div>

                                @error('password') <p class="error error-msg">{{ $message }}</p> @enderror
                            </div>

                            <div class="form-group  form-group--placeholder-label">
                                <div class="input-group" id="password_confirmation">
                                    <input wire:model="password_confirmation" id="password" type="password" class="form-control password @error('password_confirmation') form-control-danger @enderror" placeholder="Confirm Password">
                                </div>
                                @error('password_confirmation') <p class="error error-msg">{{ $message }}</p> @enderror
                            </div>
                            <div class="form-btn">
                                <button type="submit" class="btn btn--danger">
                                    Reset Password
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
