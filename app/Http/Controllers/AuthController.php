<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Http\Requests\UserLoginRequest;
use App\Models\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    private $user;

    public function index()
    {
        return view('login');
    }

    public function login(UserLoginRequest $request)
    {
        $canLogin = $this->authUser(['email' => $request->email, 'password' => $request->password]);
        if ($canLogin) {
            return redirect()->route('page.home');
        }
        return redirect()->back()->with(['danger' => 'Usuário não encontrado.']);
    }
    

    public function register()
    {
        return view('user-register');
    }

    public function create(CreateUserRequest $request)
    {
        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password)
        ];

        $user = User::create($data);
        $user->save();

        if($user) {
            return redirect()->back()->with(['success' => 'Usuário criado com sucesso!']);
        } else {
            return redirect()->back()->with(['danger' => 'Não foi possível criar o usuário.']);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
    private function authUser($user)
    {
        if ($user['email'] && $user['password']) {
            try {
                $isAuth = Auth::attempt($user);
                if ($isAuth) {
                    $this->user = Auth::user();
                    return true;
                }
                return false;
            } catch (Exception $e) {
                return redirect()->back()->with(['danger' => 'Ocorreu um erro ao autenticar o usuário.']);
            }
        }
    }
}
