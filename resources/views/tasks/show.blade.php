@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のタスク詳細ページ</h1>

<table class="table table-striped">
            <thead>
                <tr>
                    <th>ステータス</th>
                    <th>内容</th>
                </tr>
            </thead>
            <tbody>
                    <tr>
                        <td>{{ $task->status }}</td>
                        <td>{{ $task->content }}</td>
                    </tr>
            </tbody>
</table>
            <div>
                @if (Auth::id() == $task->user_id)
                    {!! Form::open(['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
                        {!! Form::submit('タスクの削除', ['class' => 'btn btn-danger btn-md']) !!}
                    {!! Form::close() !!}
                     {!! link_to_route('tasks.edit', 'タスクの編集', $task->id, ['class' => 'btn btn-md btn-info']) !!}
                @endif
            </div>
@endsection