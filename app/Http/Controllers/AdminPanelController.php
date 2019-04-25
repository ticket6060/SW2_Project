<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Session;

class AdminPanelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::orderBy('id','desc')->get();
        return view('admin.userList')->with('storedUsers', $users);
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
                'newUserName' => 'required|min:5|max:20',
                'newUserEmail' => 'required|email',
                'newUserPassword' => 'required|min:5|max:20',
                'newUserPhone' => 'required|min:11|max:11',
                'newUserAddress' => 'required|min:5|max:100',
            ]);

        $user = new User;
        $user->name = $request->newUserName;
        $user->email = $request->newUserEmail;
        $user->password = $request->newUserPassword;
        $user->phone = $request->newUserPhone;
        $user->address = $request->newUserAddress;
        $user->save(); 

        return redirect()->route('admin.index');
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
        $user = User::find($id);

        return view('admin.userEdit')->with('usernameUnderEdit', $user);
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
        $this->validate($request, [
                'updatedUserName' => 'required|min:5|max:20',
                'updatedEmail' => 'required|email',
                'updatedPassword' => 'required|min:5|max:20',
                'updatedPhone' => 'required|min:11|max:11',
                'updatedAddress' => 'required|min:5|max:100',
            ]);

        $user = User::find($id);

        $user->name = $request->updatedUserName;
        $user->email = $request->updatedEmail;
        $user->password = $request->updatedPassword;
        $user->phone = $request->updatedPhone;
        $user->address = $request->updatedAddress; 

        $user->save();

        Session::flash('success', 'User #' . $id . ' has been successfully updated.');
        return redirect()->route('admin.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::find($id);

        $user->delete();

        Session::flash('success', 'User #' . $id . ' has been successfully deleted.');

        return redirect()->route('admin.index');
    }
}
