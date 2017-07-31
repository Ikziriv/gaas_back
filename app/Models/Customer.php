<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'customers';

    protected $fillable = [
        'name', 'email', 'alamat', 'tlp', 'active'
    ];

	public function pesan() 
	{
	  return $this->hasMany('App\Models\Pesanan');
	}
}
