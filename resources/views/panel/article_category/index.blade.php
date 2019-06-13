@extends('adminlte::page')


@section('title', 'Категории')

@section('content_header')
    <span class="content-title">Категории</span>
    <a href="{{ route('article_categories.create') }}" class="btn btn-success btn-xs bottom_my">
        <i class="fa fa-plus"></i>
        Новая категория
    </a>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @include('flash::message')
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Категории</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>title</th>
                                <th>text</th>
                                <th>position</th>
                                <th>visible</th>
                                <th>created_at</th>
                                <th>action</th>
                            </tr>

                            @foreach ($categories as $category)
                                <tr>
                                    <td>{{ $category->title }}</td>
                                    <td>{{ $category->text }}</td>
                                    <td>{{ $category->position }}</td>
                                    <td>{{ $category->visible }}</td>
                                    <td>{{ $category->created_at }}</td>
                                    <td></td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
