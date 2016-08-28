<div id="mobile-375-none">
    <div class="ui sixten column doubling grid text-gray" id="profile-container">
        <div class="two wide column">
            <h5>KD</h5>
            <h4 class="margin-none">{{ round($ArenaKd, 2) }}</h4>
        </div>
        <div class="two wide column">
            <h5>Kills</h5>
            <h4 class="margin-none">{{ number_format($ArenaTotalKills) }}</h4>
        </div>
        <div class="two wide column">
            <h5>Deaths</h5>
            <h4 class="margin-none">{{ number_format($ArenaTotalDeaths) }}</h4>
        </div>
        <div class="two wide column">
            <h5>Assists</h5>
            <h4 class="margin-none">{{ number_format($ArenaTotalAssists) }}</h4>
        </div>
        <div class="two wide column">
            <h5>Win %</h5>
            <h4 class="margin-none">{{ $ArenaWinLoss. '%' }}</h4>
        </div>
        <div class="two wide column">
            <h5>Total Games</h5>
            <h4 class="margin-none">{{ number_format($ArenaTotalGamesPlayed) }}</h4>
        </div>
        <div class="two wide column">
            <h5>Wins</h5>
            <h4 class="margin-none">{{ number_format($ArenaGamesWon) }}</h4>
        </div>
        <div class="two wide column">
            <h5>Losses</h5>
            <h4 class="margin-none">{{ number_format($ArenaTotalGamesLost) }}</h4>
        </div>
    </div>
</div>

<!-- Display ONLY for mobile screens (375px -) -->
<div id="mobile-375" class="text-gray">
    <div class="ui large vertical menu" style="width: 100%;">
        <a class="item">
            <div class="ui small teal label">{{ round($ArenaKd, 2) }}</div>
            KD
        </a>
        <a class="item">
            <div class="ui small teal label">{{ number_format($ArenaTotalKills) }}</div>
            Kills
        </a>
        <a class="item">
            <div class="ui small teal label">{{ number_format($ArenaTotalDeaths) }}</div>
            Deaths
        </a>
        <a class="item">
            <div class="ui small teal label">{{ number_format($ArenaTotalAssists) }}</div>
            Assists
        </a>
        <a class="item">
            <div class="ui small teal label">{{ $ArenaWinLoss. '%' }}</div>
            Win %
        </a>
        <a class="item">
            <div class="ui small teal label">{{ number_format($ArenaTotalGamesPlayed) }}</div>
            Total Games
        </a>
        <a class="item">
            <div class="ui small teal label">{{ number_format($ArenaGamesWon) }}</div>
            Wins
        </a>
        <a class="item">
            <div class="ui small teal label">{{ number_format($ArenaTotalGamesLost) }}</div>
            Losses
        </a>
    </div>
</div>
