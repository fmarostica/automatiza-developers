@extends('layouts.panel')

@section('content')
    <div id="news-page" class="gm-uc-page">
        <div class="gm-uc-page-header">
            <a href="/panel/downloads/create" title="Agregar producto" class="btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
            </a>
            <input id="txt-search" placeholder="Buscar" class="form-control gm-filter toolbar-search" type="search" />
            <!--
            <button id="" type="button" style="inline-block" class="gm-icon-button btnFilter btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M14,12V19.88C14.04,20.18 13.94,20.5 13.71,20.71C13.32,21.1 12.69,21.1 12.3,20.71L10.29,18.7C10.06,18.47 9.96,18.16 10,17.87V12H9.97L4.21,4.62C3.87,4.19 3.95,3.56 4.38,3.22C4.57,3.08 4.78,3 5,3V3H19V3C19.22,3 19.43,3.08 19.62,3.22C20.05,3.56 20.13,4.19 19.79,4.62L14.03,12H14Z" />
                </svg>
            </button>
            -->
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
    <script src="/js/panel/downloads.js"></script>
    <script>
        $(document).ready(function(){
            downloads.load_records();
        });
    </script>
@endsection