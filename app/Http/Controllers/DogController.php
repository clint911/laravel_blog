<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Dog;

class DogController extends Controller
{
    //
     public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
        ]);
        Dog::create($request->all());

        return to_route('index');
    }
    public function delete($id) {
        $dog = Dog::find($id);
        $dog->delete();

        return to_route('index');
    }
}
