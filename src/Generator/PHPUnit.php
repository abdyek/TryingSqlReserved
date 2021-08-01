<?php

namespace TryingSqlReserved\Generator;
use TryingSqlReserved\Tool;
use TryingSqlReserved\Config;

class PHPUnit {
    public static function generate() {
        $reserved = Tool::getReservedKeyword();
        foreach($reserved as $keyword) {
            $className = Tool::formatPascalCaseFromUnderscores($keyword);
            self::createFile($className);
        }
    }
    private static function createFile($className) {
        if(!file_exists('./tests')) {
            mkdir('./tests');
        }
        if(!file_exists('./tests/Models')) {
            mkdir('./tests/Models');
        }
        $header = self::createHeader($className);
        $class = self::createTestClass($className);
        $content = $header . $class;
        self::save($className, $content);
    }
    private static function createHeader($className) {
        $content = '<?php' . PHP_EOL . PHP_EOL;
        $content .= "require 'vendor/autoload.php';" . PHP_EOL;
        $content .= "require 'propel/config.php';" . PHP_EOL;
        $content .= "use PHPUnit\\Framework\\TestCase;" . PHP_EOL;
        $content .= "use TryingSqlReserved\\Models\\".$className.';' . PHP_EOL . PHP_EOL;
        $content .= '/**' . PHP_EOL . ' * @covers ' . $className . '::' . PHP_EOL;
        $content .= ' */' . PHP_EOL . PHP_EOL;
        return $content;
    }
    private static function createTestClass($className) {
        $content = 'class '.$className.'Test extends TestCase {' . PHP_EOL;
        $reserved = Tool::getReservedKeyword();
        foreach($reserved as $keyword) {
            $content .= self::createTestMethod($className, Tool::formatPascalCaseFromUnderscores($keyword), $keyword);
        }
        $content .= '}';
        return $content;
    }
    private static function createTestMethod($className, $keyword, $underScores) {
        $reserved = Tool::getReservedKeyword();
        $index = array_search($underScores, $reserved);
        if($index%3===0) {
            $value = Config::DEFAULT_VALUES['integer'];
        } elseif($index%3===1) {
            $value = '"'.Config::DEFAULT_VALUES['varchar'].'"';
        } elseif($index%3===2) {
            $value = (Config::DEFAULT_VALUES['boolean']?'true':'false');
        }
        $content = "\tpublic function testGetBy".$keyword."() {" . PHP_EOL;
        $content .= "\t\t\$".lcfirst($className)." = ".$className."::create();" . PHP_EOL;
        $content .= "\t\t\$".lcfirst($keyword)." = ".$className."::getBy".$keyword . "(".$value.");" . PHP_EOL;
        $content .= "\t\t\$this->assertNotNull(\$" . lcfirst($keyword) .');'. PHP_EOL;
        $content .= "\t}" . PHP_EOL;
        return $content;
    }
    private static function save($fileName, $content) {
        $f = fopen('./tests/Models/'.$fileName. 'Test.php', 'w');
        fwrite($f, $content);
        fclose($f);
    }
}
