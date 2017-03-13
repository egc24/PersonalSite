<?php namespace App\DAO;

use Illuminate\Support\Facades\DB;

class ParameterDAO {

	static private $parametersTable = 'parameters';
	static private $parameterTypesTable = 'parameter_types';

	public static function getAllParametersOfType($type)
	{
		return DB::table(self::$parametersTable)->join(self::$parameterTypesTable, self::$parametersTable.'.type_id', '=', self::$parameterTypesTable.'.id')->where('type', $type);
	}

	public static function getAllParametersOfKey($key)
	{
		return DB::table(self::$parametersTable)->join(self::$parameterTypesTable, self::$parametersTable.'.type_id', '=', self::$parameterTypesTable.'.id')->where('key', $key);
	}

	public static function getAllParametersOfTypeWhithKey($type, $key)
	{
		return DB::table(self::$parametersTable)->join(self::$parameterTypesTable, self::$parametersTable.'.type_id', '=', self::$parameterTypesTable.'.id')->where('type', $type)->where('key', $key);
	}


}
