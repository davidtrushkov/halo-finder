@extends('app')

@section('content')

    @include('profile.partials.header')

    <div class="sixteen wide column chatbox">

        <!-- Menu -->
        @include('profile.partials.menu')

        @include('profile.partials.non-player-stats')

    </div>

@endsection