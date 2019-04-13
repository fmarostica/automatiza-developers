@extends('layouts.panel')

@section('content')
    <div id="finances_page" class="gm-uc-page">
        <div class="gm-uc-page-header">
            <a id="ucProductos-btnAgregar" href="/panel/novedades/agregar" title="Agregar producto" type="button" class="btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M19,13H13V19H11V13H5V11H11V5H13V11H19V13Z" />
                </svg>
            </a>
            <input id="ucProductos-txtBuscar" placeholder="Buscar" class="form-control gm-filter toolbar-search" type="search" />
            <button id="" type="button" style="inline-block" class="gm-icon-button btnFilter btn-toolbar">
                <svg viewBox="0 0 24 24">
                    <path d="M14,12V19.88C14.04,20.18 13.94,20.5 13.71,20.71C13.32,21.1 12.69,21.1 12.3,20.71L10.29,18.7C10.06,18.47 9.96,18.16 10,17.87V12H9.97L4.21,4.62C3.87,4.19 3.95,3.56 4.38,3.22C4.57,3.08 4.78,3 5,3V3H19V3C19.22,3 19.43,3.08 19.62,3.22C20.05,3.56 20.13,4.19 19.79,4.62L14.03,12H14Z" />
                </svg>
            </button>
        </div>
        <div class="gm-uc-page-body">
            <div class="gm-itembox-container">
                @if (count($articles)>0)
                        @foreach ($articles as $article)
                            <div class="article-list-item">
                                <div class="row py-2 px-2">
                                    <div class="col-md-2">
                                            <img class="image" src="{{ $article->image }}" />
                                    </div>
                                    <div class="col-md-10">
                                        <h2 class="title">{{ $article->title }}</h2>
                                        <div>
                                            {{ $article->short_desc }}
                                        </div>
                                    </div>
                                    <div class="col-md-12 text-right">
                                        <button class="btn btn-danger">
                                            <svg viewBox="0 0 24 24">
                                                <path d="M19,4H15.5L14.5,3H9.5L8.5,4H5V6H19M6,19A2,2 0 0,0 8,21H16A2,2 0 0,0 18,19V7H6V19Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                @else
                    {{ __("app.not_registers_found") }}    
                @endif
            </div>
            <div id="ucUsuarios-filtros" class="gm-uc-sidebar">
                <div class="gm-row">
                    <div class="gm-col-12">
                        <label><?php echo "Ordenar por"; ?></label>
                        <select id="" class="gm-form-control-alt gm-filter">
                            <option value="nombre"><?php echo isset($locales->name) ? $locales->name : "Name"; ?></option>
                            <option value="apellido" selected><?php echo isset($locales->last_name) ? $locales->last_name : "Last name"; ?></option>
                            <option value="saldo"><?php echo isset($locales->balance_field) ? $locales->balance_field : "Balance"; ?></option>
                        </select>
                    </div>
                    <div class="gm-col-12">
                        <label><?php echo isset($locales->order) ? $locales->order : "Order"; ?></label>
                        <select id="" class="gm-form-control-alt gm-filter">
                            <option value="asc"><?php echo isset($locales->ascending) ? $locales->ascending : "Ascending"; ?></option>
                            <option value="desc"><?php echo isset($locales->descending) ? $locales->descending : "Descending"; ?></option>
                        </select>
                    </div>
                </div>
                <h3><?php echo isset($locales->filter_by) ? $locales->filter_by : "Filter by"; ?></h3>
                <div class="gm-row">
                    <div class="gm-col-12">
                        <select id="" class="gm-form-control-alt gm-filter">
                            <option value=""><?php echo isset($locales->group) ? $locales->group : "Group"; ?></option>
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="gm-uc-page-footer">
            {{ $articles->links() }}
        </div>
    </div>
@endsection