<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;
use App\Http\Requests\PagePostRequest;

class PageController extends Controller
{
      /**
    * index Page
    * @OA\Get(
    *     path="/api/page",
    *     tags={"Page"},
    *     summary="index Page",
    *     @OA\Response(
    *         response=200,
    *         description="Page's list."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Not Found"
    *     )
    * )
    */
    public function index()
    {
        //list of page
         $page = Page::all();
         return $page;
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

      /**
     * store Page
     * @OA\Post (
     *     path="/api/page",
     *     tags={"Page"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(
     *                          property="page_title",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="page_description",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "page_title":"title example",
     *                     "page_description":"description example"
     *                     
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="page_id", type="number", example=1),
     *              @OA\Property(property="page_title", type="string", example="title example"),
     *              @OA\Property(property="page_description", type="string", example="description example"),
     *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *          )
     *      ),
     *      @OA\Response(
     *          response=400,
     *          description="invalid",
     *          @OA\JsonContent(
     *              @OA\Property(property="msg", type="string", example="Record not found"),
     *          )
     *      )
     * )
     */
    public function store(PagePostRequest $request)
    {
        $page = Page::create($request->all());
        return $page;
    
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Page  $page
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
    }

     /**
     * Update Page
     * @OA\Put (
     *     path="/api/page/{page}",
     *     tags={"Page"},
     *     @OA\Parameter(
     *         in="path",
     *         name="page",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(
     *                          property="page_title)",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="page_description",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "page_title":"title ramdon",
     *                     "page_description":"welcome to my page"
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="page_id", type="number", example=2),
     *              @OA\Property(property="page_title", type="string", example="title ramdon"),
     *              @OA\Property(property="page_description", type="string", example="welcome to my page"),
     *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *          )
     *      )
     * )
     */
    public function update(PagePostRequest $request,$id)
    {
        $page = Page::where('page_id', $id)->update($request->all());
         return $page;
             
    }

      /**
     * Delete Page
     * @OA\Delete (
     *     path="/api/pages/{page}",
     *     tags={"Page"},
     *     @OA\Parameter(
     *         in="path",
     *         name="page",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(property="msg", type="string", example="Delete page success")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $page = Page::where('page_id', $id)->delete();
        return $page;
    }
}
