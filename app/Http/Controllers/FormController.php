<?php

namespace App\Http\Controllers;

use App\Models\Form;
use Illuminate\Http\Request;

class FormController extends Controller
{
    public function index()
    {
        $items = Form::all();
        return view('index', ['items' => $items]);
    }
    public function create(Request $request)
    {
        $this->validate($request, Form::$rules);
        $form = $request->all();
        Form::create($form);
        return view('thanks');
    }
}