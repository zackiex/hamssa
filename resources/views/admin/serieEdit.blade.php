@extends('layouts.master')
@section('title','Edit Séries')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Edit séries</h1>
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
    <!-- Form Validation Content -->
    <div class="row">
        <div class="col-sm-12 col-md-10">
            <!-- Form Validation Block -->
            <div class="block">
                <!-- Form Validation Title -->
                <div class="block-title">
                    <h2> Mettez à jour vos séries </h2>
                </div>
                <!-- END Form Validation Title -->
                <!-- Form Validation Form -->
                <form id="form-validation" action="{{route('serie.update',$data->id)}}" method="POST"
                      class="form-horizontal form-bordered" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-chosen">Catégorie de la série<span
                                class="text-danger">*</span></label>
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
                        @error('id_category')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">عنوان السلسلة<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input name="name_ar" type="text"
                                   placeholder="...يجب إدخال عنوان هنا"
                                   value="{{$data->name_ar}}"
                                   class=" form-control @error('name_ar') is-invalid @enderror">
                            @error('name_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username">Titre de la série<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input value="{{$data->name_fr}}" name="name_fr" type="text"
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
                            <input value="{{$data->name_en}}" name="name_en" type="text"
                                   placeholder="You must enter a title here..."
                                   class=" form-control @error('name_en') is-invalid @enderror">
                            @error('name_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-input"> Image Série <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <img src="{{asset('images/serie/'.$data->img_serie)}}" width="70" class="my-2">
                            <input type="file" name="img_serie">
                            @error('img_serie')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary"> Enregistrer</button>
                            <a href="{{route('slider.index')}}" class="btn btn-effect-ripple btn-danger"> Annuler</a>
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

