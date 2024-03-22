@extends('app')

@section('content')
<div class="container w-25 border p-4 my-4">
    <div class="row mx-auto">
        <form action="{{route('categories.store')}}" method="POST">
            @csrf

            @if (session('succes'))
            <h6 class="alert alert-success">{{session('succes')}}</h6>
            @endif
            @error('name')
            <h6 class="alert alert-danger">{{$message}}</h6>
            @enderror
            <div class="mb-3">
                <label for="name" class="form-label">Titulo de la tarea</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="mb-3">
                <label for="color" class="form-label">Color de la categoria</label>
                <input type="color" name="color" class="form-control">
            </div>
            <button type="submit" class="btn btn-primary">Crear nueva categoria</button>
        </form>

        <div>
            @foreach ($categories as $category)
                {{category->name}}
                
                
            @endforeach
        </div>
    </div>


</div>
@endsection