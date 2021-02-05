<?php

class Book {
    public $name;
    public $author;
    public $yearPublication;
    public $price;
    public $bestseller;

    // methods

    public function setDiscount($bestseller){
        if($bestseller == true) {
            $this->price =  $this->price - 10;
        }    
    }

    public function getDiscount() {
        return $this->discount;
    }
    
}

$book_one = new Book();
$book_one->name = "Il vecchio e il mare";
$book_one->author = "Ernest Hemingway";
$book_one->yearPublication = "1952";
$book_one->price = 18;
$book_one->bestseller = true;




$book_two = new Book();
$book_two->name = "Chiedi alla polvere";
$book_two->author = "John Fante";
$book_two->yearPublication = "1939";
$book_two->price = 14;



$book_three= new Book();
$book_three->name = "Ubik";
$book_three->author = "Philip K. Dick";
$book_three->yearPublication = "1969";
$book_three->price = 19;


$arrayBooks = [$book_one, $book_two, $book_three];
var_dump($arrayBooks);

?>