<?php

namespace App\Http\Controllers\WebController;

use App\Http\Controllers\Controller;
use App\Models\Item;
use App\Models\ItemSecret;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ItemController extends Controller
{
    
    public function index()
    {
      return view('login_view');

       //so pra salvar no banco pra teste

    //    $pass = Hash::make('fakedemais');   //senha321
    //    ItemSecret::insert([
    //        'userDB' => 'fakeinsight',    //vitordl123
    //        'passwordDB' => $pass
    //    ]);

    }



    public function logged_in(Request $request){
        
        if(isset($request->user) && isset($request->password)){
          

            $infoDB = ItemSecret::get();
    
       
            foreach($infoDB as $info){
                if (Hash::check($request->password, $info->passwordDB)) {
                
                    if($request->user == $info->userDB){
                        return view('logged_in_view', ['user' => $info->userDB]);
                    }
                }        
            }
            
        }

       return "Usuario ou senha incorretos.";

        
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
        //por algum motivo esse metodo nao puxou dai eu criei uma rota
        //para o save e fiz da mesma forma
        
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
