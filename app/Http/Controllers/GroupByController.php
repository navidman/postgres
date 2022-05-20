<?php

namespace App\Http\Controllers;

use App\Models\Car;
use App\Models\Output;
use App\Services\GroupBy;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class GroupByController extends Controller
{
    public function group(Request $request)
    {
        return Car::all();
        $validator = Validator::make($request->all(), [
            'table' => ['required', 'string'],
            'columns' => ['required', 'array'],
        ]);
        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }
        $className = 'App\\Models\\' . Str::studly(str::singular($request->table));
        if(class_exists($className)) {
            $model = new $className;
        }
        $group_data = $model::get()->groupBy($request->columns);
        Output::Create([
            'table_name' => $request->table,
            'columns' => json_encode($request->columns),
            'json_file' => $group_data
        ]);

        return response($group_data,Response::HTTP_OK);
    }
}
