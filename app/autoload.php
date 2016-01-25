<?php

use Doctrine\Common\Annotations\AnnotationRegistry;
use Composer\Autoload\ClassLoader;

/**
 * @var ClassLoader $loader
 */
$loader = require __DIR__.'/../vendor/autoload.php';
$loader->add('FOS', __DIR__.'/../vendor/friendsofsymfony/user-bundle/FOS');
AnnotationRegistry::registerLoader([$loader, 'loadClass']);

return $loader;
