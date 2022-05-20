<?php


namespace App\Repositories;

use App\Models\Output;
use App\Repositories\Interfaces\GroupByRepositoryInterface;


class GroupByRepository implements GroupByRepositoryInterface
{
    public function groupByColumns($model, $columns)
    {
        return $model::get()->groupBy($columns);
    }

    public function insertOutput($table_name, $columns, $group_data)
    {
        return Output::Create([
            'table_name' => $table_name,
            'columns' => json_encode($columns),
            'json_file' => $group_data
        ]);
    }
}
