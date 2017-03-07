@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">所有学生</div>

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
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->room->room}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
