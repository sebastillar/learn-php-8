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
