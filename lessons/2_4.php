<?php
class User
{
    public $name;
    public $age;

    // runs when an object is created
    public function __construct($name, $age)
    {
        echo 'Class ' . __CLASS__ . 'instantiated<br>';
        $this->name = $name;
        $this->age = $age;
    }

    public function sayHello()
    {
        return $this->name . ' Says Hello';
    }

    // called when no other referances to a certain object used for cleanup, closing connections etc.
    public function __destruct()
    {
        echo 'destructor ran...';
    }
}

$user1 = new User('Jay', 36);
echo $user1->name . ' is ' . $user1->age . ' years old';
echo '<br>';
echo $user1->sayHello();

echo '<br>';

$user2 = new User('Jill', 26);
echo $user2->name . ' is ' . $user2->age . ' years old';
echo '<br>';
echo $user2->sayHello();
