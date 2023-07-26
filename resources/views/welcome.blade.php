<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Mandala Bank - Andri Ajitama</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css"
        integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    @vite('resources/css/app.css')
    @vite('resources/css/main.css')
    @vite('resources/css/style.css')
</head>

<body class="bg-color-primary text-color-white tracking-wider">
    {{-- navbar --}}
    <header class="sticky top-0 z-50">
        <nav class="container flex justify-between items-center">
            <div class="py-5 text-color-secondary font-bold text-3xl">
                <a href="#home">
                    <span class="text-color-white">Mandala</span>Bank
                </a>
            </div>
            <div>
                <ul class="hidden lg:flex items-center space-x-6">
                    <li>
                        <a href="#home" class="hover:text-color-secondary ease-in duration-200">Home</a>
                    </li>
                    <li>
                        <a href="#features" class="hover:text-color-secondary ease-in duration-200">Features</a>
                    </li>
                    <li>
                        <a href="#testimonial" class="hover:text-color-secondary ease-in duration-200">Testimonial</a>
                    </li>
                    <li>
                        <a href="#product" class="hover:text-color-secondary ease-in duration-200">Product</a>
                    </li>
                    <li>
                        <a href="#blog" class="hover:text-color-secondary ease-in duration-200">Blog</a>
                    </li>
                    <li>
                        <a href="#contact" class="hover:text-color-secondary ease-in duration-200">Contact</a>
                    </li>
                    <li>
                        <button
                            class="bg-color-secondary px-9 py-3 rounded-md capitalize font-bold hover:opacity-80 ease-in duration-200">
                            <a href="#download-app">Download Aplikasi</a>
                        </button>
                    </li>
                </ul>
            </div>

            <!-- Mobile screen  -->
            <div id="hamburger" class="lg:hidden cursor-pointer z-50">
                <i class="fa-solid fa-bars"></i>
            </div>

            <div id="menu" class="hidden bg-color-primary-dark h-[100vh] absolute inset-0">
                <ul class="h-full grid place-items-center py-20">
                    <li>
                        <a id="hLink" href="#home"
                            class="hover:text-color-secondary ease-in duration-200">Home</a>
                    </li>
                    <li>
                        <a id="hLink" href="#features"
                            class="hover:text-color-secondary ease-in duration-200">Features</a>
                    </li>
                    <li>
                        <a id="hLink" href="#testimonial"
                            class="hover:text-color-secondary ease-in duration-200">Testimonial</a>
                    </li>
                    <li>
                        <a id="hLink" href="#product"
                            class="hover:text-color-secondary ease-in duration-200">Product</a>
                    </li>
                    <li>
                        <a id="hLink" href="#blog"
                            class="hover:text-color-secondary ease-in duration-200">Blog</a>
                    </li>
                    <li>
                        <a id="hLink" href="#contact"
                            class="hover:text-color-secondary ease-in duration-200">Contact</a>
                    </li>

                    <li><button class="btn"> <a href="#download-app">Download Aplikasi</a>
                        </button></li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        {{-- hero --}}
        <section id="home" class="relative">
            <div class="blob1"></div>
            <div class="blob2"></div>
            <div class="container py-20">
                <div class="flex flex-col items-center z-20 md:flex-row">
                    <div class="text-center mb-12 md:text-left md:w-1/2 md:pr-10">
                        <h1 class="title mb-4">Aplikasi Keuangan Terbaik</h1>
                        <p class="leading-relaxed mb-10">
                            "Sambutlah kebebasan finansial dengan Mandala Bank, partner
                            terpercaya untuk meraih impian Anda dan mewujudkan kehidupan
                            yang mapan secara finansial."
                        </p>
                        <button class="btn"> <a href="#download-app">Download Aplikasi</a>
                        </button>
                    </div>
                    <div class="md:w-1/2">
                        <img src="img/hero4.png" alt="" />
                    </div>
                </div>
            </div>
        </section>

        {{-- fitur --}}
        <section id="features" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Fitur Unggulan</h4>
                    <h1 class="title">Mengelola Semua Pembayaran Anda Dengan Mudah</h1>
                </div>
                <div class="grid lg:grid-cols-3 md:grid-cols-2 gap-12 lg:gap-8 px-4 sm:px-6 lg:px-8">

                    <!-- card no 1 -->
                    <div
                        class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-calendar-days text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Expense Trackering</h3>
                        <p class="leading-relaxed">
                            Lacak dan kelola pengeluaran Anda dengan mudah menggunakan fitur
                            Expense Tracker Mandala Bank, untuk mengatur keuangan dengan
                            cerdas dan mencapai tujuan keuangan Anda.
                        </p>
                    </div>

                    <!-- card no 2 -->
                    <div
                        class="bg-color-primary-dark border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-chart-column text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Finance Snapshot</h3>
                        <p class="leading-relaxed">
                            Dapatkan gambaran lengkap keuangan Anda dalam sekejap dengan
                            fitur Finance Snapshot Mandala Bank. Lihat secara real-time
                            saldo, investasi, dan kinerja keuangan Anda dalam satu tampilan
                            yang praktis dan intuitif.
                        </p>
                    </div>

                    <!-- card no 3 -->
                    <div
                        class="border-2 border-solid border-color-gray text-center py-20 px-5 rounded-2xl cursor-pointer hover:bg-color-primary-dark ease-in duration-200">
                        <div class="bg-color-secondary inline-block rounded-2xl py-5 px-6">
                            <i class="fa-solid fa-phone text-4xl"></i>
                        </div>
                        <h3 class="text-xl font-bold py-4">Support 24/24</h3>
                        <p class="leading-relaxed">
                            Kami hadir untuk Anda kapanpun dan dimanapun dengan fitur
                            Support 24/24 Mandala Bank. Tim kami siap membantu Anda dengan
                            kebutuhan keuangan Anda, baik itu pertanyaan, masalah teknis,
                            atau bantuan lainnya.
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- detail --}}
        <section id="saving-money">
            <div class="container py-20 relative">
                <div class="blob1"></div>
                <div class="blob2"></div>
                <div class="flex flex-col items-center justify-between md:flex-row">
                    <div class="mb-12 md:w-1/2">
                        <img src="img/hero3.png" alt="" />
                    </div>
                    <div class="text-center md:text-left md:w-1/2 md:ml-20">
                        <h4 class="font-bold text-color-secondary mb-4">Mandala Bank</h4>
                        <h1 class="title mb-4">
                            Aplikasi Terbaik Untuk Mengelola Keuangan Anda
                        </h1>
                        <p class="leading-relaxed mb-10">
                            Kemudahan dan efisiensi dalam mengelola keuangan Anda dengan
                            aplikasi finansial terbaik, Mandala Bank. Nikmati pengalaman
                            pengguna yang user-friendly untuk mobile banking, serta
                            kemampuan mengontrol kartu dan melakukan transfer uang dengan
                            mudah hanya dalam satu klik.
                        </p>
                        <button class="btn">Selengkapnya</button>
                    </div>
                </div>
            </div>
        </section>

        {{-- tutorial --}}
        <section id="tutorial" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Menikmati Berbagai Kemudahan</h4>
                    <h1 class="title">Cara Mendapatkan Kemudahan Dari Mandala Bank</h1>
                </div>
                <div
                    class="flex flex-col items-center justify-between space-y-6 md:flex-row md:space-y-0 md:space-x-6">
                    <!-- card 1  -->
                    <div class="text-center cursor-pointer">
                        <div
                            class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p
                                class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/img/line.png')] lg:after:absolute lg:after:top-4 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">
                                1
                            </p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Install Aplikasi</h3>
                        <p class="leading-relaxed">
                            Download dan Install MandalaBank Mobile di Play Store atau Apps
                            Store
                        </p>
                    </div>

                    <!-- card 2  -->
                    <div class="text-center cursor-pointer">
                        <div class="relative inline-block px-6 py-3 rounded-lg cursor-pointer bg-color-secondary">
                            <p
                                class="text-6xl lg:after:content-[''] lg:after:flex lg:after:bg-[url('/img/line-bottom.png')] lg:after:absolute lg:after:top-10 lg:after:left-32 2xl:after:left-52 lg:after:bg-no-repeat lg:after:h-7 lg:after:w-52">
                                2
                            </p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Lengkapi Biodata</h3>
                        <p class="leading-relaxed">
                            Dengan mengatur profil Anda, Anda dapat menyesuaikan preferensi
                            dan mengatur notifikasi
                        </p>
                    </div>

                    <!-- card 3  -->
                    <div class="text-center cursor-pointer">
                        <div
                            class="relative bg-color-primary-dark inline-block px-6 py-3 rounded-lg cursor-pointer hover:bg-color-secondary ease-in duration-200">
                            <p class="text-6xl">3</p>
                        </div>
                        <h3 class="text-xl font-bold py-4">Nikmati Fitur Unggulan</h3>
                        <p class="leading-relaxed">
                            Dapatkan akses cepat, aman, dan praktis ke layanan perbankan
                            kami langsung melalui ponsel Anda
                        </p>
                    </div>
                </div>
            </div>
        </section>

        {{-- testimonial --}}
        <section id="testimonial">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Review Pengguna</h4>
                    <h1 class="title">Testimonial Dari Para Pengguna Mandala Bank</h1>
                </div>

                <!-- review container  -->
                <div class="mt-8">
                    <div class="flex items-center justify-center flex-wrap">
                        <img src="img/user1.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic active-pic"
                            onclick="showReview()" />
                        <img src="img/user2.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()" />
                        <img src="img/user3.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()" />
                        <img src="img/user4.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()" />
                        <img src="img/user5.jpg" alt=""
                            class="h-20 w-20 rounded-full p-1 m-3 cursor-pointer user-pic" onclick="showReview()" />
                    </div>

                    <div class="grid place-items-center text-center m-auto md:w-4/5 min-h-[40vh]">
                        <div class="user-text active-text">
                            <p class="md:text-2xl mb-6">
                                "Aplikasi Mandala Mobile sangat membantu dalam mengelola
                                keuangan saya. Saya dapat dengan mudah melacak pengeluaran,
                                mengatur tabungan, dan melakukan transfer uang dengan cepat.
                                Sangat direkomendasikan"
                            </p>
                            <h4 class="font-bold text-color-secondary mb-1">
                                Prabowo Subianto
                            </h4>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">
                                "Saya sangat terkesan dengan fitur-fitur Mandala Mobile. Dalam
                                hitungan detik, saya dapat melihat snapshot keuangan saya,
                                melakukan pembayaran tagihan, dan mengontrol kartu saya.
                                Pengalaman yang luar biasa!"
                            </p>
                            <h4 class="font-bold text-color-secondary mb-1">
                                Anies Baswedan
                            </h4>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">
                                "Mandala Mobile adalah aplikasi perbankan terbaik yang pernah
                                saya gunakan. Saya dapat dengan mudah mengatur rekening,
                                melakukan investasi, dan bertransaksi dengan aman. Saya sangat
                                puas dengan layanannya."
                            </p>
                            <h4 class="font-bold text-color-secondary mb-1">
                                Ganjar Pranowo
                            </h4>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">
                                "Aplikasi Mandala Mobile membuat hidup saya lebih mudah.
                                Dengan fitur Expense Tracker, saya dapat melacak pengeluaran
                                saya dengan detail, sehingga saya dapat mengelola keuangan
                                secara lebih efektif. Saya sangat merekomendasikannya"
                            </p>
                            <h4 class="font-bold text-color-secondary mb-1">Jokowi Dodo</h4>
                        </div>

                        <div class="user-text">
                            <p class="md:text-2xl mb-6">
                                "Mandala Mobile adalah solusi lengkap untuk kebutuhan
                                perbankan saya. Saya dapat dengan mudah mengatur profil saya,
                                mengubah preferensi, dan mendapatkan dukungan 24/7. Layanan
                                pelanggan yang luar biasa!"
                            </p>
                            <h4 class="font-bold text-color-secondary mb-1">
                                Megawati Soekarno Putri
                            </h4>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- jenis-kartu --}}
        <section id="product" class="bg-color-primary-light">
            <div class="container py-20">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">Harga</h4>
                    <h1 class="title">Jenis Kartu Debit Mandala Bank</h1>

                    <!-- Rounded switch  -->
                    <div class="mt-5 flex items-center justify-center gap-4">
                        <p>Bayar Bulanan</p>
                        <label class="cursor-pointer relative inline-block w-20 h-8 rounded-full">
                            <input type="checkbox" id="toggleBtn" class="peer opacity-0 w-0 h-0" />
                            <span
                                class="absolute top-0 left-0 right-0 bottom-0 bg-color-primary-light border border-solid border-color-gray rounded-full duration-300 before:content-[''] before:absolute before:w-6 before:h-6 before:bottom-1 before:left-1 before:rounded-full before:bg-color-white before:duration-300 peer-checked:before:translate-x-12 peer-checked:bg-color-secondary"></span>
                        </label>
                        <p>Bayar Tahunan</p>
                    </div>
                </div>

                <div class="grid gap-5 md:grid-cols-2 lg:grid-cols-3">
                    <!-- card 1 -->
                    <div class="card relative h-auto w-auto">

                        <!-- front side  -->
                        <div id="card_1_front"
                            class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:absolute before:text-sm before:top-0 before:left-0">
                                    <sup class="">Rp</sup>
                                    20.000<span class="text-sm font-normal tracking-widest">/per bulan</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Basic</h3>
                                <p class="leading-relaxed">
                                    Dapatkan berbagai keuntungan dan fasilitas sebagi berikut:
                                </p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Tarik Tunai 10jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Setor Tunai 15jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer ke Sesama 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer Antar Bank 10jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Buku Tabungan</span>
                                </li>
                            </ul>
                            <button class="card_btn">Dapatkan Sekarang</button>
                        </div>

                        <!-- back side  -->
                        <div id="card_1_back"
                            class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:absolute before:text-sm before:top-0 before:left-0">
                                    <sup class="">Rp</sup>
                                    120.000<span class="text-sm font-normal tracking-widest">/per tahun</span>
                                </p>
                            </div>
                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Silver</h3>
                                <p class="leading-relaxed">
                                    Dapatkan berbagai keuntungan dan fasilitas sebagi berikut:
                                </p>
                            </div>
                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Tarik Tunai 25jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Setor Tunai 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer ke Sesama 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer Antar Bank 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Buku Tabungan</span>
                                </li>
                            </ul>
                            <button class="card_btn">Dapatkan Sekarang</button>
                        </div>
                    </div>

                    <!-- card 2 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side  -->
                        <div id="card_2_front"
                            class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:absolute before:text-sm before:top-0 before:left-0">
                                    <sup class="">Rp</sup>
                                    50.000<span class="text-sm font-normal tracking-widest">/per bulan</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Standard</h3>
                                <p class="leading-relaxed">
                                    Dapatkan berbagai keuntungan dan fasilitas sebagi berikut:
                                </p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Tarik Tunai 15jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Setor Tunai 15jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer ke Sesama 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer Antar Bank 10jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Buku Tabungan</span>
                                </li>
                            </ul>

                            <button class="card_btn">Dapatkan Sekarang</button>
                        </div>

                        <!-- back side  -->
                        <div id="card_2_back"
                            class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:absolute before:text-sm before:top-0 before:left-0">
                                    <sup class="">Rp</sup>
                                    150.000<span class="text-sm font-normal tracking-widest">/per tahun</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Gold</h3>
                                <p class="leading-relaxed">
                                    Dapatkan berbagai keuntungan dan fasilitas sebagi berikut:
                                </p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Tarik Tunai 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Setor Tunai 25jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer ke Sesama 30jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer Antar Bank 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Buku Tabungan</span>
                                </li>
                            </ul>
                            <button class="card_btn">Dapatkan Sekarang</button>
                        </div>
                    </div>

                    <!-- card 3 -->
                    <div class="card relative h-auto w-auto">
                        <!-- front side  -->
                        <div id="card_3_front"
                            class="front px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:absolute before:text-sm before:top-0 before:left-0">
                                    <sup class="">Rp</sup>
                                    100.000<span class="text-sm font-normal tracking-widest">/per bulan</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Platinum</h3>
                                <p class="leading-relaxed">
                                    Dapatkan berbagai keuntungan dan fasilitas sebagi berikut:
                                </p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Tarik Tunai 15jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Setor Tunai 25jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer ke Sesama 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer Antar Bank 20jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Buku Tabungan</span>
                                </li>
                            </ul>

                            <button class="card_btn">Dapatkan Sekarang</button>
                        </div>

                        <!-- back side  -->
                        <div id="card_3_back"
                            class="back rotate-y-180 px-7 py-11 rounded-2xl border-2 border-solid border-color-gray h-full w-full absolute top-0 left-0">
                            <div class="relative">
                                <p
                                    class="text-6xl pl-2 font-bold before:absolute before:text-sm before:top-0 before:left-0">
                                    <sup class="">Rp</sup>
                                    500.000<span class="text-sm font-normal tracking-widest">/per tahun</span>
                                </p>
                            </div>

                            <div class="py-10">
                                <h3 class="text-xl font-bold pb-3">Premium</h3>
                                <p class="leading-relaxed">
                                    Dapatkan berbagai keuntungan dan fasilitas sebagi berikut:
                                </p>
                            </div>

                            <ul class="space-y-4 pb-10">
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Tarik Tunai 100jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-secondary"></i>
                                    <span class="pl-4">Setor Tunai 150jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer ke Sesama 200jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Transfer Antar Bank 100jt</span>
                                </li>
                                <li>
                                    <i class="fa-solid fa-bookmark text-color-gray"></i>
                                    <span class="pl-4">Buku Tabungan</span>
                                </li>
                            </ul>

                            <button class="card_btn">Dapatkan Sekarang</button>
                        </div>
                    </div>
                </div>

                <div class="py-20 flex items-center justify-center">
                    <div class="card-wrap container justify-center">
                        <div class="card-inner">
                            <div class="front-card">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img" />
                                <div class="row">
                                    <img src="https://i.ibb.co/G9pDnYJ/chip.png" width="60px" />
                                    <img src="https://i.ibb.co/WHZ3nRJ/visa.png" width="60px" />
                                </div>
                                <div class="row card-no">
                                    <p>5244</p>
                                    <p>2150</p>
                                    <p>8252</p>
                                    <p>6420</p>
                                </div>
                                <div class="row card-holder">
                                    <p>MANDALA BANK</p>
                                    <p>VALID TILL</p>
                                </div>
                                <div class="row name">
                                    <p>ANDRI AJITAMA</p>
                                    <p>10 / 25</p>
                                </div>
                            </div>
                            <div class="back-card">
                                <img src="https://i.ibb.co/PYss3yv/map.png" class="map-img" />
                                <div class="bar"></div>
                                <div class="row card-cvv">
                                    <div>
                                        <img src="https://i.ibb.co/S6JG8px/pattern.png" />
                                    </div>
                                    <p>824</p>
                                </div>
                                <div class="row card-text">
                                    <p>
                                        Jika menemukan ATM ini diharapkan dikembalikan kepada Mandala Bank
                                    </p>
                                </div>
                                <div class="row signature">
                                    <p>CUSTOMER SIGNATURE</p>
                                    <img src="https://i.ibb.co/WHZ3nRJ/visa.png" width="80px" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- blog --}}
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
                                <span
                                    class="tracking-wider capitalize underline hover:no-underline">Selengkapnya</span>
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
                                <span
                                    class="tracking-wider capitalize underline hover:no-underline">Selengkapnya</span>
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
                                <span
                                    class="tracking-wider capitalize underline hover:no-underline">Selengkapnya</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- download-aplikasi --}}
        <section id="download-app" class="bg-color-primary-light">
            <div class="container h-[80vh] grid place-items-center">
                <div class="text-center md:w-2/3 m-auto">
                    <h1 class="title">Download Aplikasinya Sekarang dan Nikmati Semua Kemudahannya</h1>
                    <p class="leading-relaxed pt-5">
                        Jadikan hidup Anda lebih mudah dan efisien dengan mengunduh
                        Mandala Mobile, aplikasi perbankan terbaik untuk mengatur keuangan
                        Anda. Dapatkan akses cepat, praktis, dan aman ke layanan perbankan
                        di ujung jari Anda. Unduh sekarang dan nikmati kemudahan mengatur
                        keuangan secara mobile!
                    </p>

                    <div class="flex flex-col md:flex-row items-center justify-center gap-5 pt-10">
                        <a href="#"
                            class="bg-color-white h-16 w-44 grid place-items-center rounded-lg hover:opacity-70">
                            <img src="img/ios-store-dark.png" alt="" />
                        </a>
                        <a href="#"
                            class="bg-color-white h-16 w-44 grid place-items-center rounded-lg hover:opacity-70">
                            <img src="img/g-play-dark.png" alt="" />
                        </a>
                    </div>
                </div>
            </div>
        </section>

        {{-- patner --}}
        <section id="patner">
            <div class="relative flex flex-col items-center overflow-hidden py-20 md:py-40 ">
                <div class="container relative z-[1] m-auto px-6 md:px-12">
                    <div class="m-auto text-center md:w-8/12 lg:w-6/12">
                        <div class="text-center m-auto mb-20">
                            <h4 class="font-bold text-color-secondary mb-4">
                                Patner Mandala Bank
                            </h4>
                            <h1 class="title">Bank Lain Yang Bekerja Sama Dengan Mandala Bank</h1>
                        </div>
                    </div>
                    <div class="m-auto mt-16">
                        <div class="flex flex-wrap justify-center gap-6">
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bca.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bca" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/mandiri.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo mandiri" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bni.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bni" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bri.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bri" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bca.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bca" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/mandiri.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo mandiri" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bni.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bni" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bri.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bri" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bca.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bca" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/mandiri.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo mandiri" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bni.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bni" />
                            </div>
                            <div
                                class="group rounded-xl border border-gray-200 dark:border-gray-600 bg-white bg-opacity-5 py-2 px-4 hover:bg-opacity-10">
                                <img src="img/bri.svg" class="contrast-0 transition group-hover:contrast-100"
                                    loading="lazy" alt="logo bri" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- kontak --}}
        <section id="contact">
            <div class="container py-20 bg-color-primary-light">
                <div class="text-center m-auto mb-20 md:w-1/2">
                    <h4 class="font-bold text-color-secondary mb-4">
                        Memiliki Pertanyaan?
                    </h4>
                    <h1 class="title">Hubungi Kami Sekarang</h1>
                </div>
                <form>
                    <div class="w-full m-auto text-center md:w-2/3">
                        <div class="text-color-primary-dark grid gap-6 mb-6 md:grid-cols-2">
                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
                                placeholder="Nama Lengkap" />

                            <input type="email"
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
                                placeholder="Email" />

                            <input type="tel"
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
                                placeholder="Nomor Handphone" />

                            <input type="text"
                                class="bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
                                placeholder="Subjek" />
                        </div>
                        <textarea rows="4"
                            class="text-color-primary-dark bg-gray-50 border border-gray-300 text-sm rounded-lg block w-full p-3 focus:outline-none focus:border-color-secondary"
                            placeholder="Pesan"></textarea>
                        <button class="btn mt-10">Kirim Sekarang</button>
                    </div>
                </form>
            </div>
        </section>

        {{-- footer --}}
        <section id="footer">
            <div class="bg-color-primary-dark relative">
                <div class="container py-10">
                    <div class="grid gap-10 md:grid-cols-3 pb-10">
                        <div class="">
                            <h4 class="font-bold text-lg">Kantor Pusat</h4>
                            <p class="leading-relaxed">
                                Jl. Soekarno Hatta No.597, Kb. Kangkung, Kec. Kiaracondong,
                                Kota Bandung, Jawa Barat 40284
                            </p>
                            <h4 class="font-bold text-lg mt-5">Call Center</h4>
                            <p class="leading-relaxed">(022) 7301738</p>
                            <h4 class="font-bold text-lg mt-5">Email</h4>
                            <p class="leading-relaxed">mandalabank@gmail.com</p>

                            <div class="flex gap-5 items-center mt-5">
                                <p class="font-bold">Ikuti Kami</p>
                                <i class="fa-brands fa-facebook-f cursor-pointer hover:text-color-secondary"></i>
                                <i class="fa-brands fa-twitter cursor-pointer hover:text-color-secondary"></i>
                                <i class="fa-brands fa-youtube cursor-pointer hover:text-color-secondary"></i>
                                <i class="fa-brands fa-instagram cursor-pointer hover:text-color-secondary"></i>
                            </div>
                        </div>
                        <div class="flex justify-between md:justify-around">
                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Menu</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#">Home</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#features">Features</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#testimonial">Testimonial</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#product">Product</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#blog">Blog</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#contact">Contact</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="space-y-6">
                                <h4 class="font-bold text-lg">Bantuan</h4>
                                <ul class="space-y-3">
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#">About Us</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#features">Partners</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#testimonial">Career</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#product">Reviews</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#blog">Terms & Conditions</a>
                                    </li>
                                    <li class="underline hover:no-underline hover:text-color-secondary">
                                        <a href="#contact">Help</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="space-y-6">
                            <h4 class="font-bold text-lg">Berita Terbaru</h4>
                            <p class="leading-relaxed">
                                Berlangganan dengan email dan berbagai berita menarik akan
                                dikirimkan kepada Anda
                            </p>
                            <div class="flex items-center">
                                <input type="text"
                                    class="w-3/4 text-color-gray bg-color-white p-2 lg:p-3 rounded-l-md focus:outline-none"
                                    placeholder="Masukan Email Anda" />
                                <button type="submit"
                                    class="bg-color-secondary px-4 py-2 lg:px-5 lg:py-3 rounded-r-md hover:opacity-90">
                                    <i class="fa-solid fa-chevron-right"></i>
                                </button>
                            </div>
                        </div>
                    </div>

                    <div class="flex justify-center pt-10 border-t border-color-gray">
                        <p>2023 &copy; Mandala Bank All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script src="js/script.js"></script>
</body>

</html>
