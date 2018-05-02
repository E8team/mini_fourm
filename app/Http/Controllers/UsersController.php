<?php


namespace App\Http\Controllers;


use App\Http\Requests\UpdateUserRequest;
use App\User;

class UsersController extends Controller
{
    public function show(User $user)
    {
        return view('user_info', ['user' => $user]);
    }

    public function ajaxUpdate(User $user, UpdateUserRequest $request)
    {
        $data = $request->validated();
        if (isset($data['username'])) {
            $data['username'] = e($data['username']);
        }

        $data['intro'] = isset($data['intro']) ? e($data['intro']) : '';

        $file = $request->file('avatar');

        if (!is_null($file) && $file->isValid()) {
            $data['avatar'] = $file->store('uploads', [
                'disk' => 'public'
            ]);
        }
        $user->update($data);
        return redirect()->route('index');
    }
}
