<?php 
namespace App\EventListener;

use Symfony\Component\HttpKernel\Event\ResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
// use Symfony\Component\HttpKernel\Event\FilterResponseEvent;

class UlListener
{

    public function makeMyOl(ResponseEvent $event){
        
        if( HttpKernelInterface::MASTER_REQUEST !== $event->getRequestType() ){

            return;

        }

        // retrieve the kernel response and html content
        $response = $event->getResponse();

        // retieve HTML content
        $content= $response->getContent();

        //regex ul

        $regexUl = "@\<ul\b[^>]*>(?:[.\n\s\t\>]*<li>.*<\/li>)*[.\n\s\t\>]*<\/ul>@mi";

        // retieve ul and li tag
        preg_match(
            $regexUl,
            $content,
            $matches);

        // retieve str 
        $ul_tag = $matches[0] ?? null;

        // explode 
        $li_tag = explode("<li>", $ul_tag);
        
        $new_ul_tag = "";
        
        foreach($li_tag as $key => $value){

            $new_ul_tag.= ($key ? "<li style = 'list-style:none;' >".$key.") " : null) .$value;

        }

        // replace content
        $content = preg_replace("@".$ul_tag."@" , $new_ul_tag , $content);

        // set content
        $response->setContent($content);

        // set response
        $event->setResponse($response);

    }

}