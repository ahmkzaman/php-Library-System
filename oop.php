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
        echo "Available Copies of" . " '" . $this->getTitle() . "': " . $this->availableCopies . "<br/>\n";
    }

    public function borrowBook()
    {
        if ($this->availableCopies > 0) {
            $this->availableCopies -= 1;
            return true;
        } else {
            return "No copies available";
        }
    }

    public function returnBook()
    {
        $this->availableCopies += 1;
        return true;
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
        echo $this->getName() . " borrowed the book" . " '" . $book . "'";
    }

    public function returnBook($book)
    {
        echo $this->getName() . " returned the book" . " '" . $book . "'";
    }
}
$Book1 = new Book("The Great Gatsby", 5);
$Book2 = new Book("To Kill a Mockingbird", 3);
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");
$Book1->borrowBook($member1);
$Book2->borrowBook($member2);
$Book1->getAvailableCopies();
$Book2->getAvailableCopies();
