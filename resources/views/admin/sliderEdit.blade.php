@extends('layouts.master')
@section('title','Edit Slider')
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
                    <h2> Mettez à jour votre Slider </h2>
                </div>
                <!-- END Form Validation Title -->
                <!-- Form Validation Form -->
                <form id="form-validation" action="{{route('slider.update',$data->id)}}" method="POST"
                      class="form-horizontal form-bordered" enctype="multipart/form-data">
                    @method('PATCH')
                    @csrf
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username"> أعد تسمية عنوان شريط التمرير<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input value="{{$data->title_ar}}" name="title_ar" type="text"
                                   placeholder="يجب إدخال عنوان هنا ..."
                                   class=" form-control @error('title_ar') is-invalid @enderror">
                            @error('title_ar')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username"> Renommer le titre du Slider<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input value="{{$data->title_fr}}" name="title_fr" type="text"
                                   placeholder="Vous devez saisir un titre ici.."
                                   class=" form-control @error('title_fr') is-invalid @enderror">
                            @error('title_fr')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="val-username"> Rename the title of slider<span
                                class="text-danger">*</span></label>
                        <div class="col-md-6">
                            <input value="{{$data->title_en}}" name="title_en" type="text"
                                   placeholder="You must enter a title here ..."
                                   class=" form-control @error('title_en') is-invalid @enderror">
                            @error('title_en')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-3 control-label" for="example-file-input"> Image Slider <span
                                class="text-danger">*</span></label>
                        <div class="col-md-9">
                            <img src="{{asset('images/slider/'.$data->img_slider)}}" width="70" class="my-2">
                            <input type="file" name="img_slider">
                            @error('img_slider')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3">
                            <button type="submit" class="btn btn-effect-ripple btn-primary">Enregistrer</button>
                            <a href="{{route('slider.index')}}" class="btn btn-effect-ripple btn-danger">Annuler</a>
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

