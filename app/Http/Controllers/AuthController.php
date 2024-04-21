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

    }

    public function login(loginRequest $request){

        $loginDTO = loginDTO::fromRequest($request);
        $this->repository->login($loginDTO);
    }
}
