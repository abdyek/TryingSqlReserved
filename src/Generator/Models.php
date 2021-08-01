<?php

namespace TryingSqlReserved\Generator;
use TryingSqlReserved\Tool;

class Models {
    public static function generate() {
        if(!file_exists('./src/Models')) {
            mkdir('./src/Models');
        }
        $reserved = Tool::getReservedKeyword();
        foreach($reserved as $keyword) {
            $pascalCaseKeyword = Tool::formatPascalCaseFromUnderscores($keyword);
            $content = self::createClass($pascalCaseKeyword);
            self::save($pascalCaseKeyword, $content);
        }
    }
    private static function createClass($className) {
        $content = '<?php'.PHP_EOL.'namespace TryingSqlReserved\Models;'.PHP_EOL;
        $content .= 'class ' . $className . '{' . PHP_EOL;
        $content .= self::createCreateMethod($className);
        $reserved = Tool::getReservedKeyword();
        foreach($reserved as $keyword) {
            $content .= self::createGetByXMethod($className, $keyword);
        }
        $content .= '}'.PHP_EOL;
        return $content;
    }
    private static function createCreateMethod($className) {
        $content = "\tpublic static function create() {" . PHP_EOL;
        $content .= "\t\t\$model = new \\" . $className . '();' . PHP_EOL;
        $content .= "\t\t".'$model->save();' . PHP_EOL;
        $content .= "\t\treturn \$model;" . PHP_EOL;
        $content .= "\t}" . PHP_EOL;
        return $content;
    }
    private static function createGetByXMethod($className, $keyword) {
        $content = "\tpublic static function getBy" . Tool::formatPascalCaseFromUnderscores($keyword) . '($value) {' . PHP_EOL;
        $content .= "\t\treturn \\" . $className . 'Query::create()->filterBy'. $keyword . '($value)->findOne();' . PHP_EOL;
        $content .= "\t}" . PHP_EOL;
        return $content;
    }
    private static function save($fileName, $content) {
        $f = fopen('./src/Models/'.$fileName. '.php', 'w');
        fwrite($f, $content);
        fclose($f);
    }
}
