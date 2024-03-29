<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Calendario', 'doctrine');

/**
 * BaseCalendario
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $codjue
 * @property date $fecjue
 * @property string $codron
 * @property string $codeqp1
 * @property string $codeqp2
 * @property decimal $goles1
 * @property decimal $goles2
 * @property string $indica
 * @property timestamp $horjue
 * @property Equipo $Equipo
 * @property Equipo $Equipo_2
 * @property Ronda $Ronda
 * @property Doctrine_Collection $QuinielaRonda1
 * 
 * @method string              getCodjue()         Returns the current record's "codjue" value
 * @method date                getFecjue()         Returns the current record's "fecjue" value
 * @method string              getCodron()         Returns the current record's "codron" value
 * @method string              getCodeqp1()        Returns the current record's "codeqp1" value
 * @method string              getCodeqp2()        Returns the current record's "codeqp2" value
 * @method decimal             getGoles1()         Returns the current record's "goles1" value
 * @method decimal             getGoles2()         Returns the current record's "goles2" value
 * @method string              getIndica()         Returns the current record's "indica" value
 * @method timestamp           getHorjue()         Returns the current record's "horjue" value
 * @method Equipo              getEquipo()         Returns the current record's "Equipo" value
 * @method Equipo              getEquipo2()        Returns the current record's "Equipo_2" value
 * @method Ronda               getRonda()          Returns the current record's "Ronda" value
 * @method Doctrine_Collection getQuinielaRonda1() Returns the current record's "QuinielaRonda1" collection
 * @method Calendario          setCodjue()         Sets the current record's "codjue" value
 * @method Calendario          setFecjue()         Sets the current record's "fecjue" value
 * @method Calendario          setCodron()         Sets the current record's "codron" value
 * @method Calendario          setCodeqp1()        Sets the current record's "codeqp1" value
 * @method Calendario          setCodeqp2()        Sets the current record's "codeqp2" value
 * @method Calendario          setGoles1()         Sets the current record's "goles1" value
 * @method Calendario          setGoles2()         Sets the current record's "goles2" value
 * @method Calendario          setIndica()         Sets the current record's "indica" value
 * @method Calendario          setHorjue()         Sets the current record's "horjue" value
 * @method Calendario          setEquipo()         Sets the current record's "Equipo" value
 * @method Calendario          setEquipo2()        Sets the current record's "Equipo_2" value
 * @method Calendario          setRonda()          Sets the current record's "Ronda" value
 * @method Calendario          setQuinielaRonda1() Sets the current record's "QuinielaRonda1" collection
 * 
 * @package    sf_sandbox
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseCalendario extends sfDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('calendario');
        $this->hasColumn('codjue', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'primary' => true,
             'sequence' => 'seq_juego',
             'length' => '',
             ));
        $this->hasColumn('fecjue', 'date', 25, array(
             'type' => 'date',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '25',
             ));
        $this->hasColumn('codron', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('codeqp1', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('codeqp2', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => true,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('goles1', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => '18',
             ));
        $this->hasColumn('goles2', 'decimal', 18, array(
             'type' => 'decimal',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'default' => '0',
             'primary' => false,
             'length' => '18',
             ));
        $this->hasColumn('indica', 'string', null, array(
             'type' => 'string',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '',
             ));
        $this->hasColumn('horjue', 'timestamp', 25, array(
             'type' => 'timestamp',
             'fixed' => 0,
             'unsigned' => false,
             'notnull' => false,
             'primary' => false,
             'length' => '25',
             ));
    }

    public function setUp()
    {
        parent::setUp();
        $this->hasOne('Equipo', array(
             'local' => 'codeqp1',
             'foreign' => 'codeqp'));

        $this->hasOne('Equipo as Equipo_2', array(
             'local' => 'codeqp2',
             'foreign' => 'codeqp'));

        $this->hasOne('Ronda', array(
             'local' => 'codron',
             'foreign' => 'codron'));

        $this->hasMany('QuinielaRonda1', array(
             'local' => 'codjue',
             'foreign' => 'codjue'));
    }
}