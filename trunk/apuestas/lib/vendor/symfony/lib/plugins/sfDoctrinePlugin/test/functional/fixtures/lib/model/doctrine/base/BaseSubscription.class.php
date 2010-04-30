<?php
// Connection Component Binding
Doctrine_Manager::getInstance()->bindComponent('Subscription', 'doctrine2');

/**
 * BaseSubscription
 * 
 * This class has been auto-generated by the Doctrine ORM Framework
 * 
 * @property string $name
 * @property enum $status
 * 
 * @method string       getName()   Returns the current record's "name" value
 * @method enum         getStatus() Returns the current record's "status" value
 * @method Subscription setName()   Sets the current record's "name" value
 * @method Subscription setStatus() Sets the current record's "status" value
 * 
 * @package    symfony12
 * @subpackage model
 * @author     Your name here
 * @version    SVN: $Id: Builder.php 6820 2009-11-30 17:27:49Z jwage $
 */
abstract class BaseSubscription extends myDoctrineRecord
{
    public function setTableDefinition()
    {
        $this->setTableName('subscription');
        $this->hasColumn('name', 'string', 255, array(
             'type' => 'string',
             'length' => '255',
             ));
        $this->hasColumn('status', 'enum', null, array(
             'type' => 'enum',
             'values' => 
             array(
              0 => 'New',
              1 => 'Active',
              2 => 'Pending',
              3 => 'Expired',
             ),
             ));
    }

    public function setUp()
    {
        parent::setUp();
        
    }
}