<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ModelProjeto;
use App\Http\Requests\ProjetosRequest;


class ProjetosController extends Controller
{

    private $projeto;

    public function __construct(){
       $this->projeto = new ModelProjeto();
       
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        #dd($this->projeto->all());
        $projeto = $this->projeto->all()->sortBy(callback:'nome');
        return view('index', compact('projeto'));  

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $projeto=$this->projeto->all();
        return view('create',compact('projeto'));  

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $cad=$this->projeto->create([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'data'=>$request->data,
            'status'=>$request->status
         ]);
         if($cad){
             return redirect('projetos');
         }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
       
        $projeto = $this->projeto->find($id);
        return view('show',compact('projeto'));  
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $projeto=$this->projeto->find($id);
        return view('create',compact('projeto'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    { 
        $this->projeto->where(['id'=>$id])->update([
            'nome'=>$request->nome,
            'descricao'=>$request->descricao,
            'data'=>$request->data,
            'status'=>$request->status
        ]);
        #return redirect('projetos');
        return view('index', compact('projeto'));  

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
