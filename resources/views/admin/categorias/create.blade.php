@extends("admin.template.layout")

@section('content')
<div class="row">
    <div class="col-md-12 mb10">
        <a href="{{ route('categorias.index') }}" class="mb1 btn btn-secondary">Volver</a>
    </div>
    <div class="col-lg-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>{{ isset($categoria) ? "Editar" : "Crear" }} categoría</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('categorias.store') }}">
                    @csrf

                    @if(isset($categoria))
                        <input type="hidden" value="{{ $categoria->id }}" name="id">
                    @endif

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input name="nombre" value="{{ isset($categoria) ? $categoria->nombre : "" }}" type="text" required class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Selecciona categoría padre</label>
                        <select name="categoria_padre" class="form-control" id="exampleFormControlSelect12">
                            <option value="">-- Selecciona --</option>
                            @foreach ($categorias as $cat)
                                <option {{ isset($categoria) && $categoria->parent_id == $cat->id ? "selected" : "" }} value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción</label>
                        <textarea name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ isset($categoria) ? $categoria->descripcion : "" }}</textarea>
                    </div>

                    <div class="form-footer pt-4 pt-5 mt-4 border-top">
                        <button type="submit" class="btn btn-primary btn-default">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
