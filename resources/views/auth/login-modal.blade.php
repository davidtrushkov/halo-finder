<div id="login-modal" class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        Login
    </div>
    <div class="image content">
        <div class="description">

            <form class="ui form" id="login-form" method="post" action="{{ route('auth.login') }}">
                {!! csrf_field() !!}

                <div class="two fields">
                    <div class="field">
                        <label>Email</label>
                        <input placeholder="Email" type="email" name="email" id="email">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input placeholder="Your Password" type="password" name="password" id="loginPassword">
                    </div>
                </div>

                <div class="ui error message"></div>

                <div id="register-btn-container">
                    <a href="password/email" style="float: left;">Forgot Password?</a>
                    <button type="submit" class="ui positive icon button float-right">Login</button>
                </div>

            </form>

        </div>
    </div>
</div>