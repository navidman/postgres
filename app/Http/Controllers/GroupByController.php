<?php

namespace App\Http\Controllers;

use App\Http\Requests\GroupByRequest;
use App\Services\GroupBy;
use Illuminate\Http\Response;

class GroupByController extends Controller
{
    public function group(GroupByRequest $request)
    {
        try {
            $group_data= GroupBy::groupBy($request->table, $request->columns);
            return response($group_data,Response::HTTP_OK);
        } catch (\Exception $exception)
        {
            return response($exception);
        }
    }
}
