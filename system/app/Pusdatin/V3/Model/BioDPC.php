<?php namespace App\Pusdatin\V3\Model;

use Illuminate\Database\Eloquent\Model;

class BioDPC extends Model {

	//
	private $table = 'r_bio_dpc';
	private $primary_key = 'bio_dpc_id';
	const CREATED_AT = 'create_date';
	const UPDATED_AT = 'update_date';
}
