<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::latest()->where('id', '!=', auth()->id())->get();
        return view('sirekudace.dashboard.users.index', compact('users'));
    }

    public function create()
    {
        return view('sirekudace.dashboard.users.create');
    }

    public function store(Request $request)
    {
        $data = $request->except('_token');
        $data['password'] = bcrypt($request->password);
        // dd($data);
        User::create($data);
        flash()->addSuccess('User berhasil dibuat');
        return redirect()->route('users.index');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user)
    {
        return view('sirekudace.dashboard.users.edit', compact('user'));
    }

    public function update(Request $request, User $user)
    {
        $data = $request->except('_token', '_method');
        if ($request->password) {
            $data['password'] = bcrypt($request->password);
        } else {
            unset($data['password']);
        }
        $user->update($data);
        flash()->addSuccess('User berhasil diupdate');
        return redirect()->route('users.index');
    }

    public function destroy(User $user)
    {
        $user->delete();
        flash()->addSuccess('User berhasil dihapus');
        return back();
    }
}
