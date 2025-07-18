<?php

namespace App\Http\Controllers;

use App\Models\accomodation;
use Illuminate\Http\Request;

class AccomodationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $accomodation = [
            ['title'=>'Milano', 'content'=>'B&b vicino ai navigli', 'image'=>'https://a0.muscache.com/im/pictures/miso/Hosting-1447662302881867648/original/fe47b427-7993-4c63-920c-bf4f95b3b830.jpeg?im_w=720']
        ];

        $title = 'B&b';
        return view('accomodation.index', compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(accomodation $accomodation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(accomodation $accomodation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, accomodation $accomodation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(accomodation $accomodation)
    {
        //
    }
}
