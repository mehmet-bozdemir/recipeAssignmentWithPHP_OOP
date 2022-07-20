<?php

// SOLUTION PART-1
//Given the ingredients in your kitchen and their properties, what is the total score of the highest-scoring cookie you can make?

class Ingredients {

    public static $ingredients = [
        "sprinkles" => [
            "capacity" => 2, "durability" =>  0, "flavor" =>  -2, "texture" =>  0, "calories" => 3
        ],
        "butterscotch" => [
            "capacity" => 0, "durability" =>  5, "flavor" =>  -3, "texture" =>  0, "calories" => 3
        ],
        "chocolate" => [
            "capacity" => 0, "durability" =>  0, "flavor" =>  5, "texture" =>  -1, "calories" => 8
        ],
        "candy" => [
            "capacity" => 0, "durability" =>  -1, "flavor" =>  0, "texture" =>  5, "calories" => 8
        ]
    ];

}

class CookieCls extends Ingredients {

    // in order to get maximum score
    const SPRINKLES_AMOUNT = 1;
    const AMOUNT_OF_OTHER_INGREDIENTS = 33; //butterschotch, chocolate, candy

};

interface Property {
    public function findPropertyValue();
}

class Capacity  extends CookieCls implements Property {

    public function findPropertyValue(){
         $ingredients = parent::$ingredients;

        $calculatedValue = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){

                    $amount = CookieCls::SPRINKLES_AMOUNT;
                }else{
                     $amount = CookieCls::AMOUNT_OF_OTHER_INGREDIENTS;
                }

                if($y === "capacity"){

                    $calculatedValue += $val*$amount;

                }
            }

        }
        return $calculatedValue;
    }
}

class Durability  extends CookieCls implements Property {

    public function findPropertyValue(){
         $ingredients = parent::$ingredients;

        $calculatedValue = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){

                    $amount = CookieCls::SPRINKLES_AMOUNT;
                }else{
                    $amount = CookieCls::AMOUNT_OF_OTHER_INGREDIENTS;
                }

                if($y === "durability"){

                    $calculatedValue += $val*$amount;

                }
            }

        }
        return $calculatedValue;
    }
}

class Flavor  extends CookieCls implements Property {

    public function findPropertyValue(){
         $ingredients = parent::$ingredients;

        $calculatedValue = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){

                    $amount = CookieCls::SPRINKLES_AMOUNT;
                }else{
                    $amount = CookieCls::AMOUNT_OF_OTHER_INGREDIENTS;
                }

                if($y === "flavor"){

                    $calculatedValue += $val*$amount;

                }
            }

        }
        return $calculatedValue;
    }
}

class Texture  extends CookieCls implements Property {

    public function findPropertyValue(){
         $ingredients = parent::$ingredients;

        $calculatedValue = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){

                    $amount = CookieCls::SPRINKLES_AMOUNT;
                }else{
                    $amount = CookieCls::AMOUNT_OF_OTHER_INGREDIENTS;
                }

                if($y === "texture"){

                    $calculatedValue += $val*$amount;

                }
            }

        }
        return $calculatedValue;
    }
}

$capacity = new Capacity();

$durability = new Durability();

$flavor = new Flavor();

$texture = new Texture();

$values = [$capacity->findPropertyValue(), $durability->findPropertyValue(), $flavor->findPropertyValue(), $texture->findPropertyValue()];

$highestScore = array_product($values);

echo("<h1>Highest Score</h1>". "<h1>$highestScore</h1>");

echo("<br>*****************************************************************<br>");


// SOLUTION PART-2
//Given the ingredients in your kitchen and their properties, what is the total score of the highest-scoring cookie you can make with a calorie total of 500?

class CookieCls2 extends Ingredients {

    //in order to provide max. score , avoid minus value and and to hold fixed 500 calories;
    const SPRINKLES_AMOUNT = 25;
    const BUTTERSCOTCH_AMOUNT = 35;
    const CHOCOLATE_AMOUNT = 33;
    const CANDY_AMOUNT = 7;

};


interface Property2 {
    public function findPropertyValue2();
}

class Capacity2  extends CookieCls2 implements Property2 {

    public function findPropertyValue2(){
        $ingredients = parent::$ingredients;

        $calculatedValue2 = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){
                    $amount = CookieCls2::SPRINKLES_AMOUNT;
                }elseif($x === 'butterscotch'){
                    $amount = CookieCls2::BUTTERSCOTCH_AMOUNT;
                }elseif($x === 'chocolate'){
                    $amount = CookieCls2::CHOCOLATE_AMOUNT;
                }elseif($x === 'candy'){
                    $amount = CookieCls2::CANDY_AMOUNT;
                }

                if($y === "capacity"){
                    $calculatedValue2 += $val*$amount;
                }
            }

        }
        return $calculatedValue2;
    }
}

class Durability2  extends CookieCls2 implements Property2 {

    public function findPropertyValue2(){
        $ingredients = parent::$ingredients;

        $calculatedValue2 = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){
                    $amount = CookieCls2::SPRINKLES_AMOUNT;
                }elseif($x === 'butterscotch'){
                    $amount = CookieCls2::BUTTERSCOTCH_AMOUNT;
                }elseif($x === 'chocolate'){
                    $amount = CookieCls2::CHOCOLATE_AMOUNT;
                }elseif($x === 'candy'){
                    $amount = CookieCls2::CANDY_AMOUNT;
                }

                if($y === "durability"){
                    $calculatedValue2 += $val*$amount;
                }
            }

        }
        return $calculatedValue2;
    }
}

class Flavor2  extends CookieCls2 implements Property2 {

    public function findPropertyValue2(){
        $ingredients = parent::$ingredients;

        $calculatedValue2 = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){
                    $amount = CookieCls2::SPRINKLES_AMOUNT;
                }elseif($x === 'butterscotch'){
                    $amount = CookieCls2::BUTTERSCOTCH_AMOUNT;
                }elseif($x === 'chocolate'){
                    $amount = CookieCls2::CHOCOLATE_AMOUNT;
                }elseif($x === 'candy'){
                    $amount = CookieCls2::CANDY_AMOUNT;
                }

                if($y === "flavor"){
                    $calculatedValue2 += $val*$amount;
                }
            }

        }
        return $calculatedValue2;
    }
}

class Texture2  extends CookieCls2 implements Property2 {

    public function findPropertyValue2(){
        $ingredients = parent::$ingredients;

        $calculatedValue2 = 0;
        foreach($ingredients as $x => $value){

            foreach($value as $y => $val){
                if($x === 'sprinkles'){
                    $amount = CookieCls2::SPRINKLES_AMOUNT;
                }elseif($x === 'butterscotch'){
                    $amount = CookieCls2::BUTTERSCOTCH_AMOUNT;
                }elseif($x === 'chocolate'){
                    $amount = CookieCls2::CHOCOLATE_AMOUNT;
                }elseif($x === 'candy'){
                    $amount = CookieCls2::CANDY_AMOUNT;
                }

                if($y === "texture"){
                    $calculatedValue2 += $val*$amount;
                }
            }

        }
        return $calculatedValue2;
    }
}

$capacity2 = new Capacity2();

$durability2 = new Durability2();

$flavor2 = new Flavor2();

$texture2 = new Texture2();

$values2 = [$capacity2->findPropertyValue2(), $durability2->findPropertyValue2(), $flavor2->findPropertyValue2(), $texture2->findPropertyValue2()];

$highestScoreWith500Calories = array_product($values2);

echo("<h1>Highest Score with 500 calories</h1>". "<h1>$highestScoreWith500Calories</h1>");
