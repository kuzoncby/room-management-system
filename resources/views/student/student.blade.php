@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="page-header" contenteditable="false">
                        <h1>{{$student->name}}
                            <small>
                                [<a href="{{url('/settings')}}">返回</a>]
                            </small>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section">
        <div class="container">
            <div class="row">
                {{--<div class="col-md-3">--}}
                {{--<div class="thumbnail">--}}
                {{--<img src="{{$user->avatar}}"--}}
                {{--class="img-responsive">--}}
                {{--<div class="caption">--}}
                {{--<a class="btn btn-block btn-info btn-lg"><i class="fa fa-fw fa-upload"></i>Update Your--}}
                {{--Avatar</a>--}}
                {{--</div>--}}
                {{--</div>--}}
                {{--</div>--}}
                <div class="col-md-12">
                    <div class="row">

                        {{--Email Panel--}}
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h2 class="panel-title">电子邮箱
                                    </h2>
                                </div>
                                <div class="panel-body">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="email">电子邮箱</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="email"
                                                       placeholder="Your email" value="{{$student->email}}">
                                                <span class="input-group-btn">
                                                    <button type="submit" class="btn btn-primary">更新电子邮箱</button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                        {{--Name Panel--}}
                        <div class="col-md-12">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <h2 class="panel-title">Name</h2>
                                </div>
                                <div class="panel-body">
                                    <form class="form-inline">
                                        <div class="form-group">
                                            <label class="sr-only" for="name">学生姓名</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="name"
                                                       placeholder="学生姓名" value="{{$student->name}}">
                                                <span class="input-group-btn">
                                                    <button type="submit"
                                                            class="btn btn-primary">更新学生</button>
                                                </span>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop