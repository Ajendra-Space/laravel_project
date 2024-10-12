<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Resto;
use Session;
use Crypt;
use App\Models\User;
use Illuminate\Http\Request;

class RestoController extends Controller    
 {
    //

    function index()
    {
        // return 'Connected';
        return view( 'home' );
    }

    // function login(Request $req)
    // {
    //     $user = User::where("email",$req->input('email'))->get();
    //     if(crypt::decrypt($user[0]->password)==$req->input('password'))
    //     {
    //         $req->session()->put('user',$user[0]->name);
    //         return redirect('/');
    //     }
    // }

    public function login(Request $req)
{
    // Validate the request
    $req->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    // Fetch the user by email
    $user = User::where("email", $req->input('email'))->first(); // Use first() instead of get()

    // Check if user exists
    if ($user) {
        // Store the user's name in the session
        $req->session()->put('user', $user->name);
        return redirect('/'); // Redirect to the home page
    }

    // Handle the case where the user is not found
    return response()->json(['error' => 'User not found'], 404);
}


    function checklist()
    {
        $data =  resto::all();
        return view( 'checklist', [ 'data'=>$data ] );
    }

    function add( Request $req )
 {
        $resto = new Resto;
        $resto->name = $req->input( 'name' );
        $resto->email = $req->input( 'email' );
        $resto->gender = $req->input( 'gender' );
        $resto->address = $req->input( 'address' );
        $resto->save();
        $req->session()->flash( 'status', 'Submit Data Successfully' );
        return redirect( 'checklist' );
    }

    public function delete( $id )
 {
        $resto = Resto::find( $id );

        if ( $resto ) {
            $resto->delete();
            Session::flash( 'delete', 'Delete Data Successfully' );
        } else {
            Session::flash( 'delete', 'Data not found' );
        }

        return redirect( 'checklist' );
    }

    function edit( $id )
 {
        $data = resto::find( $id );
        return view( 'edit', [ 'data'=>$data ] );
    }

    function update( Request $req )
 {
        $resto = resto::find( $req->input( 'id' ) );
        $resto->name = $req->input( 'name' );
        $resto->email = $req->input( 'email' );
        $resto->gender = $req->input( 'gender' );
        $resto->address = $req->input( 'address' );
        $resto->save();
        $req->session()->flash( 'status', 'Update Data Successfully' );
        return redirect( 'checklist' );
    }

    function register( Request $req )
    {
        $user = new User;
        $user->name=$req->input('name');
        $user->email=$req->input('email');
        $user->password=Crypt::encrypt($req->input('password'));
        $user->gender=$req->input('gender');
        $user->contact=$req->input('contact');
        $user->address=$req->input('address');
        $user->save();
        $req->session()->put( 'user', $req->input('name') );
        return redirect( '/' );
    }

    public function logout(Request $req)
    {
        // Clear the session
        $req->session()->forget('user');
        
        // Redirect to the login page
        return redirect('/login');
    }
    
}   
