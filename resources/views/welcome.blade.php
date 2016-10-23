@extends('layouts.app')

@section('content')
    <style>
        .mar{
            margin-bottom: 30px;
            float: right;
        }
    </style>
    <div class="col-md-12 mar">
        <a class="btn btn-default" href="/createForm">Create Article</a>
    </div>
    @foreach($articles as $article)
        <div class="col-md-4">
            <div class="panel panel-info">
                <div class="panel-heading">{{$article->title}}</div>

                <?php
                    $rest = substr( $article->body, 0, 150)."...";
                ?>

                <div class="panel-body">{{$rest}}
                    <a type="button" class="btn .btn-link" href="">Read more</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection



