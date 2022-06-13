@extends('layout.template')

@section('main')
    <!-- Banner -->
    <div id="banner" class="banner-class">
        <div class="md:text-2xl text-lg my-5">
            Payment Failed
        </div> 
        <div>
            <img class="mx-auto md:w-1/6 w-2/6" src="{{ asset('images/payment-failed.png') }}" alt="Payment Failed">
        </div>
    </div>
@endsection 