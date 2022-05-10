<?php

namespace App\Http\Controllers\ApiController;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ItemController extends Controller
{
    
    public function index()
    {
        $items = Item::get();
        
        //parte da criação do arquivo json
        $item_info = Item::get()->toJson(JSON_PRETTY_PRINT);
        Storage::put('item_info.json', $item_info);
        //fim da parte da criação do arquivo json

        return response()->json($items);
   
    }

    //apenas para testar metodos sem colocar pra rodar, mas sim, organizar a escrita
    public function methodTest(){

        $item_info = Item::get()->toJson(JSON_PRETTY_PRINT);
        Storage::put('item_info.json', $item_info);

    }

    
    // public function create()
    // {
    //     return "create";
    // }
    //acho que não é usado em routes api

   
    public function store(Request $request)
    {
        $items = Item::create($request->all());
        return $items;   


    }

    
    public function show($id)
    {
        // $items = Item::get()->where($id, 'id');
        // return response()->json($items);
        $items = Item::get()->where('id', $id);
        return $items;
    }

   
    // public function edit($id)
    // {
    //     return "editando...{$id}";
    // }
    //esse aqui, acho que também nao usa nas routes api

    
    public function update(Request $request, $id)
    {
       
        Item::where('id', $id)->update($request->all());
        
        return "Editado com sucesso!";

        //pego do stackoverflow
        //Item::where('id',$id)->first()->update($request->all());

        //bom o erro estava em usar o get e update ao mesmo tempo, 
        //ou voce faz o get ou update , escolha.
        //get, create, update, delete. 
    }

    
    public function destroy($id)
    {
        Item::where('id', $id)->delete();

        return 'Deletado com sucesso!';
    }
}
