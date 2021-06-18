<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAdminPostRequest;
use App\Http\Requests\UpdateAdmin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Resources\PostResource;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $posts = Admin::paginate(10);

        return PostResource::collection($posts);
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
    public function store(StoreAdminPostRequest $request)
    {
        // dd($request->all(),$request->validated());

         Admin::create($request->validated());

        $posts = Admin::paginate(10);

        return PostResource::collection($posts);

            return response()->json([
            'message' => 'created successfully !.'
            ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
     
        $posts = Admin::findOrFail($id);
       
        return PostResource::collection($posts);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdmin $request, $id)
    {
        $admin = Admin::findOrFail($id);
        $admin->update($request->validated());

        return new PostResource($admin);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Admin::findOrFail($id);

        if($post->delete()){
        return PostResource::collection($post);

            return response()->json([
            'message'=>"deleted successfully"
            ]);
        }
    }
}
