<?php

namespace App\Livewire\TopicIndonesia;

use Livewire\Component;
use App\Models\TiOption;
use Livewire\Attributes\Layout;

class About extends Component
{
    #[Layout("components.layouts.topic")]
    public function render()
    {
        $vision = TiOption::where("key", "vision")->first();
        $mission = TiOption::where("key", "mission")->first();
        return view('livewire.topic-indonesia.about')->with([
            'vision' => $vision,
            'mission' => $mission
        ]);
    }
}
