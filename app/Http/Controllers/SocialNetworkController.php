<?php

namespace App\Http\Controllers;

use App\Models\SocialNetwork;
use Illuminate\Http\Request;

/**
 * Class SocialNetworkController
 * @package App\Http\Controllers
 */
class SocialNetworkController extends Controller
{
    /**
    * index social-network
    * @OA\Get(
    *     path="/api/social",
    *     tags={"Social Network"},
    *     summary="index social-network",
    *     @OA\Response(
    *         response=200,
    *         description="Social-network's list."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Not Found"
    *     )
    * )
    */
    public function index()
    {
        $socialNetworks = SocialNetwork::all();
        return $socialNetworks;
         
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      /*   $socialNetwork = new SocialNetwork();
        return view('social-network.create', compact('socialNetwork')); */
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      /*   request()->validate(SocialNetwork::$rules);

        $socialNetwork = SocialNetwork::create($request->all());

        return redirect()->route('social-network.index')
            ->with('success', 'SocialNetwork created successfully.'); */
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       /*  $socialNetwork = SocialNetwork::find($id);

        return view('social-network.show', compact('socialNetwork')); */
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      /*   $socialNetwork = SocialNetwork::find($id);

        return view('social-network.edit', compact('socialNetwork')); */
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  SocialNetwork $socialNetwork
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SocialNetwork $socialNetwork)
    {
        /* request()->validate(SocialNetwork::$rules);

        $socialNetwork->update($request->all());

        return redirect()->route('social-network.index')
            ->with('success', 'SocialNetwork updated successfully'); */
    }

    /**
     * @param int $id
     * @return \Illuminate\Http\RedirectResponse
     * @throws \Exception
     */
    public function destroy($id)
    {
       /*  $socialNetwork = SocialNetwork::find($id)->delete();

        return redirect()->route('social-networks.index')
            ->with('success', 'SocialNetwork deleted successfully'); */
    }
}
