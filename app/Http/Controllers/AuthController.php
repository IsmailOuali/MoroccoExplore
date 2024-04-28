<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DTO\Auth\registerDTO;
use App\DTO\Auth\loginDTO;
use App\Http\Requests\registerRequest;
use App\Http\Requests\loginRequest;
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
                return redirect('/client/dashboardArtisan');
                break;
        
        }
    }

    public function login(loginRequest $request){

        $loginDTO = loginDTO::fromRequest($request);
        $this->repository->login($loginDTO);
    }
}
