@extends('adminlte::page')


@section('title', 'Статьи')

@section('content_header')
    <span class="content-title">Статьи</span>
    <a href="{{ route('articles.create') }}" class="btn btn-success btn-xs bottom_my">
        <i class="fa fa-plus"></i>
        Новая статья
    </a>
@stop

@section('content')
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                @include('flash::message')
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Список статей</h3>
                    </div>
                    <div class="box-body table-responsive no-padding">
                        <table class="table table-hover">
                            <tbody>
                            <tr>
                                <th>title</th>
                                <th>text</th>
                                <th>action</th>
                            </tr>

                            @foreach ($articles as $article)
                                <tr>
                                    <td>
                                        <a href="{{ action('ArticleController@show', $article->id) }}">{{$article->title}}</a>
                                    </td>
                                    <td>{{$article->text}}</td>
                                    <td>{{$article->published_at->day}} {{$article->published_at->formatLocalized('%B')}}  {{$article->published_at->year}}</td>
                                    <td>
                                        <form method="post" action="{{ action('ArticlesController@destroy', $article) }}" accept-charset="UTF-8" class="btn-block">
                                            <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
                                            <input type="hidden" name="_method" value="delete" />
                                            <input class="btn btn-danger btn-block" type="submit" value="Удалить" />
                                        </form>
                                    </td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        {{ $articles->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
@stop
