@extends('project.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="h3">Наши проекты</div>
                <br>
                <a href="{{route('project.add')}}"class="btn btn-success">Добавить задачу</a><br>
                <br>
                <table class="table">
                    <thead>
                        <tr>
                            <td>ID</td>
                            <td>Заголовок</td>
                            <td>Действие</td>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($projects as $project)
                    <tr>
                        <td>{{$project->id}}</td>
                        <td>{{$project->name}}
                            @foreach($project->files as $files)
                                <div class="col-md-2">
                                    <img src="{{Storage::url($files->name)}}" alt="" class="img-fluid">
                                </div>

                            @endforeach
                        </td>
                        <td>
                            <a href="{{route('project.show', $project->id) }}">Открыть</a><br>
                            <a href="{{route('project.edit', $project->id) }}" >Редактировать</a><br>
                            <form action="{{ route('project.destroy', $project->id ) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                    <div>
                        {{ $projects->links() }}
                    </div>

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection
