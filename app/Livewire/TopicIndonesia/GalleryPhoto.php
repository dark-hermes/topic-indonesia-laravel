<?php

namespace App\Livewire\TopicIndonesia;

use Livewire\Component;
use App\Models\TiGallery;

class GalleryPhoto extends Component
{
    public $galleries;

    public function mount()
    {
        $this->galleries = TiGallery::orderBy("created_at", "desc")->get();
    }

    public function placeholder()
    {
        return <<<'HTML'
        <section class="flex justify-center items-center h-96">
            <svg width="512" height="512" viewBox="0 0 512 512" style="color:currentColor" xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 animate-spin"><rect width="512" height="512" x="0" y="0" rx="30" fill="transparent" stroke="transparent" stroke-width="0" stroke-opacity="100%" paint-order="stroke"></rect><svg width="256px" height="256px" viewBox="0 0 24 24" fill="currentColor" x="128" y="128" role="img" style="display:inline-block;vertical-align:middle" xmlns="http://www.w3.org/2000/svg"><g fill="currentColor"><g><circle cx="3" cy="12" r="2" fill="currentColor"/><circle cx="21" cy="12" r="2" fill="currentColor"/><circle cx="12" cy="21" r="2" fill="currentColor"/><circle cx="12" cy="3" r="2" fill="currentColor"/><circle cx="5.64" cy="5.64" r="2" fill="currentColor"/><circle cx="18.36" cy="18.36" r="2" fill="currentColor"/><circle cx="5.64" cy="18.36" r="2" fill="currentColor"/><circle cx="18.36" cy="5.64" r="2" fill="currentColor"/><animateTransform attributeName="transform" dur="1.5s" repeatCount="indefinite" type="rotate" values="0 12 12;360 12 12"/></g></g></svg></svg>
        </section>
        HTML;
    }
    public function render()
    {
        return view('livewire.topic-indonesia.gallery-photo');
    }
}
