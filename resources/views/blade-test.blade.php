@extends('layouts.master')

@section('content')
@if (false)

<h3>Conteúdo do site</h3>

@elseif (true)

<h3>Estou redenrizando se</h3>

@else

<h3>Estou redenrizando de outra parte</h3>
@endif

@php
    $matriz = ['João', 'Antônio', 'Fernando', 'Miguel'];

@endphp
<ul>
    @foreach ($matriz as $m )
        <li>{{ $m }}</li>
    @endforeach
</ul>
<ul>
    @for ($i=0; $i < count($matriz); $i++ )
        <li>{{ $matriz[$i] }}</li>
    @endfor
</ul>

@empty()

@endempty

@include()
@isset()

@endisset



    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.
        Commodi soluta eius excepturi nesciunt perferendis optio nihil
        enim labore incidunt quo voluptatem quasi non, consequatur fugit vero?
        Nam molestiae dignissimos voluptas.
    </p>
@endsection
