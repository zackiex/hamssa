@extends('layouts.master')
@section('title','Ajouté Categories')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Categories</h1>
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
                    <h2>Créer un nouveau Categorie</h2>
                </div>
                <form action="{{route('categories.store')}}" method="POST"
                      class="form-horizontal form-bordered">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">عنوان الفئة<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input value="{{old('name_categorie_ar')}}" name="name_categorie_ar" type="text"
                                   placeholder="Vous devez saisir un titre ici.."
                                   class=" form-control @error('name_categorie_ar') is-invalid @enderror">
                            @error('name_categorie_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Titre Categorie<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input value="{{old('name_categorie_fr')}}" name="name_categorie_fr" type="text"
                                   placeholder="Vous devez saisir un titre ici.."
                                   class=" form-control @error('name_categorie_fr') is-invalid @enderror">
                            @error('name_categorie_fr')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Titre Categorie EN<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input value="{{old('name_categorie_en')}}" name="name_categorie_en" type="text"
                                   placeholder="Vous devez saisir un titre ici.."
                                   class=" form-control @error('name_categorie_en') is-invalid @enderror">
                            @error('name_categorie_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Enregistrer</button>
                            <a href="{{route('categories.index')}}" class="btn btn-effect-ripple btn-danger">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
