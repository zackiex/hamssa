@extends('layouts.master')
@section('title','Paramètres utilisateur')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Gestion des utilisateurs</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Validation Header -->
    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10">
            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2>Mise à jour utilisateur</h2>
                </div>
                <!-- END Form Validation Title -->
                @if (session('success'))
                    <div class="alert alert-success alert-dismissible " role="alert">
                        <strong>{{ session('success') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                @endif

                @if (session('error'))
                    <div class="alert alert-danger alert-dismissible " role="alert">
                        <strong>{{ session('error') }}</strong>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
            @endif

            <!-- Form Validation Form -->
                <form id="form-validation" action="{{route('user.update',$data->id)}}" method="POST"
                      class="form-horizontal form-bordered">
                @method('PATCH')
                @csrf

                <!-- First Step -->
                    <div id="validation-first" class="step">
                        <!-- Step Info -->
                        <div class="form-group">
                            <div class="col-xs-12">
                                <ul class="nav nav-pills nav-justified">
                                    <li class="active disabled"><a href="javascript:void(0)"
                                                                   class="text-muted">
                                            <i class="fa fa-user"></i> <strong>Compte</strong></a>
                                    </li>
                                    <li class="disabled"><a href="javascript:void(0)"><i
                                                class="fa fa-info-circle"></i> <strong>Info</strong></a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">Nom
                                d'utilisateur
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="name" class="form-control"
                                           value="{{$data->name}}"
                                           placeholder="Choisissez un nom d'utilisateur.."
                                           class=" form-control @error('name') is-invalid @enderror"
                                           required>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror

                                    <span class="input-group-addon"><i class="gi gi-user"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-email">Email
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="email" id="example-validation-email"
                                           name="email"
                                           value="{{$data->email}}"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Entrez votre adresse email.."
                                           required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="input-group-addon"><i
                                            class="gi gi-envelope"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-password">Mot de
                                passe
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="example-validation-password"
                                           name="password" class="form-control"
                                           placeholder="Choisir un mot de passe.."
                                           class=" form-control @error('password') is-invalid @enderror"
                                           required>
                                    @error('password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="input-group-addon"><i
                                            class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label"
                                   for="example-validation-confirm-password">Retapez le mot de passe <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="example-validation-confirm-password"
                                           name="confirm_password"
                                           class="form-control"
                                           placeholder="..et confirmez-le pour être sûr!" required>
                                    @error('confirm_password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                    <span class="input-group-addon"><i
                                            class="gi gi-asterisk"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->


                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Enregistrer</button>
                            <a href="{{route('user.index')}}" class="btn btn-effect-ripple btn-danger">Annuler</a>
                        </div>
                    </div>
                </form>
                <!-- END Form Validation Form -->
            </div>
            <!-- END Form Validation Block -->
        </div>
    </div>
    <!-- END Form Validation Content -->
@endsection

