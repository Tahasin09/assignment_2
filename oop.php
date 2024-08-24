<?php

class Book
{

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

    private $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function getName()
    {
        return $this->name;
    }

    public function borrowBook($book)
    {
        $book->borrowBook();
    }
    public function returnBook($book)
    {
        $book->returnBookBook();
    }
}

$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);


$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

$member1->borrowBook($book1);
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}\n";


$member2->borrowBook($book2);
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}";
