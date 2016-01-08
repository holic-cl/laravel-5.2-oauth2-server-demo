<?php

use Illuminate\Database\Seeder;
use App\OAuthClient;

class OAuthClientTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('oauth_clients')->delete();

		OAuthClient::create(
        	array(
                'id' => '1',
        		'name' => 'holic_co',
				'secret' => base64_encode('123456'),
				'created_at' => date('Y-m-d H:i:s'),
				'updated_at' => date('Y-m-d H:i:s')
        	)
        );
    }
}
