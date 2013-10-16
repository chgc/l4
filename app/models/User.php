<?php

class User extends Eloquent
{
    // conventions Rule:
    // example: users ==> User
    // example: user_profiles ==> UserProfile
    // Customer Naming: table mapping
    //protected $table = 'my_users_table';

    public function set_password($string)
    {
        $this->set_attribute('password', Hash::make($string));
    }
}
