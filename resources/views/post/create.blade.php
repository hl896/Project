@extends('layouts.app')

@section('content')
    <div class="container">

            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">

                        <form action="{{route('posts.store')}}" method="post">
                            {{ csrf_field() }}

                            <div class="panel-heading">
                                <input type="text" class="form-control" name="title">
                            </div>

                            <div class="panel-body">
                                <textarea name="content" cols="30" rows="10" class="form-control"></textarea>
                            </div>

                            <div class="panel-footer">
                                <input type="submit" class="btn btn-lg btn-success" value="sub_mit">
                            </div>



                        </form>

                    </div>

                </div>
            </div>

    </div>
@endsection
