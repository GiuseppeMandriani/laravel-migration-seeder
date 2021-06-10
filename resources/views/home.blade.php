@extends('layouts.main')

{{-- Versione short --}}
@section('head-title', 'Home | Package Travel')

@section('content')
    <section>
    <h2>I nostri Pacchetti</h2>
            @foreach ( $packages as $package)
            <ul>
                <li>{{ $package->city}}</li>
                <li>{{ $package->state}}</li>
                <li>Per {{ $package->n_persone}} persone</li>
                <li>{{ $package->period}}</li>
                <li>{{ $package->type}}</li>
                <li>{{ $package->description}}</li>
                <li>{{ number_format($package->price,0,',','.') }} €</li>
            </ul>
            @if (!$loop->last)
                <hr>
            @endif
            @endforeach
        <ul>
        </ul>

                
    </section>
@endsection
