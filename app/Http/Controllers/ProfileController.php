<?php

namespace App\Http\Controllers;

use App\Chat;
use App\User;
use App\Ranks;
use App\Http\Controllers\Controller;
use GuzzleHttp\Exception\ClientException;

class ProfileController extends Controller {


    public function index ($slug) {

        try {

            // Get a players Halo 5 Emblem Image.
            $getPlayerEmblemImage = app('App\Http\Controllers\Api\GetGeneralStatsController')->getPlayerEmblemImage($slug);

            // Get a players Halo Player Image.
            $getPlayerSpartanImage = app('App\Http\Controllers\Api\GetGeneralStatsController')->getPlayerSpartanImage($slug);

            // Get General Player Arena Stats
            $playerGeneralStats = app('App\Http\Controllers\Api\GetGeneralStatsController')->getPlayerArenaStats($slug);
            $playerGeneralStatsArray = $this->getPlayerGeneralStatsArray($playerGeneralStats);

            // Get the Spartan Rank, XP and Gamertag
            $spartanRank = json_decode($playerGeneralStatsArray['SpartanRank'], true);
            $XP = json_decode($playerGeneralStatsArray['Xp'], true);
            $Gamer_Tag = json_encode($playerGeneralStatsArray['Gamer_Tag'], true);

            // Get a Players Total Progress till MAX Rank
            $playerProgressRank = $this->overallProgressRank($playerGeneralStats);
            $RankProgress = json_decode($playerProgressRank['TotalProgressRank'], true);

            // Get a Players Rank Progress till next Rank
            $playerCurrentProgressRank = $this->currentProgressRank($playerGeneralStats);

            $ArenaTotalKills = json_decode($playerGeneralStatsArray['TotalKills'], true);
            $ArenaTotalDeaths = json_decode($playerGeneralStatsArray['TotalDeaths'], true);
            $ArenaTotalAssists = json_decode($playerGeneralStatsArray['TotalAssists'], true);

            $ArenaTotalGamesPlayed = json_decode($playerGeneralStatsArray['TotalGamesCompleted'], true);
            $ArenaTotalGamesLost = json_decode($playerGeneralStatsArray['TotalGamesLost'], true);
            $ArenaGamesWon = json_decode($playerGeneralStatsArray['TotalGamesWon'], true);

            // Get a Players Total KD Ratio for Arena
            $playerArenaKD = $this->getArenaKD($playerGeneralStats);

            // Get a Players Win-Loss Ration for Arena
            $playerArenaWinLoss = $this->getArenaWinLoss($playerGeneralStats);

            $ArenaWinLoss = json_decode($playerArenaWinLoss['WinLoss'], true);
            $ArenaKd = json_decode($playerArenaKD['Kd'], true);

            $arenaPlaylistDetailedStats = app('App\Http\Controllers\Api\GetGeneralStatsController')->getPlayerArenaStats($slug);
            $arenaPlaylistDetailedStatsArray = app('App\Http\Controllers\Api\ArenaPlaylistController')->getArenaPlaylistStats($arenaPlaylistDetailedStats);
            $arenaPlaylistDetailed = json_decode($arenaPlaylistDetailedStatsArray, true);

            $user = User::whereSlug($slug)->firstOrFail();

            return view('profile.index',
                compact(
                    'user',
                    'spartanRank',
                    'XP',
                    'RankProgress',
                    'getPlayerSpartanImage',
                    'getPlayerEmblemImage',
                    'Gamer_Tag',
                    'playerCurrentProgressRank',
                    'ArenaTotalKills',
                    'ArenaTotalDeaths',
                    'ArenaTotalAssists',
                    'ArenaTotalGamesPlayed',
                    'ArenaTotalGamesLost',
                    'ArenaGamesWon',
                    'ArenaWinLoss',
                    'ArenaKd',
                    'arenaPlaylistDetailed'
                )
            );

        } catch(ClientException $exception) {

            $user = User::whereSlug($slug)->firstOrFail();

            return view('profile.non-player-index', compact('user'));
        }

    }


    /**
     * Get a Players General Stats
     *
     * @param $playerGeneralStats
     * @return array
     */
    public function getPlayerGeneralStatsArray($playerGeneralStats) {

        $array = [];

        $array['Gamer_Tag']   = $playerGeneralStats->Results[0]->Result->PlayerId->Gamertag;
        $array['SpartanRank'] = $playerGeneralStats->Results[0]->Result->SpartanRank;
        $array['Xp']          = $playerGeneralStats->Results[0]->Result->Xp;

        $array['TotalKills']  = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalKills;
        $array['TotalDeaths']  = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalDeaths;
        $array['TotalAssists']  = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalAssists;
        $array['TotalGamesCompleted']  = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalGamesCompleted;
        $array['TotalGamesWon']  = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalGamesWon;
        $array['TotalGamesLost']  = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalGamesLost;

        return $array;
    }

    /**
     * Get a Players Overall Rank progress
     *
     * @param $playerArenaStats
     * @return array
     */
    public function overallProgressRank($playerArenaStats) {
        $array = [];

        $total = 50000000;
        $array['Xp'] = $playerArenaStats->Results[0]->Result->Xp;

        $array['TotalProgressRank'] =  round(100 * ($array['Xp'] /$total), 2);
        return $array;
    }


    /**
     * Get a Players Current Rank progress
     *
     * @param $playerArenaStats
     * @return array
     */
    public function currentProgressRank($playerArenaStats) {

        $PlayersRankXP = $playerArenaStats->Results[0]->Result->Xp;
        $PlayersRank = $playerArenaStats->Results[0]->Result->SpartanRank;

        if ($PlayersRankXP >= 50000000) {

        } else {
            // Get a Players current rank to get start Xp for it
            $GetStartXp = Ranks::where('rank', '=', $PlayersRank)->get();

            foreach ($GetStartXp as $XP) {
                $GetStart = $XP->startXp;
            }

            // Calculate Players XP into current rank
            $XpIntoCurrentRank = $PlayersRankXP - $GetStart;

            // Get the start Xp of next rank for Player
            $GetStartXpOfNextRank = Ranks::where('rank_id', '=', $PlayersRank + 1)->get();

            foreach ($GetStartXpOfNextRank as $XPNext) {
                $GetStartXPNext = $XPNext->startXp;
            }

            // Calculate total XP required for current rank
            $TotalXpRequiredCurrentRank = $GetStartXPNext - $GetStart;

            // Percentage into current Rank
            // -- Xp into current Rank divided by total Xp required for current rank
            $PercentageIntoCurrentRank = round(100 * ($XpIntoCurrentRank / $TotalXpRequiredCurrentRank), 2);

            return array($PercentageIntoCurrentRank, $TotalXpRequiredCurrentRank, $XpIntoCurrentRank);
        }

    }


    /**
     * Get a players Arena KD
     *
     * @param $playerGeneralStats
     * @return array
     */
    public function getArenaKD($playerGeneralStats) {
        $arrayKD = [];
        $arrayKD['TotalKills'] = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalKills;
        $arrayKD['TotalDeaths'] = $playerGeneralStats->Results[0]->Result->ArenaStats->TotalDeaths;
        $arrayKD['Kd'] = $arrayKD['TotalKills'] / $arrayKD['TotalDeaths'];

        return $arrayKD;
    }


    /**
     * Get a players Arena Win Loss Ratio
     *
     * @param $playerGeneralStats
     * @return array
     */
    public function getArenaWinLoss($playerGeneralStats) {
        $array = [];
        $array['GamesWon'] =    $playerGeneralStats->Results[0]->Result->ArenaStats->TotalGamesWon;
        $array['TotalGamesLost'] =    $playerGeneralStats->Results[0]->Result->ArenaStats->TotalGamesLost;
        $array['WinLoss'] = round(100 * ($array['GamesWon'] / ($array['TotalGamesLost'] + $array['GamesWon'])), 2);

        return $array;
    }

}
