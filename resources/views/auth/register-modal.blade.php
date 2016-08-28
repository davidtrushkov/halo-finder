<div id="register-modal" class="ui modal">
    <i class="close icon"></i>
    <div class="header">
        Create an account
    </div>
    <div class="image content">
        <div class="description">

            <form class="ui form" id="register-form" method="post" action="{{ route('auth.register') }}">
                {!! csrf_field() !!}

                <div class="two fields">
                    <div class="field">
                        <label>Your Gamertag</label>
                        <input placeholder="Your Console Gamertag" type="text" name="gamertag" id="gamertag">
                    </div>
                    <div class="field">
                        <label>Email</label>
                        <input placeholder="Email" type="email" name="email" id="email">
                    </div>
                </div>

                <div class="two fields">
                    <div class="field">
                        <label>Password</label>
                        <input placeholder="Atleast 6 characters" type="password" name="password" id="password">
                    </div>
                    <div class="field">
                        <label>Confirm Password</label>
                        <input placeholder="Repeat Password" type="password" name="password_confirmation" id="password_confirmation">
                    </div>
                </div>

                <div class="ui error message"></div>

                <div id="register-btn-container">
                    <button type="submit" class="ui positive icon button float-right">Register</button>
                    <div class="actions">
                        <div class="ui black deny button float-right" id="register-no-thanks-btn">
                            No Thanks
                        </div>
                    </div>
                </div>

            </form>

        </div>
    </div>
</div>