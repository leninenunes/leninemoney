<?php

class PessoaTest extends WebTestCase
{
	public $fixtures=array(
		'pessoas'=>'Pessoa',
	);

	public function testShow()
	{
		$this->open('?r=pessoa/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=pessoa/create');
	}

	public function testUpdate()
	{
		$this->open('?r=pessoa/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=pessoa/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=pessoa/index');
	}

	public function testAdmin()
	{
		$this->open('?r=pessoa/admin');
	}
}
