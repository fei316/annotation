<?php
/**
 * Created by PhpStorm.
 * User: dengfei
 * Date: 2019/3/28
 * Time: 20:01
 */
use Sunny\Sunny;

$loader = require "./vendor/autoload.php";
\Doctrine\Common\Annotations\AnnotationRegistry::registerLoader([$loader, 'loadClass']);
$annotationReader = new \Doctrine\Common\Annotations\AnnotationReader();

try{
    $reflectionClass = new \ReflectionClass(Sunny::class);
    $classAnnotations = $annotationReader->getClassAnnotations($reflectionClass);
    foreach ($classAnnotations as &$classAnnotation) {
//        print_r($classAnnotation);
        echo $classAnnotation->data['name1'] . "\n";
    }
} catch (ReflectionException $e) {

}