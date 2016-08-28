<div class="ui pointing menu">

    <a href="/finder" class="item">Home</a>
    <a href="/finder/profile/{{ $user->slug }}" class="item">Profile</a>
    <a href="{{ route('auth.logout') }}" class="item">Logout</a>
   
    <div class="right menu">

    </div>

</div>
