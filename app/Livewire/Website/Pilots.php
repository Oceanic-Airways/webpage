<?php

namespace App\Livewire\Website;

use App\Models\User;
use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('website.template')]
class Pilots extends Component
{

    public $pilots = [];

    public function mount()
    {
        $response = Http::get('https://www.fsairlines.net/va_interface2.php?function=getPilotList' . '&va_id=' . env('FSAIRLINES_VA_ID') . '&format=json&apikey=' . env('FSAIRLINES_API)'));
        $data = json_decode($response, true);

        if ($data['status'] === 'SUCCESS') {
            $this->pilots = $data["data"];
            foreach ($this->pilots as $key => $value) {
                $pilot = User::where('pilot_id', $value["id"])->first();
                if ($pilot) {
                    array_push($this->pilots[$key], ["vid" => $pilot->vid]);
                }
            }
        } else {
            die("Failed in fsairlines server");
        }
    }

    public function render()
    {
        return view('website.pilot.view', ["pilots", $this->pilots]);
    }
}
