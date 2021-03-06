<?php
/**
 * Created by PhpStorm.
 * User: newexe
 * Date: 30.06.18
 * Time: 20:36
 */

namespace reflection\modules_system\Modules;
use reflection\modules_system\Entities\Person;

/**
 * Class PersonModule
 * @package reflection\modules_system\Modules
 */
class PersonModule implements Module
{
    /**
     * @var Person
     */
    protected $person;

    /**
     * PersonModule constructor.
     */
    public function __construct()
    { }

    /**
     * @param Person $person
     */
    public function setPerson(Person $person)
    {
        $this->person = $person;
    }

    /**
     * @return mixed|void
     */
    public function execute()
    {
        // TODO: Implement execute() method.

        echo 'PersonModule was executed with data: ';
        var_dump($this);
        echo '<br />';
    }
}