<div class="ui two column doubling stackable grid text-gray" id="profile-container">
    <div class="four wide column">
        <center>
            <img src="{{ $getPlayerSpartanImage }}">
        </center>
    </div>
    <div class="twelve wide column">

        <h3 class="margin-none gamertag"> <img src="{{ $getPlayerEmblemImage }}" class="ui avatar image">{{ json_decode($Gamer_Tag) }}</h3>
        <h4 class="margin-none">SR {{ $spartanRank }}</h4><br />

        <label style="font-size: .9em;">{{ number_format($XP) }} / 50,000,000</label>
        <div class="ui active small progress">
            <div class="bar" aria-valuenow="$RankProgress" aria-valuemin="0" aria-valuemax="100" style="width: {{ $RankProgress }}%;">
                <div class="progress">{{ $RankProgress . '%'  }}</div>
            </div>
            <div class="label" id="halo-progress-label">{{ $RankProgress . '%'  }} to MAX Level</div>
        </div>

        @if ($XP >= 50000000)
            MAX Level Reached
        @else
            <label style="font-size: .9em;">{{ number_format($playerCurrentProgressRank[2]) }} / {{ number_format($playerCurrentProgressRank[1]) }}</label>
            <div class="ui active small progress">
                <div class="bar" aria-valuenow="$playerCurrentProgressRank" aria-valuemin="0" aria-valuemax="100" style="width: {{ $playerCurrentProgressRank[0] }}%;">
                    <div class="progress">&nbsp;&nbsp;&nbsp;&nbsp;{{ $playerCurrentProgressRank[0] . '%'  }}</div>
                </div>
                <div class="label" id="halo-progress-label">{{ $playerCurrentProgressRank[0] . '%'  }} to Next Level</div>
            </div>
        @endif

        @include('profile.partials.playlist-ranks')
    </div>
</div>