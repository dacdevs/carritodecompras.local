@extends("admin.template.layout")

@section('content')
<div class="row">
    <div class="col-md-12 mb10">
        <a href="{{ route('productos.create') }}" class="mb1 btn btn-primary">Crear nuevo</a>
    </div>
    <div class="col-lg-12">
        <div class="card card-default">
            <div class="card-header card-header-border-bottom">
                <h2>Producto</h2>
            </div>
            <div class="card-body">
                
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td scope="row">1</td>
                            <td>Lucia</td>
                            <td>Christ</td>
                            <td>@Lucia</td>
                        </tr>
                        <tr>
                            <td scope="row">2</td>
                            <td>Catrin</td>
                            <td>Seidl</td>
                            <td>@catrin</td>
                        </tr>
                        <tr>
                            <td scope="row">3</td>
                            <td>Lilli</td>
                            <td>Kirsh</td>
                            <td>@lilli</td>
                        </tr>
                        <tr>
                            <td scope="row">4</td>
                            <td>Else</td>
                            <td>Voigt</td>
                            <td>@voigt</td>
                        </tr>
                        <tr>
                            <td scope="row">5</td>
                            <td>Ursel</td>
                            <td>Harms</td>
                            <td>@ursel</td>
                        </tr>
                        <tr>
                            <td scope="row">6</td>
                            <td>Anke</td>
                            <td>Sauter</td>
                            <td>@Anke</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection