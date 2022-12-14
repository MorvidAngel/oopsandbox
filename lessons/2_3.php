<?php
// define a class
class User
{
    // properties (atributes)
    public $name;

    // methods (functions)
    public function sayHello()
    {
        return $this->name . ' Says Hello';
    }
}

// instatiate a user object from the user class
$user1 = new User();
$user1->name = 'Jay';
echo $user1->name;
echo '<br>';
echo $user1->sayHello();

echo '<br>';
// create new user
$user2 = new User();
$user2->name = 'Jeff';
echo $user2->name;
echo '<br>';
echo $user2->sayHello();
