<?php

namespace App\Http\Controllers;

use App\coment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ComentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
      $inicio=coment::all()->toArray();
     //return view('welcome',["inicio"=>$inicio]);
     
      
   }

   public function vista()
   {
    $coments=coment::all();
    return response()->json($coments);   
   }



    public function ver(Request $request,int $id=null)
    {
        $comnets=DB::table('coments')->where('product_id',1)->first();
        return response()->json([
                            
                                "coments"=>$coments->mensaje,
                                "id"=>$id,
                                "request"=>$request->all(),
                                "mensaje"=>$request->mensaje,
                                "pro_precio"=>"El precio es: ".$request->pro_precio,
                                "product_id"=>$request->product_id],200);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
   // public function create()
   // {
        //
   // }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function show(coment $coment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function edit(coment $coment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, coment $coment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\coment  $coment
     * @return \Illuminate\Http\Response
     */
    public function destroy(coment $coment)
    {
        //
    }
}
