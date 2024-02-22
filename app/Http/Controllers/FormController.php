<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

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
    // public function store(Request $request): RedirectResponse
    // {
    //     $validated = $request->validate([
    //         'title' => 'required|unique:posts|max:255',
    //         'body' => 'required',
    //     ]);
    //    // $post = /** ... */

    //   //  return to_route('post.show', ['post' => $post->id]);
    // }
}
