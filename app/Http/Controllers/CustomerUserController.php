<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Request as RequestEdit;

class CustomerUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = DB::table('users')->where('role', 'customer')->get();

        return view('dashboard.customer-layout.index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
		]);
  
		User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'customer',
            'password' => Hash::make($request->password),
        ]);
        return redirect()->route('CustomerUser.index')->with('success', 'created user successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $items = User::findOrFail($id);
        // return view('dashboard.customer-layout.detail', compact('items'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $items = User::findOrFail($id);
        return view('dashboard.customer-layout.edit', compact('items'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(RequestEdit $request, $id)
    {
        $data = User::findOrFail($id);
        $data->name = RequestEdit::input('name');
        $data->email = RequestEdit::input('email');
        $data->role = RequestEdit::input('role');
        
        if ( ! RequestEdit::input('password') == '')
        {
            $data->password = bcrypt(RequestEdit::input('password'));
        }

        $data->save();
        return redirect()->route('CustomerUser.index')->with('success', 'edit user successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $items = User::findOrFail($id);
        $items->delete();
        return redirect()->route('CustomerUser.index')->with('success', 'delete user successfully.');
    }
}
