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
    @include('navbar')

    <main>
        {{-- home --}}
        @include('home')

        {{-- fitur --}}
        @include('fitur')

        {{-- detail --}}
        @include('detail')

        {{-- tutorial --}}
        @include('tutorial')

        {{-- testimonial --}}
        @include('testimonial')

        {{-- produk --}}
        @include('produk')

        {{-- blog --}}
        @include('blog')




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
        </section> --}}
        



        {{-- download-aplikasi --}}
        @include('download-aplikasi')

        {{-- patner --}}
        @include('patner')

        {{-- kontak --}}
        @include('contact')

        {{-- footer --}}
        @include('footer')

    </main>
    <script src="js/script.js"></script>

</body>

</html>
