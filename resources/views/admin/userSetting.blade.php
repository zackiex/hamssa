@extends('layouts.master')
@section('title','Paramètres des utilisateur')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1> Gestion des utilisateurs </h1>
                </div>
            </div>
        </div>
    </div>
    <!-- END Validation Header -->
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
    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10">
            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2> Ajouter un utilisateur </h2>
                </div>
                <form action="{{route('UserSetting.update', auth()->user()->id)}}" method="POST"
                      id="validation-wizard"
                      class="form-horizontal form-bordered" enctype="multipart/form-data">
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
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username"> Nom
                                d'utilisateur
                                <span class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input value="{{auth()->user()->name}}"
                                           type="text"
                                           id="example-validation-username"
                                           name="name" class="form-control"
                                           placeholder="Choisissez un nom d'utilisateur.."
                                           class=" form-control @error('name') is-invalid @enderror"
                                           required>
                                    @error('name')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
                                           value="{{auth()->user()->email}}"
                                           class="form-control @error('email') is-invalid @enderror"
                                           placeholder="Entrez votre adresse email.."
                                           required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-password">
                                Ancien mot de passe
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="example-validation-password"
                                           name="old_password" class="form-control"
                                           placeholder="Choisir un mot de passe.."
                                           class=" form-control @error('old_password') is-invalid @enderror"
                                           required>
                                    @error('old_password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-password">
                                Nouveau mot de passe
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="password" id="example-validation-password"
                                           name="new_password" class="form-control"
                                           placeholder="Choisir un mot de passe.."
                                           class=" form-control @error('new_password') is-invalid @enderror"
                                           required>
                                    @error('new_password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
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
                                           class=" form-control @error('confirm_password') is-invalid @enderror"
                                           placeholder="..et confirmez-le pour être sûr!" required>
                                    @error('confirm_password')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->

                    <!-- Form Buttons -->
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-4">
                            <input type="reset" class="btn btn-sm btn-warning" id="back3" value=" Remettre ">
                            <input type="submit" class="btn btn-sm btn-primary" id="next3" value=" Enregistrer ">
                            <a href="{{route('user.index')}}" type="submit" class="btn btn-sm btn-danger"
                               id="next3"> Annuler </a>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
