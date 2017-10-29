<?php
namespace Zapi;

interface BaseInterface
{
    /**
     * @var string the version of the system
     */
    const VERSION_INFO = "v0.0.1";
    public function functionFromBase();
}

/**
 * location aware interface definition
 */
interface LocationAwareInterface extends BaseInterface
{
    /**
     * @var string some const asdfasdgasdjhgasj dhjg jhagsj kdhagjshdg ajshgd jahsgdj hasdgasjhdg jashgd jahsg jk
     */
    const BASE_LOCATION = "beijing";
    /**
     * some deprecated const
     *
     * @deprecated
     */
    const SOME_DEPRECATED_CONST = 123;
    protected CONST SOME_PROTECTED_CONST = 123;
    private CONST SOME_PRIVATE_CONST = 123;
    public function getVersion();
    public function getSystemResource();
    public static function myStaticMethod();

    /**
     * @deprecated
     */
    public function deprecatedMethod(DeprecatedLocationAwareInterface $aware);
}

/**
 * location aware interface definition
 *
 * @deprecated
 */
interface DeprecatedLocationAwareInterface
{

}

/**
 * some useful method to be mixed in some class
 */
trait HtmlResponseTraits
{
    /**
     * @var int $htmlResponseCode
     */
    protected $htmlResponseCode = 123;
    /**
     * @deprecated
     */
    protected static $responseStatus;
    public function writeHtml()
    {

    }
}

/**
 * some deprecated useful method to be mixed in some class
 *
 * @deprecated
 */
trait YatADeprecatedTraits
{
    public $someStatus = 123;

    /**
     * @return boolean
     */
    public static function dropInfo()
    {

    }
    final public function yatFinalFunction()
    {

    }
}

/** @const Global constant description */
define('MY_CONST', 10);
/**
 * get the version of system
 */
function get_sys_version()
{
}

/**
 * some deprecated function
 *
 * @deprecated
 *
 * @param string $name the name of the person
 * @param SomeOldClass $cls some old class
 * @param array $data the data pass in
 * @param int $age the age of person
 * @return \Zapi\SomeOldClass|array the name of people
 */
function some_deprecated_function(&$name, SomeOldClass $cls, array $data = array(), $age = 12123)
{
}

interface Runable
{
    public CONST SPEED = 3;
    public function run();
}

/**
 * I am the person description class
 *
 * @deprecated
 */
class Person
{
    public CONST ADDRESS = "jishou";
    protected $name;
    public static $parentName = "asadasd";
    protected static $protectedProps = "asdasdas";
    public $height;
    public $weight;
    public function toString()
    {

    }
    public function getName()
    {

    }
    public function getHeight()
    {

    }
    public function getWidth()
    {

    }
    public static function printVersion()
    {

    }
    protected static function printInternalInfo()
    {

    }
};

interface Readable
{
    public CONST BOOK_STORE = "Chinese Book";
    protected CONST BOOK_PUBLISHER = "Tom";
}

class Student extends Person implements Runable, Readable
{
    /**
     * sadkjgfsjhdfgsdfs
     * sadfjasgdfhgsadf
     *
     * @var string the name of student
     */
    public CONST NAME = "beijing";
    /**
     * this is the college name
     */
    public CONST COLLEGE_NAME = "ZZU";
    protected CONST PI = 3.14;
    use HtmlResponseTraits;
    use YatADeprecatedTraits;
    protected $address = "beijing";
    /**
     * dksjfghjskhdgfjsghdfjghsadf
     *
     * @var string $lover
     */
    public static $lover = "php";
    /**
     * my home town
     *
     * @var string $hometown
     */
    public $hometown = "XiangXi";
    protected static $selfLover;
    public function getStudentNumber()
    {
    }

    public function run() : int
    {
        // TODO: Implement run() method.
    }

    /**
     * @return \Zapi\Student
     */
    public static function getInstance(int $type) : \Zapi\Student
    {

    }

    /**
     * @param string $info asdkhjkjasdgfjhsagdj
     * @return string asasdasdasdasdasdas
     */
    final public static function getTypeString(string $info)
    {

    }
    protected static function getVersionString()
    {

    }
}

abstract class Thread
{
    protected $name;
    public function toString()
    {

    }
};

final class Stack
{
    protected $name;
    public function toString()
    {

    }
};

/**
 * @deprecated
 */
final class SomeOldClass
{
    protected $name;
    public function toString()
    {

    }
};


namespace Zapi\Kernel;
/**
 * akjsdgfjhsadgfsadfsadfkgasdfas
 * ajdshfkjsahdfjashdfkjsadf
 *
 * @author zzu_softboy
 */
class Stream
{
    const XIUXIU = 123;
    protected $name;
    /**
     * @param string $name
     * @return array
     */
    public function open()
    {}
};

namespace Zapi\Thread;
Class Atomic
{
};

namespace Zapi\Net;
Class Atomic
{
};


namespace Zapi\Io;
Class Atomic
{
};

namespace Zapi\Io\Kernel\Platform\Arch;
Class Atomic
{
};