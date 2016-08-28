<div class="ui pointing menu">
    {{--<a class="active item">Home</a>--}}
    @if ($signedIn)
        <a href="{{ route('user.profile', $user->slug) }}" class="item">Profile</a>
        <a href="{{ route('auth.logout') }}" class="item">Logout</a>
    @else
        <a class="item login">Login</a>
        <a class="item register">Register</a>

        @include('auth.login-modal')
        @include('auth.register-modal')
    @endif
    <div class="right menu">
        <div class="item">
            <div class="ui transparent icon input">
                <input type="text" placeholder="Search...">
                <i class="search link icon"></i>
            </div>
        </div>
    </div>
</div>
