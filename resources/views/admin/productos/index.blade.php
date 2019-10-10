@extends("admin.template.layout")

@section('content')
<div class="row">
    <div class="col-md-12 mb10">
        @if(!Request::has("lista"))
            <a href="{{ route( $route .'.create') }}" class="mb1 btn btn-primary">Crear nuevo</a>
            <a href="{{ route( $route .'.index') . "?lista=archivados" }}" class="mb1 btn btn-secondary">Archivados</a>
        @else
            <a href="{{ route( $route .'.index') }}" class="mb1 btn btn-secondary">Volver a la lista</a>
        @endif
    </div>
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>{{ ucfirst($route) }} {{ Request::has("lista") ? "archivadas" : "" }}</h2>
            </div>
            <div class="card-body">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Imágen</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Categoría</th>
                            <th scope="col">Precio</th>
                            <th scope="col">Cantidad</th>
                            <th scope="col">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $obj)
                            <tr>
                                <td scope="row">{{ $obj->id }}</td>
                                <td><a href="{{ getUrlImagen($obj->imagen,"full") }}" target="blank"><img src="{{ getUrlImagen($obj->imagen,"thumb") }}" alt="" width="60"></a></td>
                                <td>{{ $obj->nombre }}</td>
                                <td>{{ $obj->categoria->nombre }}</td>
                                <td>S/{{ number_format($obj->precio,2) }}</td>
                                <td>{{ $obj->cantidad }}</td>
                                <td>

                                    <form
                                        id="form_delete_{{ $obj->id }}"
                                        action="{{ route($route .'.destroy',[$obj->id]) }}"
                                        method="POST"
                                        >
                                        @if(Request::has("lista"))
                                            <input type="hidden" name="eliminar" value="eliminar">
                                        @endif
                                        {{ csrf_field() }}
                                        {{ method_field("DELETE") }}
                                    </form>

                                    <div class="dropdown d-inline-block mb-1">
                                        <button class="btn btn-primary btn-sm dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" data-display="static">
                                            <i class="mdi mdi-cogs"></i>
                                        </button>
                                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                            @if(Request::has("lista"))
                                                <a class="dropdown-item" href="{{ route( $route .'.edit',[$obj->id])."?accion=restaurar" }}">Recuperar</a>
                                            @else
                                                <a class="dropdown-item" href="{{ route( $route .'.edit',[$obj->id]) }}">Editar</a>
                                            @endif

                                            <a class="dropdown-item" href="javascript:eliminar({{ $obj->id }});">Eliminar</a>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script>
    function eliminar(id){
        var modal = confirm("¿Desea realizar esta acción?");
        if(modal == true){
            $("#form_delete_" + id).trigger("submit");
        }
    }
</script>
@endsection
