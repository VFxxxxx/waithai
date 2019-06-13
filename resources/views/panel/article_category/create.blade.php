@extends('adminlte::page')

@section('title', 'Добавление категории')

@section('content_header')
    <h1>Добавление категории</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавление категории</h3>
                </div>

                <form role="form" method="post" action="{{ route('article_categories.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Название:</label>
                            <input name="title" type="text" class="form-control" placeholder="Заголовок" value="{{ @old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Сортировка:</label>
                            <input name="position" type="number" class="form-control" value="0" required>
                        </div>

                        <div class="form-group">
                            <label>Видимость:</label>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="visible" value="1" checked>
                                    Активна
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" name="visible" value="0">
                                    Не активна
                                </label>
                            </div>
                        </div>

                    </div>
                    <div class="box-footer">
                        <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                        <input type="submit" value="Добавить" class="btn btn-success">
                    </div>
                </form>

            </div>
        </div>
    </section>

    @include('panel.errors.errors')

@stop
