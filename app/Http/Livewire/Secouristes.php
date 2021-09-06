<?php

namespace App\Http\Livewire;
use App\Models\Alerte;
use  Illuminate\Support\Facades\Auth;



use Livewire\Component;

class Secouristes extends Component
{

    public $alert;
    public $S_alert;
    public $action = 'dash';
    public $nb_notif;
    public $map;

    public $alert_select;


    public function mount()
    {
        $this->alert=Alerte::where('ville', Auth::user()->ville_secour)->orderByDesc('created_at')->get();
        $this->nb_notif=count($this->alert);
    }


    public function selectAlerte(){

        dd($this->alert);

    }

    public function recuperAlerte($id){
        $this->S_alert=Alerte::find($id);

        $this->action='read';

    }


    public function render()
    {
        return view('livewire.secouristes');
    }

    public function readAlert($id)
    {
        $this->alert_select = Alerte::find($id);
        $this->action = "read";
        $this->map = true;
    }

    public function intervation()
    {

    }
}
