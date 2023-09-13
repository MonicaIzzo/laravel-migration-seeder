@extends('layouts.layout')

{{-- Setto il titolo della pagina --}}
@section('title', 'Home')

{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <section id='trains'>
        <ul>
            <li>
                @foreach ($trains as $train)
                    <ul>
                        <li><strong>{{ $train->azienda }}</strong> | STAZIONE DI PARTENZA:
                            <strong>{{ $train->stazione_di_partenza }}</strong> | STAZIONE DI
                            ARRIVO: <strong>{{ $train->stazione_di_arrivo }}</strong><br>
                            ORARIO DI PARTENZA: <strong>{{ $train->orario_di_partena }}</strong> | ORARIO DI
                            ARRIVO: <strong>{{ $train->orario_di_arrivo }}</strong><br>
                            CODICE TRENO: <strong>{{ $train->codice_treno }}</strong><br>
                            CARROZZA NUMERO: <strong>{{ $train->numero_di_carrozze }}</strong><br>
                            IN ORARIO: <strong>{{ $train->in_orario }}</strong> | CENCELLATO:
                            <strong>{{ $train->cancellato }}</strong>
                            <hr>
                        </li>
                    </ul>
                @endforeach
            </li>
        </ul>
    </section>
@endsection
<!-- Dovrei trasformare l'orario in un forma più leggibile con un metodo nel MODELS -->
<!-- Dovrei trasformare le 2 risposte dal database della variabili booleane in un formato più leggibile -->
<!-- Avrei potuto prendere i dati KAFE più veritieri -->
<!-- Avrei potuto fare la tabella TRAINS con dati più stringenti e consoni al formato -->
