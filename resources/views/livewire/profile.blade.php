@section('title','Perfil de Usuario')

<div class="row py-4">
    <div class="col-12 col-xl-8">
        @if($showSavedAlert)
        <div class="alert alert-success" role="alert">
            Saved!
        </div>
        @endif
        <div class="card card-body border-0 shadow mb-4">
            <h2 class="h5 mb-4">Informacion de {{  $user->first_name ." ". $user->last_name}}</h2>
            <div>
                <form wire:submit.prevent="save" action="#" method="POST">
                    <div class="row align-items-start p-2">
                        <div class="col-6 p-2">
                            <label for="inputNombre" class="form-label">Nombre <span class="text-danger"> *</span></label>
                            <input wire:model="user.first_name" type="text" class="form-control" placeholder="Ej: John" id="inputNombre">
                            @if ($errors->has('user.first_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.first_name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6 p-2">
                            <label for="inputApellido" class="form-label">Apellido <span class="text-danger"> *</span></label>
                            <input wire:model="user.last_name" type="text" class="form-control" placeholder="Ej: Doe" id="inputApellido">
                            @if ($errors->has('user.last_name'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.last_name') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6 p-2">
                            <label for="inputEmail" class="form-label">Email <span class="text-danger"> *</span></label>
                            <input wire:model="user.email" type="text" class="form-control" placeholder="Ej: johndoe@test.com" id="inputEmail">
                            @if ($errors->has('user.email'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.email') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6 p-2">
                            <label for="inputCelular" class="form-label">Celular</label>
                            <input wire:model="user.phone" type="text" class="form-control" placeholder="Ej: 311999999" id="inputCelular">
                            @if ($errors->has('user.phone'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.phone') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-12 p-2">
                            <label for="inputDireccion" class="form-label">Direccion <span class="text-danger"> *</span></label>
                            <input wire:model="user.address" type="text" class="form-control" placeholder="Direccion completa que incluya nombre edificio o conjunto" id="inputDireccion" >
                            @if ($errors->has('user.address'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.address') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6 p-2">
                            <label for="inputBarrio" class="form-label">Barrio </label>
                            <input wire:model="user.neighborhood" type="text" class="form-control" placeholder="Ej: Castilla" id="inputBarrio">
                            @if ($errors->has('user.neighborhood'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.neighborhood') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6 p-2">
                            <label for="inputLocalidad" class="form-label">Localidad</label>
                            <input wire:model="user.location" type="text" class="form-control" placeholder="Ej: Kenedy" id="inputLocalidad">
                            @if ($errors->has('user.location'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.location') }}
                                </div>
                            @endif
                        </div>
                        <div class="col-6 p-2">
                            <label for="inputTipo" class="form-label">Rol <span class="text-danger"> *</span></label>
                            <select wire:model="user.role" class="form-select" id="inputTipo">
                                <option value="admin">Admin</option>
                                <option value="client">Cliente</option>
                                <option value="domiciliary">Domiciliario</option>
                                </select>
                                
                        </div>
                        <div class="col-6 p-2">
                            <label for="inputIdentificacion" class="form-label">NIT / CC </label>
                            <input wire:model="user.identificacion" type="text" class="form-control" placeholder="Ej: 123456789-0" id="inputIdentificacion">
                            @if ($errors->has('user.identificacion'))
                                <div class="invalid-feedback">
                                    {{ $errors->first('user.identificacion') }}
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="d-flex justify-content-end py-4">
                        <button type="submit" class="btn btn-secondary">Guardar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col-12 col-xl-4">
        <div class="row">
            <div class="col-12 mb-4">
                <div class="card shadow border-0 text-center p-0">
                    <div wire:ignore.self class="profile-cover rounded-top"
                        data-background="../assets/img/profile-cover.jpg"></div>
                    <div class="card-body pb-5">
                        <img src="../assets/img/team/profile-picture-1.jpg"
                            class="avatar-xl rounded-circle mx-auto mt-n7 mb-4" alt="Neil Portrait">
                        <h4 class="h3">
                            {{  $user->first_name ." ". $user->last_name}}
                        </h4>
                        <h5 class="fw-normal">{{  $user->role }}</h5>
                        <p class="text-gray mb-4">{{  $user->location.", ".$user->neighborhood.", ".$user->address }}</p>
                        <button wire:click="testListen()" class="btn btn-sm btn-gray-800 d-inline-flex align-items-center me-2">
                            Cambiar Contraseña
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-12">
                <div class="card card-body border-0 shadow mb-4">
                    <h2 class="h5 mb-4">Select profile photo</h2>
                    <div class="d-flex align-items-center">
                        <div class="me-3">
                            <!-- Avatar -->
                            <div class="user-avatar xl-avatar">
                                <img class="rounded avatar-xl" src="https://volt-pro-laravel-admin-dashboard.updivision.com/avatars/profile-picture-1.jpg" alt="change avatar" width="100" height="100">
                            </div>
                        </div>
                        <div class="file-field">
                            <div class="d-flex justify-content-xl-center ms-xl-3">
                                <div class="d-flex">
                                    <svg class="icon text-gray-500 me-2" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd"></path>
                                    </svg>
                                    <input wire:model="upload" type="file" accept="image/*">
                                    <div class="d-md-block text-left">
                                        <div class="fw-normal text-dark mb-1">Choose Image</div>
                                        <div class="text-gray small">JPG, GIF or PNG. Max size of 2MB</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Add-->
    <div wire:ignore.self class="modal fade" id="changePass" tabindex="-1" aria-labelledby="modal-default" style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="h6 modal-title">Cambiar Contraseña</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @livewire('change-pass')
                </div>
            </div>
        </div>
    </div>
</div>