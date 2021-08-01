<?php

namespace TryingSqlReserved;

class Tool {
    public static function getReservedKeyword() {
        $reservedJSON = file_get_contents('./sql_reserved_keywords.json');
        $reserved = json_decode($reservedJSON, true)['all'];
        // these keywords cause a fatal error when including propel config file
        // these keywords also are some php reserved keyword
        // "primary_key" keyword overlaps getPrimayKey function
        // so I held them out of the test
        $reserved = array_values(array_diff($reserved, ['and', 'as', 'case', 'default', 'or', 'primary_key']));
        return $reserved;
    }
    public static function formatPascalCaseFromUnderscores($underscores) {
        $pascalCase = '';
        $keywords = explode('_', $underscores);
        foreach($keywords as $k) {
            $pascalCase .= ucfirst($k);
        }
        return $pascalCase;
        //return $underscores;
    }
}
