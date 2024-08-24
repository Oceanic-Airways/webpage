<?php

namespace App\Livewire\Website;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('website.template')]
class Settings extends Component
{
    public $pilotStats;

    public $vid;
    public $vatsimId;


    public function mount()
    {

        $this->vid = Auth::user()->vid;
        $this->vatsimId = Auth::user()->vatsim_id;

        $response = Http::get('https://www.fsairlines.net/va_interface2.php?function=getPilotData&pilot_id=' . Auth::user()->pilot_id . '&va_id=' . env('FSAIRLINES_VA_ID') . '&format=json&apikey=' . env('FSAIRLINES_API)'));
        $data = json_decode($response, true);

        if ($data['status'] === 'SUCCESS') {
            $this->pilotStats = $data["data"][0];
        } else {
            die("Failed in fsairlines server");
        }
    }

    public function render()
    {
        return view(
            'website.pilot.settings',
            [
                "pilotStats" => $this->pilotStats,
            ]
        );
    }

    public function saveData()
    {
        $this->validate([
            'vid' => 'nullable',
            'vatsimId' => 'required_without:vid',
        ]);

        $user = User::find(Auth::user()->id);

        $user->vid = $this->vid;
        $user->vatsim_id = $this->vatsimId;

        $user->save();

        return redirect()->route('pilot.dashboard');
    }
}
