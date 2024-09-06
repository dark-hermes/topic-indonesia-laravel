<?php

namespace App\Livewire\TopicIndonesia;

use Livewire\Component;
use App\Models\TiOption;

class Footer extends Component
{
    public function render()
    {
        $email = TiOption::where('key', 'email')->first();
        $phone1 = TiOption::where('key', 'phone1')->first();
        $phone2 = TiOption::where('key', 'phone2')->first();
        $address = TiOption::where('key', 'address')->first();
        $instagram = TiOption::where('key', 'instagram')->first();

        return view('livewire.topic-indonesia.footer')->with([
            'email' => $email,
            'phone1' => $phone1,
            'phone2' => $phone2,
            'address' => $address,
            'instagram' => $instagram
        ]);
    }
}
