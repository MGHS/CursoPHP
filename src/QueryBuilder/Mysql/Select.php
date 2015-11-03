<?php 

namespace MGHS\QueryBuilder\Mysql;

class Select
{
	public $table = 'users';
	private $fields = null;

	public function sql()
	{
		$fields = '*';
		if(!empty($this->fields)){
			$fields = implode('`, `', $this->fields);
			$fields = "`{$fields}`";
		}
		return "SELECT {$fields} FROM {$this->table};";
	}

	public function fields(Array $fields)
	{
		$this->fields = $fields;
	}
}

