<?php

namespace App\Http\Controllers;

use App\post;//PONER EL NOMBRE CON MINUSCULA TAL COMO EL ARCHIVO PHP CREADO

use App\Http\Requests\CreatePostRequest;//RECORDAR IMPORTAR LA CLASE

use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
      //VAMOS A PASARLE LOS DATOS A LA VISTA
      //$posts = Post::all();//LLAMAR AL METODO CON LA CLASE EN MAYUSCULAS PARA QUE JALE
      $posts = Post::orderBy('id','desc')->paginate(10);
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

    public function store(CreatePostRequest $request)
    {
          //AL PONER LA CLASE ADELANTE DE REQUEST LARAVEL EJECUTA LOS METODOS AUTHORIZE Y RULES PARA REALIZAR LAS VALIDACIONES

          /*PARA LEER LA DATA:
            $reques->get('nombredecampo');
            $request->atributo //ATRIBUTOS MAGICOS
          */
          /* //PRIMERA FORMA
          $post = new Post;
          $post->title = $request->get('title');
          $post->description = $request->get('description');
          $post->url = $request->get('url');
          $post->save();*/
          //SEGUUNDA FORMA
          $post = Post::create($request->only('title','description','url'));
          return redirect()->route('posts_path');
    }
}
