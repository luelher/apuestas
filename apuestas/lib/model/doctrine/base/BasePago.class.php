<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Pago', 'doctrine');

/**
 * BasePago
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codpag
 * @property string $despag
 * @property timestamp $fechorpag
 * @property string $codven
 * @property string $codusu
 * @property string $codforpag
 * @property decimal $numquin
 * @property decimal $preuni
 * @property decimal $montot
 * @property decimal $moniva
 * @property FormaPago $FormaPago
 * @property Usuarios $Usuarios
 * @property Usuarios $Usuarios_3
 * 
 * @method string    getCodpag()     Returns the current record's "codpag" value
 * @method string    getDespag()     Returns the current record's "despag" value
 * @method timestamp getFechorpag()  Returns the current record's "fechorpag" value
 * @method string    getCodven()     Returns the current record's "codven" value
 * @method string    getCodusu()     Returns the current record's "codusu" value
 * @method string    getCodforpag()  Returns the current record's "codforpag" value
 * @method decimal   getNumquin()    Returns the current record's "numquin" value
 * @method decimal   getPreuni()     Returns the current record's "preuni" value
 * @method decimal   getMontot()     Returns the current record's "montot" value
 * @method decimal   getMoniva()     Returns the current record's "moniva" value
 * @method FormaPago getFormaPago()  Returns the current record's "FormaPago" value
 * @method Usuarios  getUsuarios()   Returns the current record's "Usuarios" value
 * @method Usuarios  getUsuarios3()  Returns the current record's "Usuarios_3" value
 * @method Pago      setCodpag()     Sets the current record's "codpag" value
 * @method Pago      setDespag()     Sets the current record's "despag" value
 * @method Pago      setFechorpag()  Sets the current record's "fechorpag" value
 * @method Pago      setCodven()     Sets the current record's "codven" value
 * @method Pago      setCodusu()     Sets the current record's "codusu" value
 * @method Pago      setCodforpag()  Sets the current record's "codforpag" value
 * @method Pago      setNumquin()    Sets the current record's "numquin" value
 * @method Pago      setPreuni()     Sets the current record's "preuni" value
 * @method Pago      setMontot()     Sets the current record's "montot" value
 * @method Pago      setMoniva()     Sets the current record's "moniva" value
 * @method Pago      setFormaPago()  Sets the current record's "FormaPago" value
 * @method Pago      setUsuarios()   Sets the current record's "Usuarios" value
 * @method Pago      setUsuarios3()  Sets the current record's "Usuarios_3" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BasePago extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('pago');
        $this->hasColumn('codpag', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'seq_pagos',
             'length' => '',
             ));
        $this->hasColumn('despag', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('fechorpag', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '25',
             ));
        $this->hasColumn('codven', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('codusu', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('codforpag', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('numquin', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '18',
             ));
        $this->hasColumn('preuni', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '50',
             'primary' => false,
             'length' => '18',
             ));
        $this->hasColumn('montot', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => '18',
             ));
        $this->hasColumn('moniva', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => '18',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('FormaPago', array(
             'local' => 'codforpag',
             'foreign' => 'codforpag'));

        $this->hasOne('Usuarios', array(
             'local' => 'codusu',
             'foreign' => 'codusu'));

        $this->hasOne('Usuarios as Usuarios_3', array(
             'local' => 'codven',
             'foreign' => 'codusu'));
    }
}