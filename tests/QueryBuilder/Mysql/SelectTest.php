<?php 

namespace MGHS\QueryBuilder\Mysql;

class SelectTest extends \PHPUnit_Framework_TestCase
{
	public function testChecarSeOSqlRetornaCorreto ()
	{
		$select = new Select;
		$sql = $select->sql();

		$this->assertEquals('SELECT * FROM users;',$sql);
	}

	public function testChecarSeOSqlRetornaComTablePages()
	{
		$select = new Select;
		$select->table ='pages';
		$sql = $select->sql();

		$this->assertEquals('SELECT * FROM pages;',$sql);
	}

	public function testSelecionarNaColunasAReceberDoBanco()
	{
		$select = new Select;

		$fields =[
			'name',
			'email',
			'password'
		];

		$select->fields($fields);
		$sql = $select->sql();

		$this->assertEquals('SELECT `name`, `email`, `password` FROM users;',$sql);
	}

	public function testSelecionarNaColunasAReceberDoBancoComTablePersonalizada()
	{
		$select = new Select;

		$select->table = 'pages';

		$fields =[
			'name',
			'email',
			'password'
		];

		$select->fields($fields);
		$sql = $select->sql();

		$this->assertEquals('SELECT `name`, `email`, `password` FROM pages;',$sql);
	}

}