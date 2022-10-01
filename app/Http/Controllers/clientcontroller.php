<?php


namespace App\Http\Controllers;

use Auth;
use Illuminate\Support\Facades\DB;

use App\Commande;


use Illuminate\Http\Request;

class clientcontroller extends Controller
{
    public function index()
    {
        return view('client.home');
    }
    public function new_commande(Request $request)
    {
        $nom = Auth::user()->name;
        $user_id = Auth::user()->id;
        $date = request('date');
        $type = request('type');

        DB::table('commandes')->insert([
            'nom_client' => $nom,
            'date' => $date,
            'type' => $type,
            'status' => 1,
            'user_id' => $user_id
        ]);

        return redirect('/ecommande/suivit');
    }
    public function suivit()
    {
        $user_id = Auth::user()->id;
        $commandes = DB::table('commandes')->where('user_id', $user_id)->get();
        return view('client.suivits', compact('commandes'));
    }
    public function commande($id)
    {
        $user_id = Auth::user()->id;
        $users = DB::table('users')->where('id', $user_id)->get();
        $commandes = DB::table('commandes')->where('id', $id)->get();
        return view('client.suivit', compact('commandes', 'users'));
    }
}
