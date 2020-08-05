<?php

require __DIR__ . "/vendor/autoload.php";
// Create two classes, one that represents a recipe and one that represents an ingredient
// Hint: you can use "\n" to add a line break to a string
// Hint: PHP has array_search and array_unique methods

//!!!!!! KEEP WORKING ON LINE 64 !!!!!!!!!!!!!!!!!!!!!!!

class Ingredient 
{
    private $name;
    private $dietaryNotes;

    public function __construct($name, $note)
    {
        $this->name = $name;
        $this->dietaryNotes = $note;
    }

    public $getName()
    {
        return $this->name;
    }

    public $getdietaryNotes()
    {
        return $this->dietaryNotes;
    }
}

class Recipe
{
    private $name;
    //private $recipe;
    private $ingredientList = []; // [name => [obj, amount]]
    private $method = "";

    public function __constructor($name)
    {
        $this->name = $name;
    }

    public function addIngredient($Ingredient, $amount)
    {
        $this->ingredientList[] = [
            $Ingredient->getName => [
                $Ingredient,
                $amount
            ];
        ];
    }
       
    public function addMethod($method)
    {
        $this->method = $method;
    }
       
    public function display()
    {

        $presentedIngredients = function ($list) use ($ingredientList) {
            $result = "";
            ///i am trying to make the list from the array i have built in this->$ingredientList
        }
        $recipe = "{$this->getName}\n\n" +
                    "Ingredients\n\n"    +
                    "{$presentedIngredients}\n\n" +
                    "Method\n\n" +
                    "{$this->method}"

    }
       
    public function dietary()
    {

    }

    public function vegan()
    {

    }
}

// ingredients take a name, followed by an array of dietary notes
$flour = new Ingredient("Flour", ["gluten"]);
$eggs = new Ingredient("Eggs", ["animal produce"]);
$sugar = new Ingredient("Sugar", []);
$butter = new Ingredient("Butter", ["dairy", "animal produce"]);

// a recipe takes a name
$cake = new Recipe("Cake");

// we can add ingredients plus amounts
$cake->addIngredient($flour, "200g");
$cake->addIngredient($butter, "100g");
$cake->addIngredient($sugar, "50g");
$cake->addIngredient($eggs, 2);

// we can add a method
$cake->addMethod("Put them in a bowl, mix them together, cook for a bit. Job's a good'un");

// we can see the recipe
// using echo so it looks nicer
echo $cake->display();
/*
    "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - {requirements->egg} {Eggs->getName}

    Method

    {$method}
 */
/*
    "Cake

    Ingredients

    - 200g Flour
    - 100g Butter
    - 50g Sugar
    - 2 Eggs

    Method

    Put them in a bowl, mix them together, cook for a bit. Job's a good'un"
 */

// we can list dietary information
dump($cake->dietary()); // "gluten, animal produce, dairy"

// is the recipe vegan? (i.e. contains animal produce)
dump($cake->vegan()); // false
