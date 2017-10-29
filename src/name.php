<?php
/**
 * 360 unicorn Team
 *
 * @author ZZU_SOFTBOY <zhangxiuchun@360.cn>
 * @copyright  Copyright (c) 2010-2011 QiHoo Technologies China Inc. <http://www.qihoo.net>
 * @time 25/10/2017 13:40
 */
/**
 * @const Global constant description
 */
define('MY_CONST', 10);

/**
 * get user name
 */
function get_name()
{

}

/**
 * some global interface
 */
interface SomeGlobalNamespaceInterface
{

}


/**
 * some deprecated global interface
 * @deprecated
 */
interface SomeGlobalNamespaceInterface
{

}

/**
 * some global trait
 */
trait SomeGlobalNamespaceTrait
{
    public function show()
    {

    }
}

/**
 * some deprecated global trait
 * @deprecated
 */
trait SomeDeprecatedGlobalNamespaceTrait
{
    use SomeGlobalNamespaceTrait;
    public static function getNs()
    {

    }
    public static $someTraitProp = 123;
}

/**
 * some global class
 */
class SomeGlobalClass
{

}


/**
 * some abstract global class
 */
abstract class SomeAbstractGlobalClass
{

}