<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    
    public function index()
    {
        return view('login_view');
    }

    public function logged_in(Request $request){
        // $all_data = $request->all();
        $username = $request->user;
        return view('logged_in_view', ['user' => $username]);
    }

    public function get_all_data(){
        $items = Item::all();

        return view('page_view', ['items' => $items]);
    }
    
    public function create()
    {   
        return view('create_view');
    }


    public function save(Request $request){
        $dados = Item::create($request->all());

        // return $dados;
        return redirect()->route('get_all_data');
    }
   
    public function store(Request $request)
    {
        // $dados = Item::create($request->all());

        // return $dados;
        // echo "funcionou";
        

        //Item::create()
       // return $this->pokemon->create($request->all());
    }

   
    public function show($id)
    {
        
    }

    
    public function edit($id)
    {
        //
    }

    
    public function update(Request $request, $id)
    {
        //
    }

    
    public function destroy($id)
    {
        //
    }
}
