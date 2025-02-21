<?php

/**
 * This is the model class for table "usuario_permissao".
 *
 * The followings are the available columns in table 'usuario_permissao':
 * @property integer $codigo_usuario
 * @property integer $codigo_permissao
 */
class UsuarioPermissao extends CActiveRecord
{
	/**
	 * @return string the associated database table name
	 */
	public function tableName()
	{
		return 'usuario_permissao';
	}

	/**
	 * @return array validation rules for model attributes.
	 */
	public function rules()
	{
		// NOTE: you should only define rules for those attributes that
		// will receive user inputs.
		return array(
			array('codigo_usuario, codigo_permissao', 'required'),
			array('codigo_usuario, codigo_permissao', 'numerical', 'integerOnly'=>true),
			// The following rule is used by search().
			// Please remove those attributes that should not be searched.
			array('codigo_usuario, codigo_permissao', 'safe', 'on'=>'search'),
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
		);
	}

	/**
	 * @return array customized attribute labels (name=>label)
	 */
	public function attributeLabels()
	{
		return array(
			'codigo_usuario' => 'Codigo Usuario',
			'codigo_permissao' => 'Codigo Permissao',
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

		$criteria->compare('codigo_usuario',$this->codigo_usuario);

		$criteria->compare('codigo_permissao',$this->codigo_permissao);

		return new CActiveDataProvider('UsuarioPermissao', array(
			'criteria'=>$criteria,
		));
	}

	/**
	 * Returns the static model of the specified AR class.
	 * @return UsuarioPermissao the static model class
	 */
	public static function model($className=__CLASS__)
	{
		return parent::model($className);
	}
}