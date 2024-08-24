<?php




class Book
{


    // TODO: Add properties as Private
    private $title;
    private $availableCopies;


    public function __construct($title, $availableCopies)
    {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }



    public function getTitle()
    {
        return $this->title;
    }


    public function getAvailableCopies()
    {
        return $this->availableCopies;
    }


    public function borrowBook()
    {
        $this->availableCopies -= 1;
    }

    public function returnBook()
    {
        $this->availableCopies += 1;
    }
}





class Member
{


    // TODO: Add properties as Private
    private $name;


    public function __construct($name)
    {

        // TODO: Initialize properties
        $this->name = $name;
    }



    // TODO: Add getName method
    public function getName()
    {
        return $this->name;
    }


    // TODO: Add borrowBook method


    // TODO: Add returnBook method
    public function borrowBook($book)
    {
        $book->borrowBook();
    }

    public function returnBook($book)
    {
        $book->borrowBook();
    }
}


// Usage


// You have to create  2 books and 2 members. Members One should borrow  book 1 and Member Two should borrow  book 2.


// TODO: Create 2 books with the following properties


//Book 1 - Name: The Great Gatsby, Available Copies: 5.


//Book 2 - Name: To Kill a Mockingbird, Available Copies: 3.

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);



// TODO: Create 2 members with the following properties


//Member 1 - Name: John Doe


//Member 2 - Name: Jane Smith

$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";
$member2->borrowBook($book2);
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}";

// TODO: Apply Borrow book method to each member




// TODO: Print Available Copies with their names:
