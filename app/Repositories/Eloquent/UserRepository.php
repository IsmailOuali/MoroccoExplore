<?php

namespace App\Repositories\Eloquent;


use App\Models\User;
use App\Models\Guide;
use App\Models\Client;
use App\Models\Artisan;
use App\DTO\Auth\loginDTO;
use App\DTO\Auth\registerDTO;
use Illuminate\Support\Facades\Auth;
use App\Repositories\UserRepositoryInterface;
use TimWassenburg\RepositoryGenerator\Repository\BaseRepository;

/**
 * Class UserRepository.
 */
class UserRepository extends BaseRepository implements UserRepositoryInterface
{
    /**
     * UserRepository constructor.
     *
     * @param User $model
     */

    public function __construct(User $model)
    {
        parent::__construct($model);
    }

    public function register(registerDTO $registerDTO)
    {
        $data = $this->getArray($registerDTO);
        // dd($data);
       
        $user = User::create($data);
        switch ($user->role) {
            case 'Client':
                $client = Client::create(['user_id'=> $user->id]);
                return abort(redirect('/client/home'));

            case 'Artisan':
                $artisan = Artisan::create(['user_id'=> $user->id]);
                return abort(redirect('/client/dashboard'));


            case 'Guide':
                $guide = Guide::create(['user_id'=> $user->id]);
                return abort(redirect('/client/dashboardGuide'));

                break; 
            }
    }

    private function getArray(registerDTO $registerDTO)
    {
       
        return [
            'name'=> $registerDTO->name,
            'email'=> $registerDTO->email,
            'password'=> $registerDTO->password,
            'role'=> $registerDTO->role,
        ];
    }
    private function getArrayl(loginDTO $loginDTO)
    {
       
        return [
            'email'=> $loginDTO->email,
            'password'=> $loginDTO->password,
        ];
    }

    public function login(loginDTO $loginDTO){
        $data = $this->getArrayl($loginDTO);
        if (Auth::attempt($data)){
            $user = Auth::user();
            echo 'login successfully';
            switch ($user->role) {
                case 'Client':
                    return abort(redirect('/client/home'));
                    break;
                case 'Artisan':
                    return abort(redirect('/client/dashboard'));
                    break;
                case 'Guide':
                    return abort(redirect('/client/store'));
                    break;
                
                default:
                    break;
            }
        }else{
            return view('login');
        }
    }   
}
