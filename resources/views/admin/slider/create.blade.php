@extends('layouts.master')
@section('title','Ajouté Slider')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Slider</h1>
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
                    <h2>Créer un nouveau slider</h2>
                </div>
                <form  action="{{route('slider.store')}}" method="POST"
                      class="form-horizontal form-bordered" enctype="multipart/form-data">
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Titre AR<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input  value="{{old('title_ar')}}" name="title_ar" type="text" placeholder="Vous devez saisir un titre ici.."
                                    class=" form-control @error('title_ar') is-invalid @enderror">
                            @error('title_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Titre FR <span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input  value="{{old('title_fr')}}" name="title_fr" type="text" placeholder="Vous devez saisir un titre ici.."
                                    class=" form-control @error('title_fr') is-invalid @enderror">
                            @error('title_fr')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Titre EN <span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input  value="{{old('title_en')}}" name="title_en" type="text" placeholder="Vous devez saisir un titre ici.."
                                    class=" form-control @error('title_en') is-invalid @enderror">
                            @error('title_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-input">Fichier <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="file" name="img_slider">
                            @error('img_slider')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Enregistrer</button>
                            <a  href="{{route('slider.index')}}" class="btn btn-effect-ripple btn-danger">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
