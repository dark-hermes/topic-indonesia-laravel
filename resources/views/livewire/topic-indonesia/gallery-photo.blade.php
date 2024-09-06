<!------------------------------------------- Galery Section start ----------------------------------->
<section id="galery-image">
    <div class="p-5 sm:p-8">
        <div class="columns-1 gap-5 sm:gap-8 sm:columns-2 md:columns-3 lg:columns-4 [&>img:not (:first-child)]:mt-8">
            @foreach ($galleries as $gallery)
                <img src="{{ Storage::url($gallery->image_url) }}" alt="{{ $gallery->title }}">
            @endforeach
        </div>
    </div>
</section>
