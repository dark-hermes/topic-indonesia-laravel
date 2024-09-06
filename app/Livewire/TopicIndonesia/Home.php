<?php

namespace App\Livewire\TopicIndonesia;

use App\Models\TiTeam;
use Livewire\Component;
use App\Models\TiOption;
use Livewire\Attributes\Layout;

class Home extends Component
{
    #[Layout("components.layouts.topic")]
    public function render()
    {
        $description = TiOption::where('key', 'description')->first();
        $teams = TiTeam::orderBy('order', 'asc')->get();
        return view('livewire.topic-indonesia.home')->with([
            'description' => $description,
            'teams' => $teams
        ]);
    }
}
