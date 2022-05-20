<?php

namespace App\Repositories\Interfaces;

interface GroupByRepositoryInterface
{
    public function groupByColumns($model, $columns);
    public function insertOutput($table_name, $columns, $group_data);
}
