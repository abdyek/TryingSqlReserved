<?php

namespace TryingSqlReserved\Models;

class Add {
    public static function create() {
        $add = new \Add();
        return $add;
    }
    public static function getByAlter($value) {
        return \AddQuery::create()->filterByAlter($value)->findOne();
    }
    // ^ will generated for all column
}
