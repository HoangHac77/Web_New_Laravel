<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view("admin.pages.user.user", compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.pages.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {


        // dd($generatedImageName);


        $request->validate([
            'name_user' => 'required|min:3',
            'email' => 'required|email',
            // 'password' => 'required|min:6|max:20',
            'gender' => 'required',
            'role' => 'required',
            'img_profile' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);

        $generatedImageName = 'img_user' . time() . '-'
            . $request->name . '.'
            . $request->img_profile->extension();
        $request->img_profile->move(public_path('images'), $generatedImageName);

        // mac dinh tao user thi pass la 123456
        if ($request->input('password')) {
            $password = bcrypt($request->password);
        } else {
            $password = bcrypt('123456');
        }
        $users = User::create([
            'name_user' => $request->input('name_user'),
            'email' => $request->input('email'),
            'password' => $password,
            'gender' => $request->input('gender'),
            'img_profile' =>  $generatedImageName,
            'role' => $request->input('role'),
        ]);

        $users->save();
        return redirect('/admin/user');
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
    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.pages.user.edit')->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            'name_user' => 'required|min:3',
            // 'email' => 'required|email',
            // 'password' => 'required|min:6|max:20',
            'gender' => 'required',
            'role' => 'required',
            // 'img_profile' => 'required|mimes:jpg,png,jpeg|max:5048',
        ]);


        $users = User::findOrFail($id);

        if ($request->has('img_profile')) {
            $generatedImageName = 'img_user' . time() . '-'
                . $request->name . '.'
                . $request->img_profile->extension();
            $request->img_profile->move(public_path('images'), $generatedImageName);

            $user_data = [
                'name_user' => $request->input('name_user'),
                // 'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'img_profile' =>  $generatedImageName,
                'role' => $request->input('role'),
            ];
        } else {
            $user_data = [
                'name_user' => $request->input('name_user'),
                // 'email' => $request->input('email'),
                'gender' => $request->input('gender'),
                'role' => $request->input('role'),
            ];
        }

        // // save database
        $users->update($user_data);
        return redirect('/admin/user');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::find($id);
        $users->delete();

        return redirect('/admin/user');
    }
}
