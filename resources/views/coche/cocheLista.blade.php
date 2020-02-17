@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<div class="grid-items">
    @if($coches)
        @foreach ($coches as $coche)
            <div class="item" style="background-image: url( {{ asset('img/coche.svg') }} )">
                <div class="content-item">
                    <div class="button-item button-info button-radius-bottom-left">Info</div>
                    <div class="button-item button-edit">Edit</div>
                    <div class="button-item button-delete button-radius-bottom-right">Delete</div>
                </div>
            </div>
        @endforeach
    @endif
</div>

@endsection


@section('footer')
@include('template.footer')
@endsection