<?php

class User {
    public function profile(){
        return new Profile;
    }
}

class Profile {
    public function employment(){
        return 'Product Owner';
    }
}

$user = new User();
//object::class feature
$type = match ($user::class){
    'User' => 'is_a_user',
    'Profile' => 'has_a_profile',
    'Cat' => 'It´s a lovely meow animal'
};

echo $type;
