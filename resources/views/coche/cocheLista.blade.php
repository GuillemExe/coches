@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<div class="row mt-5">
    @if($coches)
        @foreach ($coches as $coche)
            <div class="col-4 mb-5">
                <div class="py-4 d-flex flex-column justify-content-center align-items-center image" style="background-image: url( {{ asset('img/coche.svg') }} ); background-color: white">
                    <div class="panel panel-default">
                        <div class="panel-body">{{ $coche->model }}</div>
                    </div>
                    <button type="button" class="btn mt-4 btn-info w-25 justify-content-center">Info</button>
                    <button type="button" class="btn mt-4 btn-warning w-25 justify-content-center">Edit</button>
                    <form action="{{ url('/coche', ['id' => $coche->id]) }}" method="post">
                        <input class="btn mt-4 btn-danger justify-content-center" type="submit" value="Delete"/>
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        @endforeach
    @endif
    <form class="col-4 mb-5" action="{{ url('/coche/create') }}" method="get">
        <input class="py-4 d-flex flex-column justify-content-center align-items-center image-add" type="submit" style="background-image: url( {{ asset('img/plus.svg') }} ); width: 100%;"/>
        @method('get')
        @csrf
    </form>
</div>

@endsection


@section('footer')
@include('template.footer')
@endsection