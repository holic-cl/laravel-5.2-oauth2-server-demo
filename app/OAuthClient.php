<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OAuthClient extends Model
{
    /**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'oauth_clients';
}
