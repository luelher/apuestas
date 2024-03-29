<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('QuinielaRondafinal', 'doctrine');

/**
 * BaseQuinielaRondafinal
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codqui
 * @property string $codeqp
 * @property string $codron
 * @property decimal $puntos
 * @property string $posic
 * @property Equipo $Equipo
 * @property Quiniela $Quiniela
 * @property Ronda $Ronda
 * 
 * @method string             getCodqui()   Returns the current record's "codqui" value
 * @method string             getCodeqp()   Returns the current record's "codeqp" value
 * @method string             getCodron()   Returns the current record's "codron" value
 * @method decimal            getPuntos()   Returns the current record's "puntos" value
 * @method string             getPosic()    Returns the current record's "posic" value
 * @method Equipo             getEquipo()   Returns the current record's "Equipo" value
 * @method Quiniela           getQuiniela() Returns the current record's "Quiniela" value
 * @method Ronda              getRonda()    Returns the current record's "Ronda" value
 * @method QuinielaRondafinal setCodqui()   Sets the current record's "codqui" value
 * @method QuinielaRondafinal setCodeqp()   Sets the current record's "codeqp" value
 * @method QuinielaRondafinal setCodron()   Sets the current record's "codron" value
 * @method QuinielaRondafinal setPuntos()   Sets the current record's "puntos" value
 * @method QuinielaRondafinal setPosic()    Sets the current record's "posic" value
 * @method QuinielaRondafinal setEquipo()   Sets the current record's "Equipo" value
 * @method QuinielaRondafinal setQuiniela() Sets the current record's "Quiniela" value
 * @method QuinielaRondafinal setRonda()    Sets the current record's "Ronda" value
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseQuinielaRondafinal extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('quiniela_rondafinal');
        $this->hasColumn('codqui', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => '',
             ));
        $this->hasColumn('codeqp', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => '',
             ));
        $this->hasColumn('codron', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'length' => '',
             ));
        $this->hasColumn('puntos', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => '18',
             ));
        $this->hasColumn('posic', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Equipo', array(
             'local' => 'codeqp',
             'foreign' => 'codeqp'));

        $this->hasOne('Quiniela', array(
             'local' => 'codqui',
             'foreign' => 'codqui'));

        $this->hasOne('Ronda', array(
             'local' => 'codron',
             'foreign' => 'codron'));
    }
}