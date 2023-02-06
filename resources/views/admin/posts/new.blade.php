@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">{{ __('Administración de posts') }}</div>

    <div class="card-body">
        <div class="row justify-content-center">
            <div class="col-6 p-3 border rounded-2">
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <!-- Formulario de post -->
                <form action="{{ route('admin.posts.store') }}" method="POST">
                    @csrf
                    <label for="title" class="mb-2">Titulo de post</label>
                    <input type="text" class="form-control mb-2" name="post"  id="title" placeholder="Introduce un titulo">
                    <label for="category-id" class="mb-2">Categoría</label>
                    <select class="form-control" name="category_id" id="category-id">
                        <option value="">Elegir categoria</option>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->category_name }}</option>
                        @endforeach
                    </select>
                    <label for="content" class="mb-2">Contenido</label>
                    <textarea type="text" class="form-control mb-2" name="content" id="content"  placeholder="Introduce el contenido de tu post"></textarea>
                    <label for="author" class="mb-2">Autor</label>
                    <input type="text" class="form-control mb-2" name="author"  id="author" placeholder="Introduce un autor">

                    <button type="submit" class="btn btn-primary">Crear post</button>
                    <a class="btn btn-danger" href="{{ route('admin.posts.index') }}">Cancelar</a>
                </form>

            </div>
        </div>
    </div>
</div>
@endsection
