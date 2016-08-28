<form action="{{ route('chat.send') }}" method="post" id="chat-form">
    {!! csrf_field() !!}
    <div class="ui form">

        <div class="field">
            <textarea rows="3" placeholder="Message..." name="message" id="message"></textarea>
        </div>

    </div><br />
    <button type="submit" class="ui pink basic button">Submit</button>
</form>