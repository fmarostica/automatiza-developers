@extends('layouts.panel');

@section('content')
<div id="news-page" class="gm-uc-page">
        <div class="gm-uc-page-header">
            <button id="btn-add" title="Agregar producto" type="button" class="btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M21,7L9,19L3.5,13.5L4.91,12.09L9,16.17L19.59,5.59L21,7Z" />
                </svg>
            </button>
        </div>
        <div class="gm-uc-page-body py-3 px-3">
            <div class="form-group">
                <label>Título</label>
                <input id="title" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label>Descripción</label>
                <textarea id="short-desc" type="text" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label>Enlace github/gitlab</label>
                <input id="git-link" type="text" class="form-control" />
            </div>
            <div class="form-group">
                <label for="input-file">Adjuntar archivo (comprimido en zip)</label>
                <br/><input id="input-file" type="file" />
            </div>
        </div>
        <div id="page-footer" class="gm-uc-page-footer"></div>
    </div>
    <script src="/js/panel/downloads.js"></script>
    
@endsection