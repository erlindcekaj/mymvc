<?php 
 
/**
 * summary
 */
class Home extends Controller
{

    public function index($name = '',$lastname='')
    {
    	$this->view('home/index', ['name'=> $user->name]);
    	// User::find(1)->username;
        
    }
    public function create($username = '' , $email = '')
    {
    	User::create([
    		'username' => $username,
    		'email' => $email
    		]);

    }
}