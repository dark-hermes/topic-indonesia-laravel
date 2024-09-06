<header class="bg-hitam fixed top-0 left-0 w-full flex items-center z-10">
    <div class="container">
        <div class="flex items-center justify-between relative">
            <div class="px-8 lg:ml-28">
                <a class="block py-6 w-14" href="{{ route('home') }}">
                    <img src="{{ asset('img/logo/logo-topic-light.webp') }}" alt="Topic Indonesia" class="w-full"></a>
            </div>

            <div class="flex items-center px-4">
                <button id="nav-mobile" name="nav-mobile" type="button" class="block absolute right-8 lg:hidden">
                    <span class="nav-mobile-line transition duration-300 ease-in-out origin-top-left"></span>
                    <span class="nav-mobile-line transition duration-300 ease-in-out"></span>
                    <span class="nav-mobile-line transition duration-300 ease-in-out origin-bottom-left"></span>
                </button>

                <nav id="nav-menu"
                    class="nav-menu hidden absolute py-5 bg-putih shadow-lg rounded-lg max-2-[250px] w-full right-0 top-full lg:block lg:static lg:bg-hitam lg:max-w-full lg:shadow-none lg:rounded-none">
                    <ul class="block lg:flex mr-28">
                        <li class="group">
                            <a href="{{ route('home') }}" wire:navigate
                                class=" text-base text-hitam py-2 mx-8 flex group-hover:text-orange  lg:text-putih">Beranda</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('about') }}" wire:navigate
                                class=" text-base text-hitam py-2 mx-8 flex group-hover:text-orange lg:text-putih">Tentang</a>
                        </li>
                        <li class="group">
                            <a href="{{ route('gallery') }}" wire:navigate
                                class=" text-base text-hitam py-2 mx-8 flex group-hover:text-orange lg:text-putih ">Galeri</a>
                        </li>
                        <li class="group">
                            <a href="mailto: TopicIndonesia@gmail.com" wire:navigate
                                class=" text-base text-hitam py-2 mx-8 flex group-hover:text-orange lg:text-putih">Kontak</a>
                        </li>
                        <li class="group">
                            <a href="../login/login.html" wire:navigate
                                class=" text-base text-hitam py-2 mx-8 flex group-hover:text-orange lg:text-putih">Akun</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

</header>
