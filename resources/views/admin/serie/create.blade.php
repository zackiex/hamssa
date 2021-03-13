@extends('layouts.master')
@section('title','Ajouté Categories')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1> Series </h1>
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
                    <h2> Créer une nouvel série </h2>
                </div>
                <form action="{{route('serie.store')}}" method="POST"
                      class="form-horizontal form-bordered" enctype="multipart/form-data"
                >
                    @method('POST')
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-chosen">Catégorie de la série<span
                                class="text-danger"> *</span></label>
                        <div class="col-md-6">
                            <select id="example-chosen" name="id_category" class="select-chosen"
                                    data-placeholder="Choisissez une catégorie.." style="width: 250px;">
                                <option></option>
                                <!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                @foreach ($categoriesAdmin as $categoriesAdmins)
                                    <option
                                        value="{{$categoriesAdmins->id}}">
                                        {{$categoriesAdmins->name_categorie_fr}}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                        @error('name_categorie')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Titre de la série <span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input name="name_fr" type="text"
                                   placeholder="Vous devez saisir un titre ici.."
                                   class=" form-control @error('name_fr') is-invalid @enderror">
                            @error('name_fr')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Series Title <span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input name="name_en" type="text"
                                   placeholder="You must enter a title here..."
                                   class=" form-control @error('name_en') is-invalid @enderror">
                            @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">عنوان السلسلة <span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input name="name_ar" type="text"
                                   placeholder="...يجب إدخال عنوان هنا"
                                   class=" form-control @error('name_ar') is-invalid @enderror">
                            @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-input">Fichier <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <input type="file" name="img_serie">
                            @error('img_serie')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>


                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Enregistrer</button>
                            <a href="{{route('serie.index')}}" class="btn btn-effect-ripple btn-danger">Annuler</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
