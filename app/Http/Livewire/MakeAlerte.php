<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Alerte;
use  Illuminate\Support\Facades\Auth;

class MakeAlerte extends Component
{

    public $type;
    public $niveau;
    public $description;
    public $longitude;
    public $latitude;
    public $succes;


    public function render()
    {
        return view('livewire.make-alerte');
    }

    public function submitAlerte()
    {
        $ip= '160.155.97.93';
       // $userIp = $this->ip();
        $locationData = \Location::get($ip);



        Alerte::create([
            "type"=>$this->type,
            "user_id"=>Auth::User()->id,
            "niveau"=>$this->niveau,
            "description_alerte"=>$this->description,
            "latitude"=>$locationData->latitude,
            "longitude"=>$locationData->longitude,
            "ville"=>$locationData->cityName,]);

        $this->succes = true;
    }

    public function getIp(){
        foreach (array('HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'HTTP_X_FORWARDED', 'HTTP_X_CLUSTER_CLIENT_IP', 'HTTP_FORWARDED_FOR', 'HTTP_FORWARDED', 'REMOTE_ADDR') as $key){
            if (array_key_exists($key, $_SERVER) === true){
                foreach (explode(',', $_SERVER[$key]) as $ip){
                    $ip = trim($ip); // just to be safe
                    if (filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_NO_PRIV_RANGE | FILTER_FLAG_NO_RES_RANGE) !== false){
                        return $ip;
                    }
                }
            }
        }
    }
}
