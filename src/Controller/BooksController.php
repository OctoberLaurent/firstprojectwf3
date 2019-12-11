<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

/**
* @Route("/book", name="books")
*/
class BooksController extends AbstractController
{
    /**
     * @Route("s", name=":index", methods={"HEAD","GET"})
     */
    public function index()
    {
        $books = ['Symfony pour les nuls', 
        'PHP pourles nuls', 
        'HTML pour les nuls',
        'Java pour les nuls'];


        return $this->render('books/index.html.twig', [
            'title' => 'Détail des livres',
            'books' => $books]);
    }

    /**
     * @Route("/create", name=":create",methods={"HEAD","GET","POST"})
     */
    public function create()
    {
        return $this->render('books/create.html.twig', [
            'title' => 'Création d\'une entrée',
        ]);
    }

    /**
     * @Route("/{id}", name=":read",methods={"HEAD","GET"})
     */
    public function read()
    {
        return $this->render('books/read.html.twig', [
            'controller_name' => 'ReadBook',
        ]);
    }

    /**
     * @Route("/{id}/update", name=":update",methods={"HEAD","GET","POST"})
     */
    public function update()
    {
        return $this->render('books/update.html.twig', [
            'controller_name' => 'UpdateBook',
        ]);
    }

    /**
     * @Route("/{id}/delete/", name=":delete",methods={"HEAD","GET","POST"})
     */
    public function delete()
    {
        return $this->render('books/delete.html.twig', [
            'controller_name' => 'DeleteBook',
        ]);
    }
}
