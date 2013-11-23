<?php

Router::connect('/', array('controller' => 'articles'));

CakePlugin::routes();

require CAKE . 'Config' . DS . 'routes.php';
