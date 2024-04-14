<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use App\Models\Avatar;

class AccountDataUpdateController extends Controller
{
    public function edit(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $avatar = Avatar::where('user_id', $user->id)->firstOrFail();

        // Обновляем данные пользователя
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->tel = $request->input('tel');
        $user->password = $request->input('pass');
        $avatarFile=$request->file('avatar');
        $avatarPatch=$avatarFile->storeAs('public/avatars', $avatarFile);
        $avatar->user_avatar=$avatarPatch;
        $user->save();
        $avatar->save();
        // Проверяем, загружено ли изображение
      

        // Перенаправляем пользователя на другую страницу или показываем сообщение об успешном обновлении
        return redirect()->route('account');
    }
}
