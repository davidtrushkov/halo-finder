<div class="ui sixten column doubling grid text-gray" id="profile-container">
    @if (!$arenaPlaylistDetailed)
        <h4 class="text-center">Not ranked in any playlist for this current season yet.</h4>
    @else
        @foreach($arenaPlaylistDetailed as $playlist)
            <div class="two wide column">
                <?php
                $Pid = $playlist['PlaylistId'];
                $db = connectDB();
                $SQL_Playlist = "select * from playlist_table where playlistId = '$Pid'";
                $result_playlist = $db->query($SQL_Playlist);

                while ($fetchPlaylist = mysqli_fetch_assoc($result_playlist)):

                $DesignationId = $playlist['DesignationId'];
                $teir_id =  $playlist['Tier'];
                $Designation = "select * from arena_ranks where rank_id = '$DesignationId' and tear_id = '$teir_id' ";
                $result = $db->query($Designation);

                while ($fetchDesignation = mysqli_fetch_assoc($result)):
                ?>
                <center><img src="{{ $fetchDesignation['iconImageUrl'] }}" style="width: 65px; height: 65px;"></center>
                <h5 class="text-center margin-none" style="height: 30px;">{{ $fetchPlaylist['playlist_name'] }}</h5>
                <h6 class="text-center margin-some">
                    @if($fetchDesignation['rank_name'] === 'Onyx' || $fetchDesignation['rank_name'] === 'Champion')
                        @if($fetchDesignation['rank_name'] === 'Champion')
                            {{ $fetchDesignation['rank_name'] }} #{{ $playlist['Rank'] }}
                        @else
                            {{ $fetchDesignation['rank_name'] }}
                        @endif
                    @else
                        {{ $fetchDesignation['rank_name'] }} {{ $fetchDesignation['tear_id'] }}
                    @endif
                </h6>
                @if($fetchDesignation['rank_name'] === 'Onyx' || $fetchDesignation['rank_name'] === 'Champion')
                    <h6 class="text-center">CSR: {{ $playlist['Csr'] }}</h6>
                @else
                    <?php
                    $total = 100;
                    $tierProgress = round(100 * ($playlist['PercentToNextTier'] /$total), 2);
                    ?>
                    <div class="ui active small progress">
                        <div class="bar" aria-valuenow="$tierProgress" aria-valuemin="0" aria-valuemax="100" style="width: {{ $tierProgress }}%;">
                            <div class="progress">{{ $tierProgress . '%'  }}</div>
                        </div>
                    </div>
                @endif
                <?php endwhile; ?>
                <?php endwhile; ?>
            </div>
        @endforeach
    @endif
</div>