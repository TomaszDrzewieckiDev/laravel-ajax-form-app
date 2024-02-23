<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


use App\Http\Controllers\Controller;

class FormController extends Controller
{
    /**
     * Show the form to create a new contact form.
     */
    public function index(): View
    {
        return view('form.index');

    }

    /**
     * Store a new contact form data.
     */
    public function store(Request $request)
    {

        // $validated = $request->validate([
        //     'name' => 'required|unique:posts|max:5',
        //     'telephone' => 'required',
        // ]);

            // return response()->json( [ 'success' => 'Customer registered successfully!' ] );



        $msg = "This is a simple message";
      return response()->json(array('msg'=> $request->get('name')), 200);
 }
}
