<?php

/**
 * This is the model class for table "pessoa".
 *
 * The followings are the available columns in table 'pessoa':
 * @property integer $codigo
 * @property string $nome
 * @property string $logradouro
 * @property string $numero
 * @property string $complemento
 * @property string $bairro
 * @property string $cep
 * @property string $cidade
 * @property string $estado
 * @property integer $ativo
 */
class Pessoa extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'pessoa';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('nome, ativo', 'required'),
			array('ativo', 'numerical', 'integerOnly'=>true),
			array('nome', 'length', 'max'=>50),
			array('logradouro, numero, complemento, bairro, cep, cidade, estado', 'length', 'max'=>30),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('codigo, nome, logradouro, numero, complemento, bairro, cep, cidade, estado, ativo', 'safe', 'on'=>'search'),
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
			'lancamentos' => array(self::HAS_MANY, 'Lancamento', 'codigo_pessoa'),
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo' => 'Codigo',
			'nome' => 'Nome',
			'logradouro' => 'Logradouro',
			'numero' => 'Numero',
			'complemento' => 'Complemento',
			'bairro' => 'Bairro',
			'cep' => 'Cep',
			'cidade' => 'Cidade',
			'estado' => 'Estado',
			'ativo' => 'Ativo',
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

		$criteria->compare('nome',$this->nome,true);

		$criteria->compare('logradouro',$this->logradouro,true);

		$criteria->compare('numero',$this->numero,true);

		$criteria->compare('complemento',$this->complemento,true);

		$criteria->compare('bairro',$this->bairro,true);

		$criteria->compare('cep',$this->cep,true);

		$criteria->compare('cidade',$this->cidade,true);

		$criteria->compare('estado',$this->estado,true);

		$criteria->compare('ativo',$this->ativo);

		return new CActiveDataProvider('Pessoa', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Pessoa the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}