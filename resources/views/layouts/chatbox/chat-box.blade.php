
    <div class="ui comments" id="chat-box-message">
        @foreach($messages as $message)
        <div class="comment">
            <a class="avatar">
                <img src="/finder/public/images/logo.svg">
            </a>
            <div class="content">
                <a href="/finder/profile/{{ $message->user->slug }}" class="author">{{ $message->user->gamertag }}</a>
                <div class="metadata">
                    <div class="date">{{ $message->created_at->diffForHumans() }}</div>
                    <div class="rating">
                        <i class="star icon"></i>
                        5 Faves
                    </div>
                </div>
                <div class="text">
                   {!! $message->message !!}
                </div>
            </div>
        </div>
        @endforeach
    </div>



<script>
    var pusher ="";
    var channel ="";
    var html ="";
    pusher = new Pusher("{{env("PUSHER_KEY")}}");
    channel = pusher.subscribe('chat_channel');
    Pusher.log = function(message) {
        if (window.console && window.console.log) {
            window.console.log(message);
        }
    };
    channel.bind('App\\Events\\MessageSent', function(data){
        $('#chat-box-message').empty(html);
        for (var i = 0; i< data.length; i++) {

            for (var key in data) {  //empty the div for append does not repeat
                var obj = data[key];
                for (var prop in obj) {

                    $('#chat-box-message').append(
                        '<div class="comment">'+
                            '<a class="avatar">'+
                                '<img src="/finder/public/images/logo.svg">'+
                            '</a>'+
                            '<div class="content">'+
                                '<a href="/finder/profile/{{ $message->user->slug or '' }}" class="author">{{ $message->user->gamertag or '' }}</a>'+
                                '<div class="metadata">{{ $message->created_at->diffForHumans() }}</div>'+
                                '<div class="text">' +
                                    obj[prop]['message']+
                                '</div>'+
                            '</div>'+
                        '</div>'
                    );
                }
            }
        }
    });
</script>
