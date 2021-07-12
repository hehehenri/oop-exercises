<?php
require_once "People.php";
require_once "Publication.php";

class Book implements Publication
{
    private $title;
    private $author;
    private $totalPages;
    private $currentPage;
    private $isOpen;
    private $reader;

    public function details()
    {
        echo "Book: " . $this->getTitle() . " writed by " . $this->getAuthor() . PHP_EOL;
        echo "Pages: " . $this->getCurrentPage() . "/" . $this->getTotalPages() . PHP_EOL;
        echo "Beeing reeded by " . $this->reader->getName() . PHP_EOL;
        echo PHP_EOL;
    }

    public function __construct(string $title, string $author, int $totalPages, object $reader)
    {
        $this->title = $title;
        $this->author = $author;
        $this->totalPages = $totalPages;
        $this->reader = $reader;
        $this->isOpen = false;
        $this->currentPage =0;
    }
   
    protected function getTitle()
    {
        return $this->title;
    }
    protected function getAuthor()
    {
        return $this->author;
    }
    protected function getTotalPages()
    {
        return $this->totalPages;
    }
    protected function getCurrentPage()
    {
        return $this->currentPage;
    }
    protected function getIsOpen()
    {
        return $this->isOpen;
    }
    protected function getReader()
    {
        return $this->reader;
    }

    protected function setTitle($title)
    {
        $this->title = $title;
    }
    protected function setAuthor($author)
    {
        $this->author = $author;
    }
    protected function setTotalPages($totalPages)
    {
        $this->totalPages = $totalPages;
    }
    protected function setCurrentPage($currentPage)
    {
        $this->currentPage = $currentPage;
    }
    protected function setIsOpen($isOpen)
    {
        $this->isOpen = $isOpen;
    }
    protected function setReader($reader)
    {
        $this->reader = $reader;
    }

    public function open()
    {
        if(!$this->getIsOpen())
        {
            $this->setIsOpen(true);
        }
    }
    public function close()
    {
        if($this->getIsOpen())
        {
            $this->setIsOpen(false);
        }
    }
    public function browse(int $page)
    {
        if($this->getIsOpen() && $page <= $this->totalPages) {
            $this->setCurrentPage($page);
        }
    }
    public function nextPage()
    {
        if($this->getIsOpen() && $this->currentPage < $this->totalPages)
        {
            $this->setCurrentPage($this->getCurrentPage() + 1);
        }
    }
    public function lastPage()
    {
        if($this->getIsOpen() && $this->currentPage > 1){
            $this->setCurrentPage($this->getCurrentPage() + 1);
        }
    }
}