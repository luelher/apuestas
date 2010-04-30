<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Equipo', 'doctrine');

/**
 * BaseEquipo
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codeqp
 * @property string $deseqp
 * @property string $grupo
 * @property string $abreqp
 * @property Doctrine_Collection $Calendario
 * @property Doctrine_Collection $Calendario_2
 * @property Doctrine_Collection $EquipoRonda
 * @property Doctrine_Collection $QuinielaRondafinal
 * 
 * @method string              getCodeqp()             Returns the current record's "codeqp" value
 * @method string              getDeseqp()             Returns the current record's "deseqp" value
 * @method string              getGrupo()              Returns the current record's "grupo" value
 * @method string              getAbreqp()             Returns the current record's "abreqp" value
 * @method Doctrine_Collection getCalendario()         Returns the current record's "Calendario" collection
 * @method Doctrine_Collection getCalendario2()        Returns the current record's "Calendario_2" collection
 * @method Doctrine_Collection getEquipoRonda()        Returns the current record's "EquipoRonda" collection
 * @method Doctrine_Collection getQuinielaRondafinal() Returns the current record's "QuinielaRondafinal" collection
 * @method Equipo              setCodeqp()             Sets the current record's "codeqp" value
 * @method Equipo              setDeseqp()             Sets the current record's "deseqp" value
 * @method Equipo              setGrupo()              Sets the current record's "grupo" value
 * @method Equipo              setAbreqp()             Sets the current record's "abreqp" value
 * @method Equipo              setCalendario()         Sets the current record's "Calendario" collection
 * @method Equipo              setCalendario2()        Sets the current record's "Calendario_2" collection
 * @method Equipo              setEquipoRonda()        Sets the current record's "EquipoRonda" collection
 * @method Equipo              setQuinielaRondafinal() Sets the current record's "QuinielaRondafinal" collection
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseEquipo extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('equipo');
        $this->hasColumn('codeqp', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'seq_grupo',
             'length' => '',
             ));
        $this->hasColumn('deseqp', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('grupo', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('abreqp', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasMany('Calendario', array(
             'local' => 'codeqp',
             'foreign' => 'codeqp1'));

        $this->hasMany('Calendario as Calendario_2', array(
             'local' => 'codeqp',
             'foreign' => 'codeqp2'));

        $this->hasMany('EquipoRonda', array(
             'local' => 'codeqp',
             'foreign' => 'codeqp'));

        $this->hasMany('QuinielaRondafinal', array(
             'local' => 'codeqp',
             'foreign' => 'codeqp'));
    }
}