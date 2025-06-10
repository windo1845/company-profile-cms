@extends('frontend.layouts.app')

@section('content')
    <section class="section py-5" style="background-color: #f9f9f9;">
        <div class="container">
            <h1 class="mb-4 text-center" style="font-size: 36px; font-weight: bold;">{{ $page->title }}</h1>

            <div class="content mb-5" style="line-height: 1.8; font-size: 18px;">
                {!! nl2br(e($page->content)) !!}
            </div>

            {{-- menu tampilkan daftar produk --}}
            @if (Str::slug($page->slug) === 'product')
                <div class="products row">
                    @foreach ($products as $product)
                        <div class="col-md-4 mb-4">
                            {{-- <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    style="width: 100%; height: 250px; object-fit: cover;">

                                <div class="overlay-item-gallery trans-0-4 flex-c-m">
                                    <a class="btn-show-gallery flex-c-m fa fa-search"
                                        href="{{ asset('storage/' . $product->image) }}" data-lightbox="product-gallery"
                                        data-title="{{ $product->name }} - Rp{{ number_format($product->price, 0, ',', '.') }}">
                                    </a>
                                </div>
                            </div> --}}
                            {{-- <a href="{{ route('products.show', $product->id) }}">
                                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        style="width: 100%; height: 250px; object-fit: cover;">
                            
                                    <div class="overlay-item-gallery trans-0-4 flex-c-m">
                                        <i class="fa fa-search text-black" style="font-size: 24px;"></i>
                                    </div>
                                </div>
                            </a> --}}
                            <a href="{{ route('products.show', $product->id) }}" style="text-decoration: none;">
                                <div class="item-gallery isotope-item bo-rad-10 hov-img-zoom events guests">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                        style="width: 100%; height: 250px; object-fit: cover;">
                            
                                    <div class="overlay-item-gallery trans-0-4 flex-c-m">
                                        <i class="fa fa-search text-black" style="font-size: 24px;"></i>
                                    </div>
                                </div>
                            </a>                            
                            
                            

                            {{-- Nama & harga di bawah gambar (opsional) --}}
                            <div class="mt-2 text-center">
                                <h5>{{ $product->name }}</h5>
                                <p class="text-black font-weight-bold">Rp{{ number_format($product->price, 0, ',', '.') }}
                                </p>
                            </div>
                        </div>
                    @endforeach
                </div>
            @endif



        </div>
    </section>
@endsection
