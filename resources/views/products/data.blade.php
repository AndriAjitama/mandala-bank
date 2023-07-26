@extends('products.layout')

@section('content')
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
        @foreach ($products as $product)

            <div>
                <div class="lg:h-[40vh] rounded-xl scale-100 overflow-hidden">
                    <img src="/image/{{ $product->image }}" alt=""
                        class="lg:h-full w-full hover:scale-125 transition duration-300 ease-in-out" />
                </div>

                <div>
                    <div class="flex items-center gap-5 py-5">
                        <p>10 Juni 2023</p>
                        <p>100 min dibaca</p>
                    </div>

                    <a href="#blog"
                        class="text-2xl font-bold underline hover:text-color-secondary hover:no-underline">
                        {{ $product->name }}</a>

                    <p class="leading-relaxed my-5">
                        {{ $product->detail }}
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
{!! $products->links() !!}

@endsection
