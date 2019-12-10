# Les adresses web

### Exemple :

    http://www.site.com/directory/path/file.html?param=value
    http://www.site.com/directory/path/file.html#post
    ftp://username:password@site.com:21/path/


### URL : Uniform Ressource Locator
    http://www.site.com/directory/path/file.html

### URI : Uniform resource Identifier
    http://www.site.com/directory/path/file.html?param=value
    http://www.site.com/directory/path/file.html#post

### URN : Uniform resource Name
    www.site.com/directory/path/file.html#post



*scheme*                  http, ftop, ssh, p2p, tel....
*protocol*                http://

*sous-domaine*            www
 git *domaine*                 site
*TLD*                     com 
*Nom de domaine*          site.com 

*Nom d'utilisateur*       username 
*Mot de passe*            password 

*Port d'ecoute*           21 (ftp), 22 (ssh), 80 (http), 443 (https)

*Path*                    /directory/path/file.html 
*Fichier*                 file
*Extension de fichier*    html

### Paramètres

- Serveur               param=value 
    Clé                 param 
    Valeur              value
- Client (Ancre)        post

Le symbole Question Mark "?" Indique le passage de paramètres pour le serveur
Le symbole Sharp "#" Indique le passage d'ancre
Le symbole Hashbang "#!" Indique le passage de paramètre pour le client

Le symbole séparateur de paramètres "&" 


### Extention twig
php bin/console make:twig-extension

CopyrightExtention 

```php
<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class CopyrightExtentionExtension extends AbstractExtension
{
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

    public function doMyCopyright(?string $since = null)
    {
        $copyright = "&copy; ";
        if ($since == null){

            $since = date('Y');

       }
        
       $copyright.= $since;

       if ($since < date('Y')) {

        $copyright .= "-".date('Y');
       }
        
        return html_entity_decode($copyright);
        //dump($since);
        //exit;
    }
}

```
