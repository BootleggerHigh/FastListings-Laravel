<?php

namespace App\Http\Controllers;

use App\Http\Requests\ListingRequest;
use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(ListingRequest $request)
    {
        Listing::create($request->except('_token'));
        return redirect(route('home'))->with('status', 'Create a listing');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $listing = Listing::findOrFail($id);
        return view('show', compact('listing'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $listing = Listing::findOrFail($id);
        return view('edit-listing', compact('listing'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function update(ListingRequest $request, $id)
    {
        $listing = Listing::findOrFail($id);
        $listing->update($request->except('_method','_token'));
        return redirect(route('home'))->with('status', 'Edit a listing');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Listing $listing
     * @return \Illuminate\Http\Response
     */
    public function destroy($listing)
    {
        $listing = Listing::findOrFail($listing);
        $listing->delete();
        return redirect(route('home'))->with('status', 'Destroy a listing');
    }
}
