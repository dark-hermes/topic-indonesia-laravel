<div>
    <!------------------------------------------- Hero Section start ----------------------------------->

    <section id="Hero" class=" relative bg-center mt-[6.5rem] sm:mt-0 bg-no-repeat bg-cover"
        style="background: linear-gradient(rgba(0,0,0,0) , rgba(0, 0, 0 , 1)), url({{ asset('img/hero.webp') }}); background-size: 100%;">
        <div class="container">
            <div class="lg:w-1/2 flex flex-wrap sm:w-3/4 md:w-1/2">
                <div class="px-8 sm:pt-40 md:pt-40 lg:pt-96 pb-10 lg:pb-20 mx-0">
                    <h1 class="font-bold text-lg lg:text-4xl mb-3 text-putih pt-32">{{ config('app.name') }}</h1>
                    <p class="font-light text-putih leading-relaxed mb-5 lg:mb-8 text-sm lg:text-lg">
                        {{ $description->value }}</p>

                    <a href="./topic_about.html"
                        class="button-home text-base font-semibold text-putih py-2 px-4 border-2 border-putih rounded-full">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------------------------- Hero Section end ---------------------------------->


    <!-- Content Section Start -->
    <h1 id="Work" class="Work pt-20 text-center text-5xl font-bold my-2"> Works </h1>
    <section id="content" class="pt-0 mx-auto flex justify-center mb-20">
        <div class="container">
            <div class="flex flex-wrap">

                <div class="w-full self-center mx-auto lg:w-1/2">
                    <div class="sm:pt-10">
                        <img src="{{ asset('img/character/mimin/mimin-happy-1.webp') }}" alt="ROBLOX TOPIC INDONESIA"
                            class="max-w-full mx-auto" style="width: 70%;">
                    </div>
                </div>

                <div class="w-full self-center pt-10 sm:pt-10 px-10 lg:w-1/2">
                    <h1 class="font-bold text-4xl text-hitam mb-5 lg:text-5xl">Roblox Topic Indonesia</h1>
                    <p class="font-light text-hitam text-lg mb-5 lg:mb-10 leading-relaxed mr-0 lg:mr-32">Menjadi salah
                        satu
                        media informasi game roblox terbesar di Indonesia, meliputi video konten youtube, tiktok, dan
                        instagram</p>

                    <a href="../roblox-Indonesia/Roblox_Home.html"
                        class="custom-button text-base font-semibold text-hitam py-2 px-4 border-2 border-hitam rounded-full">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Desktop -->
    <section id="content" class="mx-auto justify-center hidden md:flex lg:flex">
        <div class="container">
            <div class="flex flex-wrap">

                <div class="w-full self-center mx-auto pt-10 sm:pt-10 px-10 lg:w-1/2 lg:pl-48">
                    <h1 class="font-bold text-4xl text-hitam mb-5 lg:text-5xl ">Emeng Indonesia</h1>
                    <p class="font-light text-hitam text-lg mb-10 leading-relaxed">
                        Konten kucing dengan berbagai konten percobaannya yang menarik meliputi video youtube dan tiktok
                    </p>

                    <a href="../emeng-Indonesia/emeng_Home.html"
                        class="custom-button text-base font-semibold text-hitam py-2 px-4 border-2 border-hitam rounded-full">Selengkapnya</a>
                </div>

                <div class="w-full self-center mx-auto lg:w-1/2">
                    <div class="sm:pt-10">
                        <img src="{{ asset('img/logo/logo-emeng.webp') }}" alt="Emeng Indonesia"
                            class="max-w-full mx-auto lg:w-90 md:w-1/2">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Mobile -->
    <section id="content" class="pt-0 mx-auto flex justify-center lg:hidden xl:hidden ">
        <div class="container">
            <div class="flex flex-wrap">

                <div class="w-full self-center mx-auto lg:w-1/2 pt-0">
                    <div class="sm:pt-10">
                        <img src="../../../img/LOGO/LOGO EMENG YT-04.png" alt="EMENG INDONESIA"
                            class="max-w-full mx-auto" style="width: 70%;">
                    </div>
                </div>

                <div class="w-full self-center pt-10 sm:pt-10 px-10 lg:w-1/2 lg:pr-56">
                    <h1 class="font-bold text-4xl text-hitam mb-5 lg:text-5xl">Emeng Indonesia</h1>
                    <p class="font-light text-hitam text-lg mb-5 lg:mb-10 leading-relaxed">Konten kucing dengan berbagai
                        konten percobaannya yang menarik meliputi video youtube dan tiktok</p>

                    <a href="../emeng-Indonesia/emeng_Home.html"
                        class="custom-button text-base font-semibold text-hitam py-2 px-4 border-2 border-hitam rounded-full">Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <br><br><br><br><br>

    <!---------------------------------------- Content Section End ------------------------------------->


    <!------------------------------------------ Our Team Start ---------------------------------------->
    <h1 class="Our-Team pt-10 text-center text-5xl font-bold my-4"> Our Team </h1>
    <div class="wrapper box-border w-full h-full flex items-center justify-center">
        <div class="team overlay flex items-center justify-center">
            @foreach ($teams as $team)
                <div class="group group-team" wire:key={{ $team->id }}>
                    <div class="team-box shadow-xl shadow-hitam group-hover:block group-hover:w-[200px] lg:group-hover:w-[300px] group-hover:cursor-pointer"
                        style="background: linear-gradient(rgba(0,0,0,0) , rgba(0, 0, 0 , .7)), url('{{ Storage::url($team->image_url) }}'); background-size: cover; background-position: center;">
                        <h2 class="group-hover:block group-hover:opacity-100 group-hover:bottom-6">{{ $team->position }}
                        </h2>
                        <h3 class="group-hover:block group-hover:opacity-100 group-hover:bottom-12">{{ $team->name }}
                        </h3>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>
