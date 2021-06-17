<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request, User $users)
    {
        $q = $request->input('q');

        $users = $users->when($q, function($query) use ($q){
            return $query->where('name', 'like', '%'.$q.'%')
            ->orWhere('email', 'like','%'.$q.'%');
        })->simplePaginate(2);

        $request = $request->all();;

        return view('users.index', ['users' => $users, 'request'=> $request]);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'role' => 'required',
            'name' => 'required|min:3|max:50',
            'email' => 'email',
            'password' => 'min:6|required_with:password_confirmation|same:password_confirmation',
            'password_confirmation' => 'min:6'
        ]);

        User::create([
            'role' => $request['role'],
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()
                ->route('users')
                ->with('message', __('messages.create'));
    }

    public function edit($id)
    {
        $user = User::find($id);
        
        return view('users.edit', ['user'=> $user]);
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);

        $this->validate($request, [
            'role' => 'required',
            'name' => 'required|min:3|max:50',
            'email' => 'email',
        ]);

        $user->role = $request->input('role');
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->save();

        return redirect()
                ->route('users')
                ->with('message', __('messages.update'));
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()
                ->route('users')
                ->with('message', __('messages.destroy'));
    }
}