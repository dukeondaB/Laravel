<?php

namespace App\Http\Controllers;

use App\Models\Rating;
use Illuminate\Http\Request;

class ratingController extends Controller
{
    public function addRating(Request $request)
    {
        $input = new Rating;
        $input->fill($request->all());

        // $input->review = $request->review;
        // $input->rating = $request->input;
        $input->user_id = \auth()->user()->id;
        $input->save();
        return back();
    }
}
