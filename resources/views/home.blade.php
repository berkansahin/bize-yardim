@extends('layouts.app')
@section('content')
    <section class="hero-section ptb-120 text-white bg-black" style="padding: 230px 0;">
        <div class="container">
            <div class="row justify-content-center text-center text-lg-start align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                        <h1 class="fw-bold display-5 aos-init aos-animate text-white" data-aos="fade-up">Bize Yardım</h1>
                        <p class="lead aos-init aos-animate" data-aos="fade-up">Gelin adresi toplayalım el birliği ile birleştirelim, Yardımları hızlandıralım</p>
                        <div class="action-btns mt-5 aos-init aos-animate" data-aos="fade-up" data-aos-delay="50">
                            <a href="{{ route('address') }}" class="btn btn-primary me-lg-3 me-sm-3">Adres Gir</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1 class="text-center mt-5">Son 10 Yardım Bekleyen Adresler</h1>
            <ul class=" list-unstyled mt-5">
                @foreach($address as $item)
                    @include('item', ['item' => $item])
                @endforeach
            </ul>
            <h4 class="text-center">
                <a href="{{ route('addresses') }}">Hepsini Gör</a>
            </h4>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
