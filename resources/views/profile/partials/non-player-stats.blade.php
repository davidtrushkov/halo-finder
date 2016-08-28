<div id="profile-container">

    @if (Auth::user())
        <div class="ui message">
            <i class="close icon"></i>
            <div class="header">
               No Halo 5 stats found for your gamertag
            </div>
            <p>You have not played any games of Halo 5. You must play a game to get stats.</p>
        </div>
    @else
        <div class="ui message">
            <i class="close icon"></i>
            <div class="header">
                No Halo 5 stats found for this player
            </div>
            <p>This player has not played any games of Halo 5. Player must play a game to get stats.</p>
        </div>
    @endif

</div>