<?php

namespace App\Http\Controllers;

use App\Models\Red;
use App\Models\Page;
use App\Models\PageRed;
use Illuminate\Http\Request;
use App\Http\Requests\PageRedPostRequest;

class PageRedController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $page = Page::where('page_id', $id)->first() ;
        $red= Red::all();
        return [$page, $red];
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PageRedPostRequest $request)
    {
        //
        $pagered= new PageRed();
        $pagered->page_id = $request->page_id;
        $pagered->social_net_id = $request->social_net_id;
        $pagered->description = $request->description;
        $pagered->save();
        return $pagered;
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function show(Red $red)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function edit(Red $red)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Red $red)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Red  $red
     * @return \Illuminate\Http\Response
     */
    public function destroy(Red $red)
    {
        //
    }
}
