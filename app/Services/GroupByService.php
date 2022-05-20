<?php

namespace App\Services;

use App\Models\Output;
use App\Repositories\Interfaces\GroupByRepositoryInterface;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GroupByService
{
    private $groupBy_repository;

    public function __construct(GroupByRepositoryInterface $groupBy_repository)
    {
        $this->groupBy_repository = $groupBy_repository;
    }

    public function groupBy($table_name, $columns)
    {
        $model = getModelClassNameByTable($table_name);
        DB::beginTransaction();
        $group_data = $this->groupBy_repository->groupByColumns($model, $columns);
        $this->groupBy_repository->insertOutput($table_name, $columns, $group_data);
        DB::commit();
        return $group_data;
    }
}
