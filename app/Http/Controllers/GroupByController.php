<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class GroupByController extends Controller
{
    public function test(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'columns' => ['required', 'array'],
        ]);

        if ($validator->fails()) {
            return response($validator->errors(), 400);
        }
        return response(Product::get()->groupBy($request->columns));
    }
}
