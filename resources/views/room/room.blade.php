@extends('layouts.app')

@section('title', $room->room)

{{--Section under navbar--}}
@section('cover')

@stop

{{--Other section--}}
@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-offset-3 well">
                    <img src="http://pingendo.github.io/pingendo-bootstrap/assets/placeholder.png"
                         class="center-block img-responsive">
                    <h1 class="text-center">{{ $room->room }}</h1>
                    <table class="table table-bordered table-condensed table-hover table-striped">
                        <thead>
                        <tr>
                            <th>姓名</th>
                            <th>email</th>
                            <th>用户名</th>
                            <th>类型</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($room->user as $user)
                            <tr>
                                <td>
                                    <a href="/user/{{$user->username}}">{{$user->name}}</a>
                                </td>
                                <td>{{$user->email}}</td>
                                <td>{{$user->username}}</td>
                                <td>{{$user->type}}</td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@stop
