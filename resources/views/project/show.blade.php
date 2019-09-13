@extends('project.layout')

@section('content')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="h3">{{$project->name}}</div>
                    <p class="text-info">{{$project->description}}</p>
                @foreach($project->files as $files)
                    <div class="card" style="width: 18rem;">
                        <img src="{{Storage::url($files->name)}}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <form action="{{ route('file.delete', $files->id ) }}" method="post">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection
