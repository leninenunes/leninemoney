<?php

class PermissaoTest extends WebTestCase
{
	public $fixtures=array(
		'permissaos'=>'Permissao',
	);

	public function testShow()
	{
		$this->open('?r=permissao/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=permissao/create');
	}

	public function testUpdate()
	{
		$this->open('?r=permissao/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=permissao/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=permissao/index');
	}

	public function testAdmin()
	{
		$this->open('?r=permissao/admin');
	}
}
