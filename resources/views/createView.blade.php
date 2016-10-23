@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">New Article</div>

                    <div class="panel-body">
                        @include('common.errors')
                        <form action="{{ url('article') }}" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title">
                            </div>
                            <div class="form-group">
                                <label for="body">Body</label>
                                <textarea type="text" class="form-control" id="body" name="body"></textarea>
                            </div>

                            <button type="submit" class="btn btn-success">Submit</button>
                            <a class="btn btn-info" href="/">Home</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
