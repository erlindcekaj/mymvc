<?php
use  Illuminate\Database\Eloquent\Model as Eloquent;
/**
 * summary
 */
class User extends Eloquent
{
    /**
     * summary
     */
    public $name;
    public $lastname;
    protected $password = 'pass kot';
    public $timestamps = [ 'updated_at','created_at'];
    protected $fillable = ['username','email'];
    protected $table = 'users';

    public function getPass(){
    	return $this->password;
    }

}
