@extends('project.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="h3">Добавить проект</div>
                <br>
                <form action="{{route('project.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Название проекта</label>
                        <input type="text" name="name">
                    </div>

                    <div class="form-group">
                        <label for="description">Описание проекта</label>
                        <input type="text" name="description">
                    </div>

                    <button type="submit" class="btn btn-success">Добавить проект</button>
                </form>
                <br>
            </div>
        </div>
    </div>

@endsection
