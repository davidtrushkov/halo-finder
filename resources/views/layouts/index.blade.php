@extends('app')

@section('content')

    @include('layouts.partials.header')

    <div class="sixteen wide column chatbox">

        <!-- Menu -->
        @include('layouts.partials.menu')

        <div class="ui segment">

            @include('layouts.chatbox.chat-box')

        </div>

        <div class="ui two column stackable grid">
            <div class="column">

                @include('layouts.chatbox.chat-form')

            </div>
            <div class="column">
               Content
            </div>
        </div>
    </div>

@stop
