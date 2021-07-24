<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\BookProduct;
use App\Http\Controllers\CdProduct;
use App\Models\products;
use App\Models\register;
use DB;

class ProductController extends Controller
{
    public static function index(){
        $products=products::all();
        
        foreach ($products as $product) {
            switch ($product->type) {
                case "cd":
                    $cdproducts = array(
                        $product->id,
                        $product->title,
                        $product->firstname,
                        $product->mainname,
                        $product->price,
                        $product->playlength
                    );
                    $cds[] = $cdproducts;
                    break;
                case "book":
                    $bookproducts = array(
                        $product->id,
                        $product->title,
                        $product->firstname,
                        $product->mainname,
                        $product->price,
                        $product->numberofpages
                    );
                    $books[] = $bookproducts;
                    break;
                }
                
            }
            
            return view('welcome')->with(['cds' => $cds, 'books' => $books]);
       
        }

    public static function save(Request $req){
        $numberofpages=0;
        $playlength=0;
        $products = new products;

        $products->title=$req->title;
        $products->firstname=$req->firstname;
        $products->mainname=$req->mainname;
        $products->type=$req->type;
        $products->price=$req->price;
        if($req->type=="book"){
        $products->numberofpages=$req->playpg;
        $products->playlength=$playlength;
        }
        if($req->type=="cd"){
        $products->numberofpages=$numberofpages;    
        $products->playlength=$req->playpg;

        }
        $products->save();

        
       if($products->save()){
            return redirect('/');
        }

    }


    public static function delete(int $id){
        DB::connection('mysql')->delete('delete from products where id=?',array($id));
        return redirect('/');
        
    }


    public static function getProduct(int $id){
        $products=products::find($id);
        return view('UpdateForm')->with('products',$products);
       
    }


    public function updateproduct(Request $req,int $id){
        $playlength = 0;
        $numberofpages = 0;
        $products = products::find($id);

        $products->title=$req->title;
        $products->firstname=$req->firstname;
        $products->mainname=$req->mainname;
        $products->type=$req->type;
        $products->price=$req->price;
        if($req->type=="book"){
            $products->numberofpages=$req->playpg;
            $products->playlength=$playlength;
            }
            if($req->type=="cd"){
            $products->numberofpages=$numberofpages;    
            $products->playlength=$req->playpg;
            }

        $products->save();
        return redirect('/');
    }

    public function afterlogin(Request $req){
        $username = $req->input('username');
        $password = $req->input('password');

        $check = DB::table('users')->where(['Name'=>$username,'password'=>$password])->get();

        if(count($check) > 0){

            $users = DB::table('users')->where('Name', $username)->first();

            $role=$users->Role;
           $req->session()->put('username',$username);
           $req->session()->put('role',$role);
           return redirect('/');
            
        }
        else{
            return redirect('/login');
        }
    }

    public function register(Request $req){
        $role = 0;
        $user = new register;
        $user->Name=$req->username;
        $user->Email=$req->email;
        $user->Password=$req->password;
        $user->Role=$role;
        $user->save();
        if($user->save()){
        return redirect('/login');
        }
    }

    public function logout(){
    session()->forget('username');
    session()->forget('role');
    return view('newLogin');
    }
}

?>