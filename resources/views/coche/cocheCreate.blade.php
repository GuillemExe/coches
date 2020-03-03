@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<div>
    <form action="{{ url('/coche/create') }}" method="post">
        
        @method('post')
        @csrf
    
        <div class="form-group">
            <label>Make</label>
            <input name="make" class="form-control"/>
            {{-- {{ Form::textGroup(['name' => 'make', 'value' => $coche->make, 'class' => 'form-control']) }} --}}
        </div>
        <div class="form-group">
            <label>Model</label>
            <input name="model" class="form-control"/>
            {{-- {{ Form::textGroup(['name' => 'model', 'value' => $coche->model, 'class' => 'form-control']) }} --}}
        </div>
        <div class="form-group">
            <label>Produced on</label>
            <input name="produced_on" type="date" class="form-control"/>
            {{-- {{ Form::textGroup(['name' => 'produced_on', 'value' => $coche->produced_on, 'class' => 'form-control']) }} --}}
        </div>
        <div class="form-group">
            <label>Coche imagen</label>
            <input name="coche_image" class="form-control"/>
            {{-- {{ Form::textGroup(['name' => 'coche_image', 'value' => $coche->coche_image, 'class' => 'form-control']) }} --}}
        </div>

        <input class="btn mt-4 btn-danger justify-content-center" type="submit" value="Create"/>
    </form>
</div>

@endsection


@section('footer')
@include('template.footer')
@endsection