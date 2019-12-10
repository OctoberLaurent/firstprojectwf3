<?php

namespace App\Twig;

use Twig\TwigFilter;
use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;

class CopyrightExtentionExtension extends AbstractExtension
{

    private $params; 

    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }
    // public function getFilters(): array
    // {
    //     return [
    //         // If your filter generates SAFE HTML, you should add a third
    //         // parameter: ['is_safe' => ['html']]
    //         // Reference: https://twig.symfony.com/doc/2.x/advanced.html#automatic-escaping
    //         new TwigFilter('filter_name', [$this, 'doSomething']),
    //     ];
    // }

    public function getFunctions(): array
    {
        return [
            new TwigFunction('copyright', [$this, 'doMyCopyright']),
        ];
    }

    // public function doMyCopyright(?string $since = null)
    // {
    //     $copyright = "&copy; ";
    //     if ($since == null){

    //         $since = date('Y');

    //    }
        
    //    $copyright.= $since;

    //    if ($since < date('Y')) {

    //     $copyright .= "-".date('Y');
    //    }
        
    //     return html_entity_decode($copyright);
        
    // }

    public function doMyCopyright()
    {
        $since = $this->params->get('copyrightSince');    
       
        $copyright = "&copy; ";
       
        if ($since == null){

            $since = date('Y');

       }
        
       $copyright.= $since;

       if ($since < date('Y')) {

        $copyright .= "-".date('Y');
       }
        
        return html_entity_decode($copyright);

    }
}
