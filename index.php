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

//Nullsafe Operator ?
$user = new User;
echo $user->profile()?->employment() ?? 'Unemployed'; 

//Match Expressions
$type = match (get_class($user)){
    'User' => 'is_a_user',
    'Profile' => 'has_a_profile',
    'Cat' => 'It´s a lovely meow animal'
};

echo $type;
