<div>
    <section class="about">
        <div class="container">
            <div class="flex flex-wrap w-[80%] bg-hitam mx-auto rounded-xl pt-24 lg:pt-16 mb-20">

                <div class="w-1/2 self-center mx-auto lg:w-1/2">
                    <img src="{{ asset('img/logo/logo-topic-light.webp') }}" alt="TopicIndonesia" style="width: 70%;"
                        class="mx-auto pb-5">
                </div>

                <div class="w-1/2 self-center mx-auto lg:w-1/2 text-3xl px-5">
                    <h2 class="font-bold text-putih py-2">Visi</h2>
                    <p class="font-normal text-putih text-sm lg:text-lg mb-5">{{ $vision->value }}</p>
                    <h2 class="font-bold text-putih text-3xl py-2">Misi</h2>
                    <p class="font-normal text-putih text-sm lg:text-lg mb-5 ">
                        {{ $mission->value }}
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!---------------------------------------------- Hero Section end ---------------------------------->

    <!------------------------------------------- Team Section start ----------------------------------->

    <section class="Team">
        <div class="container">
            <div class="flex flex-wrap w-full mx-auto items-center">
                <div>
                    <h2 class="tim-kami text-hitam font-bold text-center text-5xl mx-auto py-5">Tim Kami</h2>
                    <p class="px-24 lg:px-44 text-justify">Dengan formasi 5 orang, Topic Indonesia bisa berdiri sampai
                        sekarang. Diisi oleh Muhammad Zaky Ridwan sebagai Founder sekaligus CEO Topic Indonesia, Helena
                        Shinta Pradani Haryadi sebagai Supervisor, Muhammad Zulfikri Awalludin sebagai Editor, Dzaki
                        Faiq Fawwaz sebagai designer dan Fajar Ismail sebagai cameraman</p>
                    <div>

                    </div>
                    <img src="{{ asset('img/hero-team.webp') }}" alt="Tim Kami" class="pt-5 -mb-10">
                </div>
            </div>
        </div>
    </section>
</div>
