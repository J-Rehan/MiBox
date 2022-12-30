<div class="container h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-6">
            <div class="login_area">
                <div class="title_area">
                    <h1>Forgot Password</h1>
                </div>

                <form class="text_aligment">
                    <div>
                        @if($fail_error)
                            <div class="alert alert-danger">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled"></i>
                                </button>
                                <code>{{ $fail_error }}</code>
                            </div>
                        @endif
                    </div>

                    <div>
                        @if($success_error)
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <i class="icofont icofont-close-line-circled"></i>
                                </button>
                                <code>{{ $success_error }}</code>
                            </div>
                        @endif
                    </div>
                    <div class="input-group">
                        <input wire:model="email" id="email" type="text" class="form-control email @error('email') form-control-danger @enderror" placeholder="Email">

                    </div>
                    @error('email') <p class="error-msg text-danger">{{ $message }}</p> @enderror
                    <button wire:click="forgetPassword" type="button" class="btn btn--danger">Continue</button>

                    <div class="text-start contact">
                        <a href="#" class="hero_button">need Help?<span class="gen-info">Contact Us</span></a>
                    </div>

                </form>


            </div>
        </div>
    </div>
</div>
