@extends('adminlte::page')

@section('title', 'Добавление статьи')

@section('content_header')
    <h1>Добавление статьи</h1>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="box box-success">
                <div class="box-header with-border">
                    <h3 class="box-title">Добавление новости</h3>
                </div>

                <form role="form" method="post" action="{{ route('articles.store') }}" accept-charset="UTF-8" enctype="multipart/form-data">
                    <div class="box-body">
                        <div class="form-group">
                            <label>Заголовок:</label>
                            <input name="title" type="text" class="form-control" placeholder="Заголовок" value="{{ @old('title') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Статья:</label>
                            <textarea name="text" rows="10" class="form-control" value="{{ @old('text') }}" required></textarea>
                        </div>

                        <div class="form-group">
                            <label>ЧПУ:</label>
                            <input name="path" type="text" class="form-control" placeholder="url" value="{{ @old('path') }}" required>
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

                        <div class="form-group">
                            <label>meta title:</label>
                            <input name="meta_title" type="text" class="form-control" placeholder="meta_title" value="{{ @old('meta_title') }}" required>
                        </div>

                        <div class="form-group">
                            <label>meta keywords:</label>
                            <input name="meta_keywords" type="text" class="form-control" placeholder="meta_keywords" value="{{ @old('meta_keywords') }}" required>
                        </div>

                        <div class="form-group">
                            <label>meta description:</label>
                            <input name="meta_description" type="text" class="form-control" placeholder="meta_description" value="{{ @old('meta_description') }}" required>
                        </div>

                        <div class="form-group">
                            <label>Ссылка на видео:</label>
                            <input name="video_link" type="text" class="form-control" placeholder="Ссылка на видео" value="{{ @old('video_link') }}" required>
                        </div>


                        <div class="form-group">
                            <label>Изображение:</label>
                            <input type="file" class="form-control" name="bookcover"/>
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

    <div class="box-footer text-center">
        <a href="{{ url('/admin/article') }}" class="pad_a">Назад</a>
    </div>

@stop
