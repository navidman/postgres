<?php

use Illuminate\Support\Str;

function getModelClassNameByTable ($table_name)
{
    $className = 'App\\Models\\' . Str::studly(str::singular($table_name));
    if(class_exists($className)) {
        return new $className;
    }
    return false;
}
