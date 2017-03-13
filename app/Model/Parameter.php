<?php namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Parameter extends Model
{
	protected $table = 'parameters';

    public function type()
    {
        return $this->hasOne('App\Model\ParameterType');
    }
}