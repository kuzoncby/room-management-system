@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-4 text-right">
                    <form class="form-inline" method="post" action="{{url('/filter/name')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="学生姓名">
                                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">搜索</button>
                  </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-center">
                    <form class="form-inline" method="post" action="{{url('/filter/room')}}">
                        {{csrf_field()}}
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" class="form-control" id="room" name="room" placeholder="房间号">
                                <span class="input-group-btn">
                    <button type="submit" class="btn btn-primary">搜索</button>
                  </span>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4 text-right">
                    <a class="btn btn-lg btn-primary"><i class="fa fa-fw fa-plus-circle"></i></a>
                </div>
            </div>
        </div>
    </div>
    <br/>
    <br/>
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title">所有学生</h3>
                        </div>
                        <div class="panel-body">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>学生</th>
                                    <th>房间</th>
                                    <th>邮件</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($students as $student)
                                    @if(nullOrEmptyString($student->room))
                                        <tr>
                                            <td>
                                                {{$student->name}}
                                            </td>
                                            <td>
                                                {{$student->room->room == null}}
                                            </td>
                                            <td>
                                                {{$student->email}}
                                            </td>
                                        </tr>
                                    @endif
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
