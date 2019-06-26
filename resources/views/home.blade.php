@extends('layouts.app')

@section('content')
<new></new>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">      	
            <div class="card">
                <div class="card-header">Lista Articulos</div> 
                <table-component></table-component>
                <modal-form></modal-form>
            </div>
        </div>
    </div>
</div>
@endsection