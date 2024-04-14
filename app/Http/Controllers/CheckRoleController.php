<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;

class UserController extends Controller
{
    /**
     * Получает роль пользователя по его идентификатору.
     *
     * @param  int  $userId
     * @return \Illuminate\Http\Response
     */
    public function getUserRole($userId)
    {
        $roleId = Users::getRole($userId);
        if($roleId='')
    }
}
