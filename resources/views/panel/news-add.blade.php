@extends('layouts.panel')

@section('content')
    <section class="py-3 px-3">
        <div class="form-group">
            <label>Título</label>
            <input type="text" class="form-control" />
        </div>
        <div class="form-group">
            <label>Contenido</label>
            <textarea type="text" class="form-control"></textarea>
        </div>
    </section>
@endsection