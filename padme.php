<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

        //Classs create without constructure
        class Book{
            var $title;
            var $author;
            var $pages; 
        }       
        //Add values
        $book1= new BOOK;
        $book1->title="Harry Potter";
        $book1->author="J. K. Rolling";
        $book1->pages=400;
        //Print in web page
        echo $book1->title; echo '<br/>';   //:-Harry Potter
        echo $book1->author;echo '<br/>';   //:-J. K. Rolling
        echo $book1->pages; echo  '<hr>';   //:-400
        

        //-------------

        //Class create with constructure
        class Phone{
            var $company;
            var $brand;
            var $price;

            function __construct($value_1,$value_2,$value_3){
                $this->company=$value_1;
                $this->brand=$value_2;
                $this->price=$value_3;
            }
        }
        //Add values
        $phone1=new phone("Samsung","S10","200000");
        //Print values
        echo "$phone1->company"; echo '<hr>';  //:-Samsung




        //-------------

        //Class create with public and private varibles
        class Movie{
            public $title;
            private $rating;

            function __construct($title, $rating){
                $this->title=$title;
                $this->setRating($rating);
            }
    
            function setRating($rating){
                $this->rating=$rating;
            }
    
            function getRating(){
                return $this->rating;
            }
        }
        //Add values
        $Sanam_Theri_Kasam=new Movie("Romance",5.9);
        //Print values
        echo $Sanam_Theri_Kasam->title; echo '<br>';  //:-Romance
        echo $Sanam_Theri_Kasam->getRating(); //:-5.9
        //echo $Sanam_Theri_Kasam->rating;  //Fatal error:Uncaught Error:Cannot access private property
        echo '<hr>';


        //-------------

        //Class create with subclass

        class Chef{
            function makeChiken(){
                echo "The chef makes chicken <br>";
            }
            function makeSalad(){
                echo "The chef makes salad <br>";
            }
            function makeSpecialDish(){
                echo "The chef makes barbaque <br>";
            }
        }
        $chef001=new Chef();
        $chef001->makeChiken();  //:-The chef makes chicken

        class Italian_Chef extends Chef{
            function makeChiken(){
                echo "The Italian chef makes chicken <br>";
            }
        }
        $Italychef001=new Italian_Chef();
        $Italychef001->makeChiken(); //:-The Italian chef makes chicken
        $Italychef001->makeSalad();  //:-The chef makes salad

    ?> 
    
</body>
</html>