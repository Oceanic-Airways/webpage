<?php

namespace App\Livewire\Website;

use Illuminate\Support\Facades\Http;
use Livewire\Attributes\Layout;
use Livewire\Component;


#[Layout('website.template')]
class Index extends Component
{

    public $data;

    public function mount()
    {
        $response = Http::get('https://www.fsairlines.net/va_interface2.php?function=getAirlineStats' . '&va_id=' . env('FSAIRLINES_VA_ID') . '&format=json&apikey=' . env('FSAIRLINES_API)'));
        $data = json_decode($response, true);

        if ($data['status'] === 'SUCCESS') {
            $this->data = $data["data"][0];
        } else {
            die("Failed in fsairlines server");
        }
    }

    public function render()
    {
        return view(
            'website.index',
            ["data" => $this->data]
        );
    }
}
