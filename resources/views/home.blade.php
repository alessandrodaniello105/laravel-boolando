@extends('layout.main');

@php
    $products = config('products');
@endphp

@section('content')

    <!-- MAIN WRAPPER -->
    <div class="main-wrap d-flex container justify-between">

        @foreach ($products as $product)
        <div class="product">

            <!-- IMAGE BOX -->
            <div class="big-col">

              <div class="img-product">
                <img src="{{Vite::asset('resources/assets/img/') . $product['frontImage'] }}" alt="">
                <img src="{{Vite::asset('resources/assets/img/') . $product['backImage']}}" alt="">
              </div>

              <span {{-- @click="product.isFav = !product.isFav" :class="{'fav': product.isFav}" --}} class="heart">&hearts;</span>

              @if(!empty($product['badges']))
              <div class="img-bottom-text">
                @foreach ($product['badges'] as $badge)

                @php

                $badge['type'] == "discount" ? $product['isDiscount'] = true : $product['isDiscount'] = false;

                @endphp

                    <span class="badge {{$badge['type']}}">{{$badge['value']}}</span>

                @endforeach

                {{-- SE FUNZIONA, RIMUOVI SOTTO --}}
                {{-- <span v-if="product.isDiscounted" class="badge discount-percent">-{{product.discountPercentage}}&percnt;</span>
                <span v-if="product.isEco" class="badge green-choice">Sostenibilità</span> --}}
                {{-- SE FUNZIONA, RIMUOVI SOPRA --}}

              </div>
              @endif

            </div>
            <!-- /IMAGE BOX -->

            <!-- TEXT BOX -->
            <div class="small-col">
              <div class="text-box">

                <span class="product-brand">{{ $product['brand'] }}</span>

                <h2 class="product-model">{{ $product['name'] }}</h2>

                @php

                    $alfonso = $product['price'];

                    if($product['isDiscount']) {
                        $exp = (-intval("-50%")/100);
                        $total = bcadd(0, $alfonso * $exp, 2);
                    }else {
                        $total = $product['price'];
                    }

                @endphp

                <span class="discount price"> {{$total}} &euro; </span>

                @if($product['isDiscount'])

                    <span class="original price"> {{$product['price']}} &euro; </span>

                @endif

              </div>
            </div>
            <!-- /TEXT BOX -->

        </div>
        @endforeach


    </div>
    <!-- /MAIN WRAPPER -->

@endsection
