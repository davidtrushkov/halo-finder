<?php

namespace App\Http\Controllers\Api;

use GuzzleHttp;
use App\Http\Controllers\Controller;

class ArenaPlaylistController extends Controller
{


    /**
     * Get a Players Arena Playlist Ranks and Stats
     *
     * @param $playerGeneralStats
     * @return mixed
     */
    public function getArenaPlaylistStats($playerGeneralStats)
    {

        $results = collect($playerGeneralStats->Results[0]->Result->ArenaStats->ArenaPlaylistStats);

        $array = $results
            ->filter(function ($item) {
                return $item->MeasurementMatchesLeft == 0;
            })
            ->map(function ($item, $key) {
                return [
                    'PlaylistId' => $item->PlaylistId,
                    'MeasurementMatchesLeft' => $item->MeasurementMatchesLeft,
                    'DesignationId' => $item->Csr->DesignationId,
                    'Tier' => $item->Csr->Tier,
                    'PercentToNextTier' => $item->Csr->PercentToNextTier,
                    'Csr' => $item->Csr->Csr,
                    'Rank' => $item->Csr->Rank,
                ];
            });

        return $array;
    }

}