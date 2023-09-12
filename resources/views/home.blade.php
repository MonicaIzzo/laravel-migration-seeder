@extends('layout.layout')

{{-- Setto il titolo della pagina --}}
@section('title', 'Home')

{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <section id='trains'>
        <div class='row row-cols-4'>
            @forelse ($trains as $train)
                @include('includes.train')
            @empty
                <h3>Non ci sono treni in partenza!</h3>
            @endforelse
        </div>
    </section>
@endsection
