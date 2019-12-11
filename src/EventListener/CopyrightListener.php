<?php 
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
// use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class CopyrightListener
{

    // public function makeMyCopyright(){
        
    //     dd('On fait quoi là !');

    // }

    // public function makeMyCopyright(FilterResponseEvent $event){
        
    //     dd($event);

    // }

    public function makeMyCopyright(ResponseEvent $event){
        
        if( HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType() ){

            return;

        }

        $date = (new \DateTime())->format('Y');

        $html = "&copy; 2009 - ".$date;

        // retrieve the kernel response and html content
        $response = $event->getResponse();

        // retieve HTML content
        $content= $response->getContent();

        // Update content
        $content = preg_replace(
            '#<copyright>#iU',
            '<span>'.$html.'</span>',
            $content
        );

        // set content
        $response->setContent($content);

        // set response
        $event->setResponse($response);

    }

}