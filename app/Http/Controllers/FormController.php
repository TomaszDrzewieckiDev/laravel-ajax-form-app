<?php

namespace App\Http\Controllers;

use App\Helpers\FormValidator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


use App\Http\Controllers\Controller;
use Exception;

class FormController extends Controller
{

    public function index(): View
    {
        return view('form.index');
    }

    /**
     * Store a new contact form data.
     */
    public function store(Request $request)
    {

        $fv= new FormValidator;
        try {
            $fv->isValidName($request->get('name'));
            $fv->isValidTelephone($request->get('telephone'));
            $fv->isValidEmail($request->get('email'));
            $fv->isValidContenet($request->get('content'));
            $fv->isValidFileType($_FILES['file']['name']);
            $fv->isValidFileSize($_FILES['file']['name']);

        } catch (Exception $e) {
            return response()->json(array('msg' => $e->getMessage()), 200);
        }

    /**
     * WALIDACJA OK -> TUTAJ ZAPIS DANYCH Z FORMULARZA
     */
        return response()->json(array('saved' => 'Poprawnie zapisano formularz'), 200);
    }


}
