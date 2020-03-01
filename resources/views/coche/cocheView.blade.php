@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
    <style>
        .border-rounded {
            border-radius: 5px;
            border: 1px solid lightgray;
            background-color: white
        }
        .image-coche {
            height: 300px;
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
        }
        .border-information {
            border-radius: 5px
        }
    </style>
@endsection


@section('content')
<div class="row mt-5">
    @if($coche)
        @if( is_null($coche->coche_image) || empty($coche->coche_image) )
            <div class="col-12 mb-5 border-rounded image-coche" style="background-image: url( {{ asset('img/coche.svg') }} );">
            
            </div>
        @else
            <div class="col-12 mb-5 border-rounded image-coche" style="background-image: url(' {{ $coche->coche_image }} ');">
            
            </div>
        @endif

        <div class="col-12 p-0 mb-5 border-rounded">
            <table class="table table-dark mb-0 border-information">
                <thead>
                  <tr>
                    <th scope="col ">Make</th>
                    <th scope="col">Model</th>
                    <th scope="col">Produced on</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>{{ $coche->make ?? 'No hay informacion' }}</td>
                    <td>{{ $coche->model ?? 'No hay informacion' }}</td>
                    <td>{{ $coche->produced_on ?? 'No hay informacion' }}</td>
                  </tr>
                </tbody>
            </table>
        </div>
    @endif
</div>

@endsection


@section('footer')
@include('template.footer')
@endsection