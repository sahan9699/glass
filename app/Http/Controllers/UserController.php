<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $id = $request->input('query');
        $results = User::find($id); // Find the resource by its ID, throwing a 404 error if not found
        return view('dashboard', compact('results')); // Pass the retrieved resource to a view for display
    }
}
