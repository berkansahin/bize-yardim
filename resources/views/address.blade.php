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
            <h1 class="text-center mt-5">Adres Bilgileri</h1>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12">
                    <div class="register-wrap p-5 bg-white shadow rounded-custom mt-5 mt-lg-0 mt-xl-0">
                        <h3 class="fw-medium h4 text-center">Lütfen mümkün oldukça fazla veri giriniz</h3>
                        <form action="{{ route('address.action') }}" method="post" class="mt-4 register-form">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="input-group mb-3">
                                        <input type="text" name="name" class="form-control" placeholder="Yardım Bekleyen Ad & Soyad" >
                                        @error('name')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="input-group mb-3">
                                        <textarea class="form-control" name="address" placeholder="Adres Bilgisi"  rows="4"></textarea>
                                        @error('address')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <select class="form-control" name="city" placeholder="İl">
                                            <option value="">İl</option>
                                            @foreach(['Malatya', 'Batman', 'Bingöl', 'Elazığ', 'Kilis','Diyarbakır', 'Mardin', 'Siirt', 'Şırnak'] as $city)
                                            <option value="{{ $city }}">{{ $city }}</option>
                                            @endforeach
                                        </select>
                                        @error('city')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="district" placeholder="İlçe">
                                        @error('district')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" name="phone" placeholder="Telefon">
                                        @error('phone')
                                        <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary mt-4 d-block w-100">Yardım için gönder</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-2"></div>
    </div>
@endsection
