<?php

namespace App\Http\Controllers;


use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;


use App\Http\Controllers\Controller;
use Exception;

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
        try {
            $this->isValidName($request->get('name'));
            $this->isTelephone($request->get('telephone'));
        } catch (Exception $e) {
            return response()->json(array('msg' => $e->getMessage()), 200);
        }


        return response()->json(array('msg' => 'Poprawnie wysłano formularz'), 200);
    }

    public function isValidName($name): bool
    {
        if (strlen($name) <= 100) {
            return true;
        } else {
            throw new Exception('Pole: Imie i Nazwisko - Za długi wpis');
        }
    }

    public function isValidTelephone($telephone): bool
    {
        if (is_int($telephone) <= 10) {
            return true;
        } else {
            throw new Exception('Pole: Telefon - Akceptowane tylko cyfry');
        }
    }
}
