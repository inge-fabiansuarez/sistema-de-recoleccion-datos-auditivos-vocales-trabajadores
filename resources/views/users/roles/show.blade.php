@extends('layouts.user_type.auth')

@section('content')
    <div>
        <div class="alert alert-secondary mx-4" role="alert">
            <span class="text-white">
                <strong>Aqui encontraras la configuracion de los usuarios con sus roles y permisos</strong>
            </span>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="card mb-4 mx-4">
                    <div class="card-header pb-0">
                        <div class="d-flex flex-row justify-content-between">
                            <div>
                                <h5 class="mb-0">Roles</h5>
                            </div>
                            <div>
                                <a href="#" class="btn bg-gradient-primary btn-sm mb-0" type="button">+&nbsp; Nuevo
                                    Rol</a>
                            </div>
                        </div>
                    </div>
                    <div class="card-body p-3">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
