<footer id="contact" class="mt-10 pt-24 pb-12 bg-hitam text-putih">
    <div class="container">
        <div class="footer-col flex flex-wrap items-center justify-center">
            <div class="w-full pl-10 mb-12 font-medium lg:w-1/4 ">
                <img src="{{ asset('img/logo/logo-topic-light.webp') }}" alt="Topic Indonesia" class="w-40">
            </div>

            <div class="w-full xl:-ml-32 mb-20 mr-32 font-medium lg:w-1/4 md:ml-0 sm:ml-4 px-4 lg:-ml-4">
                <h3 class="font-bold text-xl mb-2">Untuk kerjasama, Press Release, dan kolaborasi lainnya silahkan
                    hubungi:</h3>
                <p class="font-normal"><span class="font-bold">Email:</span> <a
                        href="mailto: {{ $email->value }}">{{ $email->value }}</a></p>
                <p class="font-normal"><span class="font-bold">Phone:</span> <a
                        href="whatsapp://send?text=Hello&phone={{ $phone1->value }}">{{ $phone1->value }}</a></p>
            </div>

            <div class="w-full pl-10 lg:pl-0 px-4 mb-12 lg:w-1/4">
                <h3 class="font-semibold text-xl mb-5">Tautan</h3>
                <ul class="text-putih font-normal">
                    <li>
                        <a href="./topic.html" class="inline-block text-base hover:text-orange mb-3">Home</a>
                    </li>
                    <li>
                        <a href="#Work" class="inline-block text-base hover:text-orange mb-3">Works</a>
                    </li>
                    <li>
                        <a href="./topic_about.html" class="inline-block text-base hover:text-orange mb-3">About</a>
                    </li>
                </ul>
            </div>

            <div class="w-full pl-10 lg:pl-0 px-4 mb-12 lg:w-1/4 ">
                <h3 class="font-semibold text-xl mb-5">Sosial Media</h3>
                <ul class="text-putih font-normal mb-7">
                    <li>
                        <a href="https://www.instagram.com/{{ $instagram->value }}"
                            class="inline-block text-base hover:text-orange mb-3"><i
                                class="fa-brands fa-instagram mr-2"></i>{{ $instagram->value }}</a>
                    </li>
                    <li>
                        <a href="whatsapp://send?text=Hello&phone={{ $phone2->value }}"
                            class="inline-block text-base hover:text-orange mb-3"><i
                                class="fa-solid fa-phone mr-2"></i>{{ $phone2->value }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</footer>
