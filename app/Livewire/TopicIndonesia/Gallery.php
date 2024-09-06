<?php

namespace App\Livewire\TopicIndonesia;

use Livewire\Component;
use App\Models\TiGallery;
use Livewire\Attributes\Layout;

class Gallery extends Component
{
    #[Layout("components.layouts.topic")]
    public function render()
    {

        return view('livewire.topic-indonesia.gallery');
    }
}
