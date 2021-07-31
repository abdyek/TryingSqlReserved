<?php

namespace TryingSqlReserved\Generator;
use TryingSqlReserved\Config;

class Schema {
    public function __construct($dbName) {
        $this->dbName = $dbName;
    }
    public function create() {
        $reserved = file_get_contents('./reserved.json');
        $this->reserved = json_decode($reserved, true)['reserved'];
        $content = '<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL.'<database name="'.$this->dbName.'" defaultIdMethod="native" identifierQuoting="true">'.PHP_EOL;
        foreach($this->reserved as $keyword) {
            $content .= $this->generateTable($keyword);
        }
        $content .= '</database>';
        $this->save($content);
    }
    private function generateTable($name) {
        $content = '<table name="'.$name.'">'.PHP_EOL;
        $content .= '    <column name="id" type="integer" required="true" primaryKey="true" autoIncrement="true"/>' . PHP_EOL;
        foreach($this->reserved as $i=>$column) {
            if($i%3===0) {
                $type = 'integer';
            } elseif($i%3===1) {
                $type = 'varchar';
            } elseif($i%3===2) {
                $type = 'boolean';
            }
            $content .= $this->generateColumn($column, $type);
        }
        $content .= '</table>'.PHP_EOL;
        return $content;
    }
    private function generateColumn($name, $type) {
        $defaultValue = Config::DEFAULT_VALUES[$type];
        $content = '    <column name="'.$name.'" type="'.$type.'" defaultValue="'.$defaultValue.'"/>'.PHP_EOL;
        return $content;
    }
    private function save($content) {
        $f = fopen('./schema.xml', 'w');
        fwrite($f, $content);
        fclose($f);
    }
}
