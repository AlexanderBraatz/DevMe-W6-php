<?php

require __DIR__ . "/vendor/autoload.php";

//Create a class that validates emails and postcodes.

class Validator 
{
    //should have used PHP var..? email validation see lecture
    //private $emailRegEx = "/^[a-zA-Z+0-9]+@[a-zA-Z+0-9]+\.[a-zA-Z+0-9]+$/";
    private $postcodeRegEx = "/^[A-Z][A-Z0-9]{2,3} \d[A-Z]{2}$/";

    
    public function email(string $email) :bool
    {
        //return preg_match($this->emailRegEx, $email) === 1;
        return filter_var($email, FILTER_VALIDATE_EMAIL);
        
    }
    
    public function postcode(string $postcode) :bool
    {
        return preg_match($this->postcodeRegEx, $postcode) === 1;
    }
   
}

$validator = new Validator();

// it validates email addresses
echo "Email\n";
dump($validator->email("alfonso@example.com")); // true
dump($validator->email("wombat+12@spoons.plumbing")); // true
dump($validator->email("blah blah blah! alfonso@example.com")); // false
dump($validator->email("wombat@spoonsplumbing")); // false
dump($validator->email("wombatspoons")); // false
dump($validator->email("@wombatspoons")); // false

// it validates postcodes
echo "\nPostcode\n";
dump($validator->postcode("BS4 3UH")); // true
dump($validator->postcode("S10 4GR")); // true
dump($validator->postcode("BS14 9DI")); // true
dump($validator->postcode("SW1A 1AA")); // true
dump($validator->postcode("12B DI9")); // false
dump($validator->postcode("EST4 DD29")); // false
dump($validator->postcode("blah blah BS5 8RJ blah blah")); // false