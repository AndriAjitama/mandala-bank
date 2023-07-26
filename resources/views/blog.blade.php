{{-- <section id="blog">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">
                Blog Mandala Bank
            </h4>
            <h1 class="title">Berita Terbaru Dari Mandala Bank</h1>
        </div>

        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <!-- card no 1 -->
            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="img/blog1.jpg" alt=""
                        class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out" />
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>10 Juni 2023</p>
                        <p>100 min dibaca</p>
                    </div>

                    <a href="#blog"
                        class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">
                        Inovasi Terkini Mandala Bank: Fitur Transfer Uang Antar Negara yang Cepat dan Aman</a>

                    <p class="leading-relaxed my-5">
                        Mandala Bank telah meluncurkan fitur baru yang revolusioner, yaitu transfer uang antar
                        negara yang cepat dan aman. Dengan menggunakan teknologi canggih dan kerjasama dengan
                        jaringan perbankan internasional, Mandala Bank memungkinkan pelanggan untuk mentransfer
                        uang ke seluruh dunia dengan biaya yang kompetitif dan proses yang cepat...
                    </p>

                    <a href="#blog"
                        class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                        <span class="tracking-wider capitalize underline hover:no-underline">Selengkapnya</span>
                    </a>
                </div>
            </div>

            <!-- card no 2 -->
            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="img/blog2.jpg" alt=""
                        class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out" />
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>14 Juni 2023</p>
                        <p>20 min dibaca</p>
                    </div>

                    <a href="#blog"
                        class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">
                        Keamanan Utama: Mandala Bank Menerapkan Sistem Keamanan Terbaru untuk Melindungi Data
                        Pelanggan</a>

                    <p class="leading-relaxed my-5">
                        Keamanan pelanggan adalah prioritas utama Mandala Bank. Kami telah meluncurkan sistem
                        keamanan terbaru yang dirancang untuk melindungi data pelanggan dengan tingkat keamanan
                        tertinggi. Sistem ini mencakup enkripsi data end-to-end, otentikasi ganda, dan
                        pemantauan terus-menerus untuk mendeteksi aktivitas mencurigakan...
                    </p>

                    <a href="#blog"
                        class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                        <span class="tracking-wider capitalize underline hover:no-underline">Selengkapnya</span>
                    </a>
                </div>
            </div>

            <!-- card no 3 -->
            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="img/blog3.jpg" alt=""
                        class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out" />
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>20 Juni 2023</p>
                        <p>15 min dibaca</p>
                    </div>

                    <a href="#blog"
                        class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">Inovasi
                        Terdepan: Mandala Bank Meluncurkan Fitur Pengelolaan Keuangan Pribadi yang Cerdas</a>

                    <p class="leading-relaxed my-5">
                        Mandala Bank telah memperkenalkan fitur terbaru dalam aplikasi perbankan kami, yaitu
                        Pengelolaan Keuangan Pribadi yang Cerdas. Fitur ini memungkinkan pelanggan untuk melacak
                        pengeluaran, mengatur anggaran, dan menganalisis pola pengeluaran mereka dengan mudah...
                    </p>

                    <a href="#blog"
                        class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                        <span class="tracking-wider capitalize underline hover:no-underline">Selengkapnya</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<section id="blog">
    <div class="container py-20">
        <div class="text-center m-auto mb-20 md:w-1/2">
            <h4 class="font-bold text-color-secondary mb-4">
                Blog Mandala Bank
            </h4>
            <h1 class="title">Berita Terbaru Dari Mandala Bank</h1>
        </div>

        <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
            <!-- card no 1 -->
            @foreach($posts as $post)
                
            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="/image/{{ $post->image }}" alt=""
                        class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out" />
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>{{ $post->created_at }}</p>
                        <p>100 kali dibaca</p>
                    </div>

                    <a href="#blog"
                        class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">
                        {{ $post->name }}</a>

                    <p class="leading-relaxed my-5">
                        {{ $post->detail }}
                    </p>

                    <a href="#blog"
                        class="inline-block font-bold hover:text-color-secondary transition-all duration-300 ease-in-out">
                        <span class="tracking-wider capitalize underline hover:no-underline">Selengkapnya</span>
                    </a>
                </div>
            </div>
            @endforeach

        </div>
    </div>
</section>