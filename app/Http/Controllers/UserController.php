<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $search = $request->search;
        $users = User::
        where('name', 'like', '%' . $search .'%')
        ->orWhere('email', 'like', '%' . $search .'%')
        ->latest()
        ->paginate(10)
        ;
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'name'  =>  'required',
            'alamat'  =>  'required',
            'no_telepon'  =>  'required',
            'email'  =>  'required|email:rfc,dns|unique:App\Models\User,email',
        ]);
        $data['password'] = Crypt::encrypt(Str::random(8));

        if($request->file('image')){
            $data['image'] = $request->file('image')->store('users');
        }

        User::create($data);

        return redirect()->route('user.index')->with('success', 'Data pelanggan berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $data = $request->validate([
            'name'  =>  'required',
            'alamat'  =>  'required',
            'no_telepon'  =>  'required',
            'email'  =>  'required|email:rfc,dns',
        ]);
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $data['image'] = $request->file('image')->store('users');
        }
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'Data pelanggan berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        if($user->image){
            Storage::delete($user->image);
        }
        User::destroy($user->id);
        return redirect()->route('user.index')->with('success', 'Data pelanggan berhasil dihapus');

    }
}