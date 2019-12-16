<?php

namespace App\Controller;

use App\Entity\Books;
use App\Form\BooksType;
use App\Repository\BooksRepository;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

/**
* @Route("/book", name="books")
*/
class BooksController extends AbstractController
{
    /**
     * @Route("s", name=":index", methods={"HEAD","GET"})
     */
    public function index( BooksRepository $repo)
    {
        $books = $products = $repo->findAll();

        return $this->render('books/index.html.twig', [
            'title' => 'Détail des livres',
            'books' => $books]);
    }

    /**
     * @Route("/security/create", name=":create",methods={"HEAD","GET","POST"})
     */
    public function create(Request $request)
    {
        // create a new book
        $book = new Books;

        // Define errors array
        $errors = [];

        // Create a new form 
        $form = $this->createForm(BooksType::class, $book);
        
        //Handle the request (request method === post)
        $form->handleRequest($request);

        // On form submit
        if ($form->isSubmitted()){

            // handle form errors
            //...

            // if form is valid
            if ($form->isValid()){

                // Save in database
                $em = $this->getDoctrine()->getManager();
                $em->persist($book);
                $em->flush();

                // Redirect the user
                return $this->redirectToRoute('books:read',[
                'id' => $book->getId(), 
                
                ]);
            }

        }

        // Create a form view
        $form = $form->createView();
        
        return $this->render('books/create.html.twig', [
            'title' => 'Création d\'une entrée',
            'form' => $form,
            'errors'=> $errors
        ]);
    }

    /**
     * @Route("/{id}", name=":read",methods={"HEAD","GET"})
     */
    public function read(Books $book)
    {
        // Render 
        return $this->render('books/read.html.twig', [
            'controller_name' => 'ReadBook',
            'book' => $book
        ]);
    }

    /**
     * @Route("/security/{id}/update", name=":update",methods={"HEAD","GET","POST"})
     */
    public function update( Books $book, Request $request)
    {

        // Define errors array
        $errors = [];

        // create form
        $form = $this->createForm(BooksType::class, $book);

        //Handle the request (request method === post) 
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {

                $em = $this->getDoctrine()->getManager();
                // it is not necessary
                //$em->persist($book);
                $em->flush();

                // Redirect the user
                return $this->redirectToRoute('books:read',[
                    'id' => $book->getId(),
                    'button_label' => 'modifier',
                    'errors' => $errors,
                ]);

        }
 
        return $this->render('books/update.html.twig', [
            'title' => 'UpdateBook',
            'book' => $book,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/security/{id}/delete/", name=":delete",methods={"HEAD","GET","DELETE"})
     */
    public function delete(Books $book, Request $request)
    {
    
        if($this->isCsrfTokenValid('delete'.$book->getId(), $request->request->get('_token')) ){
      
        // get manager
         $manager = $this->getDoctrine()->getManager();
        // remove object book
         $manager->remove($book);
        // // persist object
         $manager->flush();
         // redirect
         return $this->redirectToRoute('books:index');
        }
    
        return $this->render('books/delete.html.twig', [
            'title' => 'UpdateBook',
            'book' => $book,
        ]);
    
    }
}
