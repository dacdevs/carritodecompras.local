@extends("admin.template.layout")

@section('content')
<div class="row">
    <div class="col-md-12 mb10">
        <a href="{{ route( $route .'.index') }}" class="mb1 btn btn-secondary">Volver</a>
    </div>
    <div class="col-lg-6">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>{{ isset($object) ? "Editar" : "Crear" }} producto</h2>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route($route .'.store') }}" enctype="multipart/form-data">
                    @csrf

                    @if(isset($object))
                        <input type="hidden" value="{{ $object->id }}" name="id">
                    @endif

                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input name="codigo" value="{{ isset($object) ? $object->codigo : "" }}" type="text" required class="form-control" id="codigo" placeholder="Código de producto">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input name="nombre" value="{{ isset($object) ? $object->nombre : "" }}" type="text" required class="form-control" id="exampleFormControlInput1" placeholder="">
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlSelect12">Selecciona categoría</label>
                        <select name="categoria" required class="form-control" id="exampleFormControlSelect12">
                            <option value="">-- Selecciona --</option>
                            @foreach ($categorias as $cat)
                                <option {{ isset($object) && $object->parent_id == $cat->id ? "selected" : "" }} value="{{ $cat->id }}">{{ $cat->nombre }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="precio">Precio</label>
                                <input name="precio" value="{{ isset($object) ? $object->precio : "" }}" type="text" required class="form-control" id="precio" placeholder="0.00">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="cantidad">Cantidad</label>
                                <input name="cantidad" value="{{ isset($object) ? $object->cantidad : "" }}" type="number" required class="form-control" id="cantidad" placeholder="0">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="alerta">Umbral de alerta</label>
                                <input name="alerta" value="{{ isset($object) ? $object->alerta : "" }}" type="text" required class="form-control" id="alerta" placeholder="0">
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label for="etiquetas">Etiquetas <small>(Ingrese las etiquetas separado por comas)</small></label>
                                <input name="etiquetas" value="{{ isset($object) ? $object->etiquetas : "" }}" type="text" class="form-control" id="etiquetas" placeholder="Uno, Dos">
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">Descripción</label>
                        <textarea required name="descripcion" class="form-control" id="exampleFormControlTextarea1" rows="3">{{ isset($object) ? $object->descripcion : "" }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="imagen">Imagen principal</small></label>
                        <input name="imagen" value="{{ isset($object) ? $object->imagen : "" }}" type="file" required class="form-control" id="imagen">
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
