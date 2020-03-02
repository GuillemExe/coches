@extends('master.master')

@section('pageTitle','Pagina principal')

@section('header')
@include('template.header')
@endsection


@section('content')
<div>
    <form>
        <div class="form-group">
            <label>Make</label>
            <input type="text" class="form-control" placeholder="Make">
        </div>
        <div class="form-group">
            <label>Model</label>
            <input type="text" class="form-control" placeholder="Make">
        </div>
        <div class="form-group">
            <label>Produced on</label>
            <input type="date" class="form-control" placeholder="Make">
        </div>
        <div class="form-group">
            <label>Coche image</label>
            <input type="text" class="form-control" placeholder="Make">
        </div>
    </form>
</div>

@endsection


@section('footer')
@include('template.footer')
@endsection