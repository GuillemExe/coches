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
        .image-icon-coche {
            height: 300px;
            background-size: 25%;
            background-repeat: no-repeat;
            background-position: center;
            background-color: white
        }
        .border-information {
            border-radius: 5px
        }
        .size-img {
            height: 24px;
        }
        .size-position-flex {
            display: flex !important;
            justify-content: center;
            align-items: center;
            height: 50px;
        }
        .force-radius {
            border-radius: 5px !important
        }
        .delete-background {
            border: 0px solid transparent;
            background-color: transparent;
        }
        .border-bottom {
            border-bottom-left-radius: 0px !important;
            border-bottom-right-radius: 0px !important;
        }
        .border-top {
            border-top-left-radius: 0px !important;
            border-top-right-radius: 0px !important;
        }
    </style>
@endsection


@section('content')
<div class="row mt-5">
    @if($coche)
        @if( is_null($coche->coche_image) || empty($coche->coche_image) )
            <div class="col-12 mb-5 border-rounded image-icon-coche" style="background-image: url( {{ asset('img/coche.svg') }} );">
            
            </div>
        @else
            <div class="col-12 mb-5 border-rounded image-coche" style="background-image: url(' {{ $coche->coche_image }} ');">
            
            </div>
        @endif

        <div class="col-12 p-0 mb-5 border-rounded">
            <table class="table table-dark mb-0 border-information">
                <thead>
                  <tr>
                    <th scope="col">
                        <div class="size-position-flex">Make</div>
                    </th>
                    <th scope="col">
                        <div class="size-position-flex">Model</div>
                    </th>
                    <th scope="col">
                        <div class="size-position-flex">Produced on</div>
                    </th>
                    <th scope="col">
                        <div class="size-position-flex">Menu</div>
                    </th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>
                        <div class="size-position-flex">{{ $coche->make ?? 'No hay informacion' }}</div>
                    </td>
                    <td>
                        <div class="size-position-flex">{{ $coche->model ?? 'No hay informacion' }}</div>
                    </td>
                    <td>
                        <div class="size-position-flex">{{ $coche->produced_on ?? 'No hay informacion' }}</div>
                    </td>
                    <td>
                        <div class="size-position-flex dropdown">
                            <a type="text" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="size-img" src="{{ asset('img/settings.svg') }}" alt="Settings">
                            </a>
                            <div class="dropdown-menu force-radius delete-background w-auto p-0 m-0" aria-labelledby="dropdownMenuButton">
                                <form action="{{ url('/coche/edit', ['id' => $coche->id]) }}" method="get">
                                    <input class="btn w-100 btn-warning force-radius justify-content-center border-bottom" type="submit" value="Edit"/>
                                </form>
                                <form action="{{ url('/coche', ['id' => $coche->id]) }}" method="post">
                                    <input class="btn w-100 btn-danger force-radius justify-content-center border-top" type="submit" value="Delete"/>
                                    @method('delete')
                                    @csrf
                                </form>
                            </div>
                        </div>
                    </td>
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