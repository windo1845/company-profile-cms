@extends('frontend.layouts.app')

@section('content')
    <section class="section">
        <section class="section-chef bgwhite p-t-115 p-b-95">
            <div class="container t-center">

                <h1 class="mb-4 text-center" style="font-size: 36px; font-weight: bold;">
                    {{ session('lang') === 'en' && $pages->firstWhere('slug', 'home')->title_en 
                        ? $pages->firstWhere('slug', 'home')->title_en 
                        : $pages->firstWhere('slug', 'home')->title }}
                </h1>

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-3 col-lg-4 m-l-r-auto p-b-30">
                            <div class="blo5 pos-relative p-t-60">
                                <div class="pic-blo5 size14 bo4 hov-img-zoom ab-c-t"
                                    style="border: 3px solid #17b128; border-radius: 10px; overflow: hidden;">
                                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}">
                                </div>

                                <div class="text-blo5 size34 t-center bo-rad-10 bo7 p-t-90 p-l-35 p-r-35 p-b-30">
                                    <a href="#" class="txt34 dis-block p-b-6">
                                        {{ session('lang') === 'en' && $product->name_en ? $product->name_en : $product->name }}
                                    </a>

                                    <p class="t-center"
                                        style="max-height: 70px; overflow: hidden; text-overflow: ellipsis;">
                                        {{ \Illuminate\Support\Str::limit(session('lang') === 'en' && 
                                        $product->description_en ? $product->description_en : $product->description, 100) }}
                                    </p>

                                    <a href="{{ route('products.show', $product->id) }}"
                                        style="position: absolute; bottom: 10px; left: 0; right: 0; color: #fcbd0f;"
                                        class="small">
                                        {{ session('lang') === 'en' ? '...View More' : '...Lihat Selengkapnya' }}
                                    </a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Modal -->
                <div class="modal fade" id="productModal{{ $product->id }}" tabindex="-1"
                    aria-labelledby="productModalLabel{{ $product->id }}" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="productModalLabel{{ $product->id }}">
                                    {{ session('lang') === 'en' && $product->name_en ? $product->name_en : $product->name }}
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}"
                                    style="width: 100%; height: auto; margin-bottom: 20px;">
                                <p>
                                    {{ session('lang') === 'en' && $product->description_en ? $product->description_en : $product->description }}
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
    </section>
@endsection
