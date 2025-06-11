@extends('frontend.layouts.app')

@section('content')
    <div class="container py-5">

        <div class="row p-t-100">
            {{-- Gambar produk --}}
            <div class="col-md-6 p-b-30">
                <div class="wrap-pic-romantic size2 bo-rad-10 hov-img-zoom m-l-r-auto">
                    <!-- Trigger modal -->
                    <a href="#" data-bs-toggle="modal" data-bs-target="#imageModal">
                        <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                            style="width: 100%; height: auto; border-radius: 10px; cursor: pointer;">
                    </a>
                </div>
            </div>

            {{-- Detail produk --}}
            <div class="col-md-6 p-t-45 p-b-30">
                <div class="wrap-text-romantic t-center">
                    <h3 class="tit3 t-center m-b-35 m-t-5">
                        {{ session('lang') === 'en' && $product->name_en ? $product->name_en : $product->name }}
                    </h3>

                    <p class="t-center m-b-22 size3 m-l-r-auto" style="font-size: 18px; color: #555;">
                        {{ session('lang') === 'en' && $product->description_en ? $product->description_en : $product->description }}
                    </p>

                    <p class="t-center" style="font-size: 22px; font-weight: bold; color: #000000;">
                        Rp {{ number_format($product->price, 0, ',', '.') }}
                    </p>
                </div>
            </div>
        </div>

    </div>

    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" aria-labelledby="imageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content bg-transparent border-0">
                <div class="modal-body p-0">
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                        style="width: 100%; height: auto; border-radius: 10px;">
                </div>
                <button type="button" class="btn-close position-absolute top-0 end-0 m-3" data-bs-dismiss="modal"
                    aria-label="Close"></button>
            </div>
        </div>
    </div>
@endsection
