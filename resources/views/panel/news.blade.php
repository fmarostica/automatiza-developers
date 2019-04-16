@extends('layouts.panel')

@section('content')
    <div id="news-page" class="gm-uc-page">
        <div class="gm-uc-page-header">
            <a href="/panel/news/create" title="Agregar noticia" class="btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
            </a>
            <input id="" placeholder="Buscar" class="form-control gm-filter toolbar-search" type="search" />
        </div>
        <div class="gm-uc-page-body">
            <div id="records-container" class="gm-itembox-container"></div>
        </div>
        <div id="page-footer" class="gm-uc-page-footer">
            <button id="btn-pager-first" class="gm-btn primary btn-toolbar" disabled>
                <svg viewBox="0 0 24 24">
                    <path d="M20,5V19L13,12M6,5V19H4V5M13,5V19L6,12" />
                </svg>
            </button>
            <button id="btn-pager-previous" class="gm-btn primary btn-toolbar" disabled>
                <svg viewBox="0 0 24 24">
                    <path d="M6,18V6H8V18H6M9.5,12L18,6V18L9.5,12Z" />
                </svg>
            </button>
            <button id="btn-pager-next" class="gm-btn primary btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M16,18H18V6H16M6,18L14.5,12L6,6V18Z" />
                </svg>
            </button>
            <button id="btn-pager-last" class="gm-btn primary btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M4,5V19L11,12M18,5V19H20V5M11,5V19L18,12" />
                </svg>
            </button>
        </div>
    </div>
    <script src="/js/panel/module.js"></script>
    <script>
        $(document).ready(function(){
            $module.initialize("/news");
            $module.load_records();
        });
    </script>
@endsection