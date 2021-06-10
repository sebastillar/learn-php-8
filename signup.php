<?php


//Class definitions with PROPERTY PROMOTION feature
class User 
{
    public function __construct(protected $name){

    }

}

class Plan 
{
    public function __construct(protected string $name = 'monthly'){

    }

}

class Signup{
    public function __construct(
        protected User $user, 
        protected Plan $plan
    ){

    }
}

$user = new User("Sebastian");
$plan = new Plan("Year");
$signup = new Signup($user, $plan);
