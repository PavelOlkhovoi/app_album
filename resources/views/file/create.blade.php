@extends('layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <h5 class="card-header">Файлы</h5>
                    <div class="card-body">
                        <form action="{{route('file.store')}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <br>
                            <div class="custom-file">
                                <input type="file" name="file" class="custom-file-input" id="customFileLangHTML">
                                <label class="custom-file-label" for="customFileLangHTML" data-browse="Из сисемы">Загрузи файл</label>
                            </div>
                            <br>
                            <br>
                            <div class="input-group mb-3">

                                <select name="project_id" class="custom-select" id="inputGroupSelect02">
                                    @foreach($projects as $project)
                                        <option value="{{$project->id}}">{{$project->name}}</option>
                                    @endforeach()
                                </select>
                                <div class="input-group-append">
                                    <label class="input-group-text" for="inputGroupSelect02">Для прокта</label>
                                </div>
                            </div>

                            <button type="submit" class="btn btn-success">Добавить проект</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
