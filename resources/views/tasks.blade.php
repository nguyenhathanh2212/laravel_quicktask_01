@extends('layouts.app')
@section('content')
    <div class="panel-body">
        @include('common.errors')
        {{ Form::open(array('url' => '/task/', 'method' => 'POST', 'class' => 'form-horizontal')) }}
                <div class="form-group">
                    {{ Form::label('task', trans('message.task'), array('class' => 'col-sm-3 control-label')) }}
                    <div class="col-sm-6">
                        {{ Form::text('name', '', array('name' => 'name', 'id' => 'task-name', 'class' => 'form-control')) }}
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-offset-3 col-sm-6">
                        {{ Form::button('<i class="fa fa-plus"></i> ' . trans('message.addtask'), array('type' => 'submit', 'class' => 'btn btn-default')) }}
                    </div>
                </div>
        {{ Form::close() }}
    </div>
    @if (count($tasks))
        <div class="panel panel-default col-sm-offset-3 col-sm-6">
            <div class="panel-heading">
                {{ trans('message.curenttasks') }}
            </div>
            <div class="panel-body">
                <table class="table table-striped task-table">
                    <thead>
                        <th>{{ trans('message.task') }}</th>
                        <th>&nbsp</th>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                            <tr>
                                <td class="table-text">
                                    <div>{{ $task->name }}</div>
                                </td>
                                <td>
                                    {{ Form::open(array('url' => '/task/' . $task->id, 'method' => 'POST')) }}
                                        {{ method_field('DELETE') }}
                                        {{ Form::button('<i class="fa fa-trash"></i> ' . trans('message.delete'), array('type' => 'submit', 'class'=>'btn btn-danger'))}}
                                    {{ Form::close() }}
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endif
@endsection
