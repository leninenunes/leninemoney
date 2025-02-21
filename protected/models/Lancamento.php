<?php

/**
 * This is the model class for table "lancamento".
 *
 * The followings are the available columns in table 'lancamento':
 * @property integer $codigo
 * @property string $descricao
 * @property string $data_vencimento
 * @property string $data_pagamento
 * @property string $valor
 * @property string $observacao
 * @property string $tipo
 * @property integer $codigo_categoria
 * @property integer $codigo_pessoa
 */
class Lancamento extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'lancamento';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('descricao, data_vencimento, valor, tipo, codigo_categoria, codigo_pessoa', 'required'),
			array('codigo_categoria, codigo_pessoa', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>50),
			array('valor', 'length', 'max'=>10),
			array('observacao', 'length', 'max'=>100),
			array('tipo', 'length', 'max'=>20),
			array('data_pagamento', 'safe'),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('codigo, descricao, data_vencimento, data_pagamento, valor, observacao, tipo, codigo_categoria, codigo_pessoa', 'safe', 'on'=>'search'),
		);
	}

	/**
	 * @return array relational rules.
	 */
	public function relations()
	{
		// NOTE: you may need to adjust the relation name and the related
		// class name for the relations automatically generated below.
		return array(
			'codigo_categoria0' => array(self::BELONGS_TO, 'Categoria', 'codigo_categoria'),
			'codigo_pessoa0' => array(self::BELONGS_TO, 'Pessoa', 'codigo_pessoa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'descricao' => 'Descricao',
			'data_vencimento' => 'Data Vencimento',
			'data_pagamento' => 'Data Pagamento',
			'valor' => 'Valor',
			'observacao' => 'Observacao',
			'tipo' => 'Tipo',
			'codigo_categoria' => 'Codigo Categoria',
			'codigo_pessoa' => 'Codigo Pessoa',
		);
	}

	/**
	 * Retrieves a list of models based on the current search/filter conditions.
	 *
	 * Typical usecase:
	 * - Initialize the model fields with values from filter form.
	 * - Execute this method to get CActiveDataProvider instance which will filter
	 * models according to data in model fields.
	 * - Pass data provider to CGridView, CListView or any similar widget.
	 *
	 * @return CActiveDataProvider the data provider that can return the models based on the search/filter conditions.
	 */
	public function search()
	{
		// Warning: Please modify the following code to remove attributes that
		// should not be searched.

		$criteria=new CDbCriteria;

		$criteria->compare('codigo',$this->codigo);

		$criteria->compare('descricao',$this->descricao,true);

		$criteria->compare('data_vencimento',$this->data_vencimento,true);

		$criteria->compare('data_pagamento',$this->data_pagamento,true);

		$criteria->compare('valor',$this->valor,true);

		$criteria->compare('observacao',$this->observacao,true);

		$criteria->compare('tipo',$this->tipo,true);

		$criteria->compare('codigo_categoria',$this->codigo_categoria);

		$criteria->compare('codigo_pessoa',$this->codigo_pessoa);

		return new CActiveDataProvider('Lancamento', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Lancamento the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}