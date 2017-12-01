<?php

namespace App\Http\Controllers;

use App\post;//PONER EL NOMBRE CON MINUSCULA TAL COMO EL ARCHIVO PHP CREADO

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
      //VAMOS A PASARLE LOS DATOS A LA VISTA
      $posts = Post::all();//LLAMAR AL METODO CON LA CLASE EN MAYUSCULAS PARA QUE JALE
      return view('posts/index')->with(['posts'=> $posts]);
    }

    public function show($postid)
    {
      $post = Post::find($postid);
      return view('posts/show')->with(['post'=> $post]);
    }

    public function create()
    {
      return view('posts/create');
    }

    public function store(Request $request)
    {
          $this->validate($request,[
            'title' => 'required',
            'url' => 'required|url'
          ]);
    }
}
