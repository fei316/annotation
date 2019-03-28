<?php
/**
 * Created by PhpStorm.
 * User: dengfei
 * Date: 2019/3/28
 * Time: 19:56
 */
namespace Sunny\Annotations;
use Doctrine\Common\Annotations\Annotation;
use Doctrine\Common\Annotations\Annotation\Target;

/**
 * Class SunnyAnnotation
 * @package Sunny\Annotations
 * @Annotation
 * @Target("ALL")
 */
class SunnyAnnotation
{
    public $data;

    public function __construct($value)
    {
        $this->data = $value;
    }

    public function getName()
    {
        return $this->data;
    }
}