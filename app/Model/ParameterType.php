<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class ParameterType extends Model
{
	protected $table = 'parameter_types';

    /**
     * Get the phone record associated with the user.
     */
    public function phone()
    {
        return $this->hasOne('App\Phone');
    }
}