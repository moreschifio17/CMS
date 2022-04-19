<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
/**
* @OA\Info(title="API CMS", version="1.0")
*
* @OA\Server(url="http://127.0.0.1:8000")
*/
class ImageController extends Controller
{
   /**
    * index Image
    * @OA\Get(
    *     path="/api/images",
    *     tags={"Image"},
    *     summary="index Image",
    *     @OA\Response(
    *         response=200,
    *         description="Image's list."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Not Found"
    *     )
    * )
    */
    public function index()
    {
        $images = Image::all();
        return $images;
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
     * store Image
     * @OA\Post (
     *     path="/api/images",
     *     tags={"Image"},
     *     @OA\RequestBody(
     *         @OA\MediaType(
     *             mediaType="application/json",
     *             @OA\Schema(
     *                 @OA\Property(
     *                      type="object",
     *                      @OA\Property(
     *                          property="image_name",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="image_extention",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "image_name":"picky",
     *                     "image_extention":".png"
     *                     
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=201,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="image_id", type="number", example=1),
     *              @OA\Property(property="image_name", type="string", example="picky"),
     *              @OA\Property(property="image_extention", type="string", example=".png"),
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
    public function store(PostRequest $request)
    {
        $image = Image::create($request->all());
       
        return $image;
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
    }

   /**
     * Update Image
     * @OA\Put (
     *     path="/api/images/{image}",
     *     tags={"Image"},
     *     @OA\Parameter(
     *         in="path",
     *         name="image",
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
     *                          property="image_name)",
     *                          type="string"
     *                      ),
     *                      @OA\Property(
     *                          property="image_extention",
     *                          type="string"
     *                      )
     *                 ),
     *                 example={
     *                     "image_name":"color",
     *                     "image_extention":".png"
     *                }
     *             )
     *         )
     *      ),
     *      @OA\Response(
     *          response=200,
     *          description="success",
     *          @OA\JsonContent(
     *              @OA\Property(property="image_id", type="number", example=2),
     *              @OA\Property(property="image_name", type="string", example="color"),
     *              @OA\Property(property="image_extention", type="string", example=".png"),
     *              @OA\Property(property="updated_at", type="string", example="2021-12-11T09:25:53.000000Z"),
     *              @OA\Property(property="created_at", type="string", example="2021-12-11T09:25:53.000000Z")
     *          )
     *      )
     * )
     */
    public function update(PostRequest $request, $id)
    {
        $image = Image::where('image_id', $id)->update($request->all());
         return $image;
    }

       /**
     * Delete Image
     * @OA\Delete (
     *     path="/api/images/{image}",
     *     tags={"Image"},
     *     @OA\Parameter(
     *         in="path",
     *         name="image",
     *         required=true,
     *         @OA\Schema(type="string")
     *     ),
     *     @OA\Response(
     *         response=200,
     *         description="success",
     *         @OA\JsonContent(
     *             @OA\Property(property="msg", type="string", example="Delete image success")
     *         )
     *     )
     * )
     */
    public function destroy($id)
    {
        $image = Image::where('image_id', $id)->delete();
        return $image;
    }
}
