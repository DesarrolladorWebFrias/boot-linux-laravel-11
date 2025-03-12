<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //PARA INDICAR LA VISTA 
        //control shif tecla hacia abajo para rellenar
//__________________________________________________________________________________________
//_______CREAR UN REGISTRO 
        // Post::create(

        //     [
        //         'title' => 'test title',
        //         'slug' => 'test slug',
        //         'descripcion' => 'test descripcion',
        //         'category_id' => 1,
        //         'content' => 'test title',
        //         'image' => 'test image',
        //         'posted' => 'not',

        //     ]
        // );
        //_____________________________________________________________________________________
//-----------------------------------------------------------------------------------------------        
    //___ACTUALIZAR UN REGISTRO 

// SELECT * FROM WHERE ID=1
//    $post = Post::find(1);

  
     
//     $post->update(

//         [
//             'title' => 'test title new',
//             'slug' => 'test slug',
//             'descripcion' => 'test descripcion',
            
            

//         ]
 //);

// ELIMINAR REGISTRO 
//------------------------------------------------------------------------------------------------
  $post = Post::find(3)->delete();
  



        return 'index';

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
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
