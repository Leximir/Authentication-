@extends('layout.layout')

@section('pageTitle')
    {{ $pageTitle }}
@endsection

@section("pageContent")

    <div class="container my-5">
        <div class="row justify-content-center">
            <div class="col-md-6 text-center">
                <h2 class="mb-4">Welcome to the {{ $pageTitle }} page !</h2>

                <ol>
                    @foreach($allCities as $city)
                        <li>
                            <a href="">{{ $city->city }} : {{ $city->temperature }}</a>
                        </li>
                    @endforeach
                </ol>

            </div>
        </div>
    </div>
@endsection
