<?php 
// $useri = new User();
// var_dump($useri);

/**
 * summary
 */
class Users extends Controller
{
    /**
     * summary
     */
    // public function __construct()
    // {
    //     echo 'hi this is  users controller';
    // }
    public function index($name = '',$lastname='')
        {
            $user = $this->model('User');
            // var_dump($user);
            $user->name = $name;
            $user->lastname = $lastname;

            // var_dump($user);
            echo $user->name;
            echo $user->getPass();
            
        }
    public function update()
    {
    	echo 'this is  update method of users controller';
    }
}