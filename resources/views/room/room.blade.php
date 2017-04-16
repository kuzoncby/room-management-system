@extends('layouts.app')

@section('title', $room->room)

{{--Section under navbar--}}
@section('cover')

@stop

{{--Other section--}}
@section('content')
    <room></room>
@stop
