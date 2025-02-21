<?php

class LancamentoTest extends WebTestCase
{
	public $fixtures=array(
		'lancamentos'=>'Lancamento',
	);

	public function testShow()
	{
		$this->open('?r=lancamento/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=lancamento/create');
	}

	public function testUpdate()
	{
		$this->open('?r=lancamento/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=lancamento/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=lancamento/index');
	}

	public function testAdmin()
	{
		$this->open('?r=lancamento/admin');
	}
}
