@extends('layouts.app')
@section('content')
    <section class="hero-section ptb-120 text-white bg-black" style="padding: 20px 0;">
        <div class="container">
            <div class="row justify-content-center text-center text-lg-start align-items-center">
                <div class="col-lg-12 col-md-12 text-center">
                    <div class="hero-content-wrap mt-5 mt-lg-0 mt-xl-0">
                        <h1 class="fw-bold display-5 aos-init aos-animate text-white" data-aos="fade-up">Bize Yardım</h1>
                        <p class="lead aos-init aos-animate" data-aos="fade-up">Gelin adresi toplayalım el birliği ile birleştirelim, Yardımları hızlandıralım</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8">
            <h1 class="text-center mt-5">Yardım Bekleyen Adresler</h1>
            <ul class=" list-unstyled mt-5">
                @foreach($items as $item)
                <li class="d-flex align-items-start mb-4">
                    @if($item->status == 'pending')
                        <div class="icon-box bg-warning rounded me-4">
                            <i class="fas fa-timer text-white"></i>
                        </div>
                    @else
                        <div class="icon-box bg-success rounded me-4">
                            <i class="fas fa-check-circle text-white"></i>
                        </div>
                    @endif
                    <div class="icon-content">
                        <h3 class="h5">{{ $item->name }}</h3>
                        <p class="custom-mb-0">Adres : {{ $item->address }}</p>
                        <p class="custom-mb-0">Telefon : {{ $item->phone }}</p>
                        <p class="custom-mb-0">İl - İlçe : {{ $item->city }} / {{ $item->district }}</p>
                    </div>
                </li>
                @endforeach
            </ul>
            <div class="text-center mt-5 d-flex justify-content-center align-items-center">
                {{ $items->links() }}
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
