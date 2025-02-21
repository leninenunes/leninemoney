<?php

/**
 * This is the model class for table "permissao".
 *
 * The followings are the available columns in table 'permissao':
 * @property integer $codigo
 * @property string $descricao
 */
class Permissao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'permissao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo, descricao', 'required'),
			array('codigo', 'numerical', 'integerOnly'=>true),
			array('descricao', 'length', 'max'=>50),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('codigo, descricao', 'safe', 'on'=>'search'),
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
			'usuarios' => array(self::MANY_MANY, 'Usuario', 'usuario_permissao(codigo_usuario, codigo_permissao)'),
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

		return new CActiveDataProvider('Permissao', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return Permissao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}