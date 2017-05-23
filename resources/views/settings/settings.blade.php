@extends('layouts.app')

@section('content')
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well">
                        <h2>设置额度&nbsp;
                            <small>[
                                <a href="/home">返回</a>]
                            </small>
                        </h2>
                        <form class="form-horizontal" role="form">
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="current" class="control-label">瞬时电量</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="current" placeholder="瓦">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-2">
                                    <label for="all" class="control-label">合计电量</label>
                                </div>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="all" placeholder="度">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <a href="/home" class="btn btn-default">确认</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop