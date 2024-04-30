<?php

namespace App\Http\Controllers;

use App\DTO\Auth\loginDTO;
use Illuminate\Http\Request;
use App\DTO\Auth\registerDTO;
use App\Http\Requests\loginRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\registerRequest;
use App\Repositories\UserRepositoryInterface;

class AuthController extends Controller
{
    public function __construct(public UserRepositoryInterface $repository)
    {

    }

    public function register(registerRequest $request)
    {
        
        $registerDTO = registerDTO::fromRequest($request);
        $this->repository->register($registerDTO);

        switch ($request->role) {
            case 'Client':
                return redirect('/client/home');
                break;
            case 'Artisan':
                return redirect('/client/dashboard');
                break;
            case 'Guide':
                return redirect('/client/dashboardGuide');
                break;
        
        }
    }

    public function login(loginRequest $request){

        $loginDTO = loginDTO::fromRequest($request);
        $this->repository->login($loginDTO);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/Auth/login');
    }
}
