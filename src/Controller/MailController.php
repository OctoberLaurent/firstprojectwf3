<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class MailController extends AbstractController
{
    /**
     * @Route("/mail", name="mail")
     */
    public function index( \Swift_Mailer $mailer)
    {
        // return $this->render('mail/index.html.twig', [
        //     'controller_name' => 'MailController',
        // ]);

        $from = [ "leplat.laurent@orange.fr" => "Laurent LEPLAT" ]; // -> Laurent LEPLAT<leplat.laurent@orange.fr>
        // or  : $from = [ "leplat.laurent@orange.fr"];
        $to = ["laurent@lepl.at" => "Laurent LEPLAT"];
        // or $to = ["jane@doe.com" => "Jane Doe", "bruce@wayne.com" => "Bruce Wayne"];
        $subject = "send test with swiftmailler";
        // Create a message
        $message = new \Swift_Message();
        // add subject
        $message->setSubject($subject);
        // add from 
        $message->setFrom($from);
        // add the recipient of the message
        $message->setTo($to);
        // example
        //$message->setCC("jane@doe.com" => "Jane Doe");
        //$message->setBcc();

        // set body 
        $message->setBody(
            $this->renderView(
                "mail/index.txt.twig"
            ), 'text/plain'

        );

        // add attachments
        // $message->attach($attachment);

        $sent = $mailer->send($message);

        return $this->json([
            //'subject'   => $data['subject'],
            'is sent ?' => $sent ? "yes" : "no",
            'path'      => 'src/Controller/EmailController.php',
        ]);

    }
}
