@extends('layouts.index')

@push('styles')
    <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
@endpush

@section('title', 'About Us')

@section('content')
<div class="top-right links">
   <a href="{{ url('/') }}">Home</a>
   <a href="{{ route('aboutUs') }}">About us</a> <!-- bolje route nego url, jer nas odmah obavijesti da ne štima, da ne zaboraviumo definirat rutu -->
</div>
    <div class="content">
		<div class="title m-b-md">
            About Us
		</div>
	</div>
@endsection