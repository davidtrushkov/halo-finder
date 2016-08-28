<?php

use Illuminate\Database\Seeder;

class CreatePlaylistSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('playlist_table')->insert([
            'playlistId'    => 'f72e0ef0-7c4a-4307-af78-8e38dac3fdba',
            'playlist_name' => 'Breakout',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '892189e9-d712-4bdb-afa7-1ccab43fbed4',
            'playlist_name' => 'Slayer ',
        ]);

//        DB::table('playlist_table')->insert([
//            'playlistId'    => 'c98949ae-60a8-43dc-85d7-0feb0b92e719',
//            'playlist_name' => 'Team Arena Fall Preview',
//        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'c98949ae-60a8-43dc-85d7-0feb0b92e719',
            'playlist_name' => 'Team Arena',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'b617e24f-71aa-432b-a8a0-a9b417a3d47e',
            'playlist_name' => 'Warzone Turbo',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'd0766624-dbd7-4536-ba39-2d890a6143a9',
            'playlist_name' => 'Free-for-All',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '2323b76a-db98-4e03-aa37-e171cfbdd1a4',
            'playlist_name' => 'SWAT',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'd3bfda9f-14c2-44bc-9068-d3403bd5a059',
            'playlist_name' => 'Doubles',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'bc0f8ad6-31e6-4a18-87d9-ad5a2dbc8212',
            'playlist_name' => 'Super Fiesta',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '2e812e09-912f-458b-a659-4ccb84232c65',
            'playlist_name' => 'Social Slayer',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'b5d5a242-ffa5-4d88-a229-5031916be036',
            'playlist_name' => 'Social Multi-team',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'b50c4dc2-6c86-4d79-aa8a-23a65da292c6',
            'playlist_name' => 'Warzone',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '0e39ead4-383b-4452-bbd4-babb7becd82e',
            'playlist_name' => 'Warzone Assault',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '0bcf2be1-3168-4e42-9fb5-3551d7dbce77',
            'playlist_name' => 'Big Team Battle',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '819eb188-1a1c-48b4-9af3-283d2447ff6f',
            'playlist_name' => 'Social Shotty Snipers',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '5728f612-3f20-4459-98bd-3478c79c4861',
            'playlist_name' => 'Social Doubles',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '88b7de19-113c-4beb-af7f-8553aeda3f4c',
            'playlist_name' => 'Social Rumble Rockets',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '7385b4a1-86bf-4aec-b9c2-411a6aa48633',
            'playlist_name' => 'Social Snipers',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '780cc101-005c-4fca-8ce7-6f36d7156ffe',
            'playlist_name' => 'Big Team Battle',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => 'd21c8381-26f1-4d65-832a-ef9fa0854eb5',
            'playlist_name' => 'Social CTF',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '355dc154-9809-4edb-8ed4-fff910c6ae9c',
            'playlist_name' => 'Grifball',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '0504ca3c-de41-48f3-b9c8-3aab534d69e5',
            'playlist_name' => 'Social Assault',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '86587043-e5b3-44ec-a478-261d61b30b2d',
            'playlist_name' => 'FFA SWAT',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '84d7dafa-0419-4e6f-a990-4987ae57611c',
            'playlist_name' => 'Infection',
        ]);

        DB::table('playlist_table')->insert([
            'playlistId'    => '14bdff11-2742-486b-b26a-4255b137752f',
            'playlist_name' => 'Warzone Firefight Beta',
        ]);
    }
}
