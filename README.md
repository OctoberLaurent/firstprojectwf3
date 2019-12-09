"# firstprojectwf3" 

# Symfony 4

## Installation de Symfony

```
composer create-project symfony/skeleton <projet> "4.4.*"
```

installation des bundle dont on a besoin :

exemple : 

```
composer require symfony orm-pack
```

## Mise en place d'un controller avec sa vue.

```
php bin/console make:controller HomePage 
````
Une vue twig sera associée au contôlleur.

> template>home_page>index.html.php

----- 
configuration de swiftMailler
```
php bin/console make:controller MailController
```

https://github.com/code-campus/Symfony4-tutorials/tree/swiftmailer

```
composer require encore
```
insatllation de webpack 
```
yarn install
```
installation des dépendances npm 
```
npm install bootsatrap
```
installation de la dépendance Bootstrap

```
npm install jquery
```
installation de la dépendance jQuery

```
npm install popper.js
```
installation de la dépendance Popper pour Bootstrap

app.js
```
/*
 * Welcome to your app's main JavaScript file!
 *
 * We recommend including the built version of this JavaScript file
 * (and its CSS file) in your base layout (base.html.twig).
 */

// any CSS you require will output into a single css file (app.css in this case)
require('../css/app.css');
require('../../node_modules/bootstrap/dist/css/bootstrap.min.css');

// Need jQuery? Install it with "yarn add jquery", then uncomment to require it.
// const $ = require('jquery');
const $ = require('jquery')
require ('popper.js');
require ('bootstrap');

//console.log('Hello Webpack Encore! Edit me in assets/js/app.js');

```
Compiler le tout
```
yarn encore dev
```
