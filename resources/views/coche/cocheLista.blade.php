@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
<style>
    .btn:focus {
        outline: none;
        outline: 0 !important 
    }
</style>
@endsection


@section('content')
<div class="row mt-5">
    @if($coches)
        @foreach ($coches as $coche)
            <div class="col-4 mb-5">
                <div class="py-4 d-flex flex-column justify-content-center align-items-center image" style="background-image: url( {{ $coche->coche_image ?? '' }} ); background-color: white">
                    <div class="panel panel-default">
                        <div class="panel-body">{{ $coche->model }}</div>
                    </div>
                    <form action="{{ url('/coche', ['id' => $coche->id]) }}" method="get">
                        <input class="btn mt-4 btn-info justify-content-center font-weight-bold text-dark" type="submit" value="INFORMACION"/>
                    </form>
                    <form action="{{ url('/coche/edit', ['id' => $coche->id]) }}" method="get">
                        <input class="btn mt-4 btn-warning justify-content-center font-weight-bold text-dark" type="submit" value="EDITAR"/>
                    </form>
                    <form action="{{ url('/coche', ['id' => $coche->id]) }}" method="post">
                        <input class="btn mt-4 btn-danger justify-content-center font-weight-bold text-dark" type="submit" value="ELIMINAR"/>
                        @method('delete')
                        @csrf
                    </form>
                </div>
            </div>
        @endforeach
    @endif
    <div class="col-4 mb-5">
        <a class="py-4 d-flex flex-column justify-content-center align-items-center image-add" href="{!! url('/coche/create/new'); !!}"
        style="background-image: url( {{ asset('img/plus.svg') }} ); width: 100%;"></a>
    </div>
    {{--

    // DEPRECATED

    <form class="col-4 mb-5" action="{{ url('/coche/create/new') }}" method="get">
        <input class="py-4 d-flex flex-column justify-content-center align-items-center image-add" type="submit" style="background-image: url( {{ asset('img/plus.svg') }} ); width: 100%;"/>
        
            En caso de que de algún error es necesario autentificar la clave o token que usa el servidor para ello se lo pasaremos en el mismo formulario.
            
            @method('get')
            @csrf 
        
    </form>
    --}}
</div>

@endsection


@section('footer')
@include('template.footer')
@endsection