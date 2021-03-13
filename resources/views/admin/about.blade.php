@extends('layouts.master')
@section('title','About')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1> À propos</h1>
                </div>
            </div>
        </div>
    </div>

    @if (session('success'))
        <div class="alert alert-success alert-dismissible " role="alert">
            <strong>{{ session('success') }}</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <!-- END Validation Header -->
    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10">
            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2> À propos Hamssa </h2>
                </div>
                <!-- END Form Validation Title -->
                <!-- Form Validation Form -->
                <form id="form-validation" action="{{route('about.update',1)}}" method="POST"
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
                                </ul>
                            </div>
                        </div>
                        <!-- END Step Info -->
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username"> Adresse
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="adresse" class="form-control"
                                           value="{{$data->adresse}}"
                                           placeholder="Saisir votre adresse..."
                                           class=" form-control @error('adresse') is-invalid @enderror"
                                           required>
                                    @error('adresse')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">العنوان
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="adresse_ar" class="form-control"
                                           value="{{$data->adresse_ar}}"
                                           placeholder="أدخل عنوانك ..."
                                           class=" form-control @error('adresse_ar') is-invalid @enderror"
                                           required>
                                    @error('adresse_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">Numéro de
                                téléphone(+213)
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="mobile" class="form-control"
                                           value="{{$data->telephone}}"
                                           placeholder="Entre votre numéro du téléphone..."
                                           class=" form-control @error('mobile') is-invalid @enderror"
                                           required>
                                    @error('mobile')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Numéro de téléphone(2) (+213)
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="mobile2" class="form-control"
                                           value="{{$data->telephone2}}"
                                           placeholder="Entre votre deuxième numéro du téléphone..."
                                           class=" form-control @error('mobile2') is-invalid @enderror"
                                           required>
                                    @error('mobile2')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Teléphone Fixe(+213)
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="telephonefixe" class="form-control"
                                           value="{{$data->telephonefixe}}"
                                           placeholder="Entre votre numéro du téléphone Fixe..."
                                           class=" form-control @error('telephonefixe') is-invalid @enderror"
                                           required>
                                    @error('telephonefixe')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Fax(+213)
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="fax" class="form-control"
                                           value="{{$data->fax}}"
                                           placeholder="Entre votre numéro du Fax..."
                                           class=" form-control @error('fax') is-invalid @enderror"
                                           required>
                                    @error('fax')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Coordonnées (GPS) latitude
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="gèolocalisation_lat" class="form-control"
                                           value="{{$data->gèolocalisation_lat}}"
                                           placeholder="48.862725"
                                           class=" form-control @error('gèolocalisation_lat') is-invalid @enderror"
                                           required>
                                    @error('gèolocalisation_lat')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Coordonnées (GPS) longitude
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="gèolocalisation_log" class="form-control"
                                           value="{{$data->gèolocalisation_log}}"
                                           placeholder="2.287592"
                                           class=" form-control @error('gèolocalisation_log') is-invalid @enderror"
                                           required>
                                    @error('gèolocalisation_log')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Temps du travail
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="tempstravail_fr" class="form-control"
                                           value="{{$data->tempstravail_fr}}"
                                           placeholder="Période de travail (Du 08:00 vers 17:00)"
                                           class=" form-control @error('tempstravail_fr') is-invalid @enderror"
                                           required>
                                    @error('tempstravail_fr')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Working time
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="tempstravail_en" class="form-control"
                                           value="{{$data->tempstravail_en}}"
                                           placeholder="Working period (From 8 a.m. to 5 p.m.)"
                                           class=" form-control @error('tempstravail_en') is-invalid @enderror"
                                           required>
                                    @error('tempstravail_en')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                وقت العمل
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="tempstravail_ar" class="form-control"
                                           value="{{$data->tempstravail_ar}}"
                                           placeholder="فترة العمل (من الساعة 8 صباحًا حتى الساعة 5 مساءً)"
                                           class=" form-control @error('tempstravail_ar') is-invalid @enderror"
                                           required>
                                    @error('tempstravail_ar')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Email contact
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="email" class="form-control"
                                           value="{{$data->email}}"
                                           placeholder="Entrez votre adresse Email"
                                           class=" form-control @error('email') is-invalid @enderror"
                                           required>
                                    @error('email')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Facebook Page
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="facebook" class="form-control"
                                           value="{{$data->facebook}}"
                                           placeholder="www.facebook.com"
                                           class=" form-control @error('facebook') is-invalid @enderror"
                                           required>
                                    @error('facebook')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Instagram Page
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="instagram" class="form-control"
                                           value="{{$data->instagram}}"
                                           placeholder="www.instagram.com"
                                           class=" form-control @error('instagram') is-invalid @enderror"
                                           required>
                                    @error('instagram')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                YouTube Chaîne
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="youtube" class="form-control"
                                           value="{{$data->youtube}}"
                                           placeholder="www.youtube.com"
                                           class=" form-control @error('youtube') is-invalid @enderror"
                                           required>
                                    @error('youtube')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-4 control-label" for="example-validation-username">
                                Twitter
                                <span
                                    class="text-danger">*</span></label>
                            <div class="col-md-6">
                                <div class="input-group">
                                    <input type="text"
                                           id="example-validation-username"
                                           name="twitter" class="form-control"
                                           value="{{$data->twitter}}"
                                           placeholder="www.twitter.com"
                                           class=" form-control @error('twitter') is-invalid @enderror"
                                    >
                                    @error('twitter')
                                    <div class="alert alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END First Step -->


                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary"> Enregistrer</button>
                            <a href="{{ url('/home') }}" class="btn btn-effect-ripple btn-danger"> Annuler</a>
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

