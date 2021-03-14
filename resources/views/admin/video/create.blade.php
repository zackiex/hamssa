@extends('layouts.master')
@section('title','Ajouté Vidéo')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Vidéos</h1>
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

    <div class="block">
        <!-- Form Validation Title -->
        <div class="block-title">
            <h2>Créer un nouveau vidéo</h2>
        </div>
        <div class="row">
            <div class="col-lg-6" style="margin-left: 25%;">
                <div class="alert alert-info text-center" role="alert">
                    <i class="fa fa-info-circle fa-lg mr-2"></i>
                    <strong>Ces champs sont obligatoires à remplir</strong>
                </div>
            </div>
        </div>

        <form action="{{route('video.store')}}" method="POST"
              class="form-horizontal form-bordered" enctype="multipart/form-data">
            @method('POST')
            @csrf
            <div class="form-row">
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">Séries<span
                            class="text-danger"> *</span></label>
                    <div class="col-md-9">
                        <select id="example-chosen" name="id_serie" class="select-chosen"
                                data-placeholder="Choisissez une serie.." style="width: 250px;">
                            <option></option><!-- Required for data-placeholder attribute to work with Chosen plugin -->
                            @foreach ($serie as $series)
                                <option
                                    value="{{$series->id}}">
                                    {{$series->name_fr}}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    @error('name_categorie')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">Titre de la
                        vidéo<span
                            class="text-danger"> *</span></label>
                    <div class="col-md-9">
                        <input name="title_fr" type="text"
                               placeholder="Vous devez saisir un titre de la vidéo ici.."
                               class=" form-control @error('title_fr') is-invalid @enderror"
                               required>
                        @error('title_fr')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">Video title
                        (English)<span
                            class="text-danger"> *</span></label>
                    <div class="col-md-9">
                        <input name="title_en" type="text"
                               placeholder="You must enter a video title here ..."
                               class=" form-control @error('title_en') is-invalid @enderror"
                               required>
                        @error('title_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">عنوان مقطع
                        الفيديو<span
                            class="text-danger"> *</span></label>
                    <div class="col-md-9">
                        <input name="title_ar" type="text"
                               placeholder="يجب إدخال عنوان الفيديو هنا ..."
                               class=" form-control @error('title_ar') is-invalid @enderror"
                               required>
                        @error('title_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">Réalisateur<span
                            class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input name="director" type="text"
                               placeholder="Vous devez saisir un nom réalisateur ici.."
                               class=" form-control @error('director') is-invalid @enderror"
                               required>
                        @error('director')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">مخرج<span
                            class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input name="director_ar" type="text"
                               placeholder="يجب إدخال اسم مخرج هنا ..."
                               class=" form-control @error('director_ar') is-invalid @enderror"
                               required>
                        @error('director_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">Année de
                        production<span
                            class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input name="year" type="text"
                               placeholder="2020"
                               class=" form-control @error('year') is-invalid @enderror"
                               required>
                        @error('year')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-md-3 control-label" for="val-username" style="text-align: center">Lien
                        YouTube<span
                            class="text-danger">*</span></label>
                    <div class="col-md-9">
                        <input value="https://www.youtube.com/embed/" name="youtube_link" type="text"
                               placeholder="Vous devez saisir le lien de votre vidéo youtube.."
                               class=" form-control @error('youtube_link') is-invalid @enderror"
                               required>
                        @error('youtube_link')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>


                <div class="form-group">
                    <label class="col-md-3 control-label center-block" for="example-file-input"
                           style="margin-left: 13%;">Image pour votre vidéo</label>
                    <div class="col-md-6">
                        <input type="file" name="img_video">
                        @error('img_video')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="col-md-3 control-label" for=""><span
                            class="text-danger"></span></label>
                    <div class="col-md-6">
                    </div>
                </div>

                <div class="col-lg-6" style="margin-left: 25%;">
                    <div class="alert alert-warning text-center" role="alert">
                        <i class="fa fa-info-circle fa-lg mr-2"></i>
                        <strong> Ces champs sont optinel à remplir</strong>
                    </div>
                </div>

                <div class="form-row">

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">Épisode</label>
                        <input name="episode" type="text"
                               placeholder="Vous devez saisir le numéro de épisode ici.."
                               class=" form-control @error('episode') is-invalid @enderror">
                        @error('episode')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">Saison</label>
                        <input name="season" type="text"
                               placeholder="Vous devez saisir le numéro de saison ici.."
                               class=" form-control @error('season') is-invalid @enderror">
                        @error('season')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">Client</label>
                        <input name="client" type="text"
                               placeholder="Vous devez saisir un nom du client ici.."
                               class=" form-control @error('client') is-invalid @enderror">
                        @error('client')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username" style="text-align: center">عميل</label>
                        <input name="client_ar" type="text"
                               placeholder="يجب إدخال اسم العميل هنا ..."
                               class=" form-control @error('client_ar') is-invalid @enderror">
                        @error('client_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">Production</label>
                        <input name="production" type="text"
                               placeholder="Vous devez saisir un nom de production ici.."
                               class=" form-control @error('production') is-invalid @enderror">
                        @error('production')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">الإنتاج</label>
                        <input name="production_ar" type="text"
                               placeholder="يجب إدخال اسم إنتاج هنا ..."
                               class=" form-control @error('production_ar') is-invalid @enderror">
                        @error('production_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username" style="text-align: center">Exécutive
                            Production</label>
                        <input name="production_executif" type="text"
                               placeholder="Vous devez saisir un titre pour exécutif production ici.."
                               class=" form-control @error('production_executif') is-invalid @enderror">
                        @error('production_executif')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username" style="text-align: center">الإنتاج<br>
                            التنفيذي</label>
                        <input name="production_executif_ar" type="text"
                               placeholder="يجب إدخال عنوان الإنتاج التنفيذي هنا ..."
                               class=" form-control @error('production_executif_ar') is-invalid @enderror">
                        @error('production_executif_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center"><br>Scénario</label>
                        <input name="scenario_fr" type="text"
                               placeholder="Vous devez saisir votre Scénario ici.."
                               class=" form-control @error('scenario_fr') is-invalid @enderror">
                        @error('scenario_fr')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username" style="text-align: center">Scenario
                            (English)</label>
                        <input name="scenario_en" type="text"
                               placeholder="You must enter your scenario here ..."
                               class=" form-control @error('scenario_en') is-invalid @enderror">
                        @error('scenario_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">سيناريو</label>
                        <input name="scenario_ar" type="text"
                               placeholder="يجب عليك إدخال السيناريو الخاص بك هنا ..."
                               class=" form-control @error('scenario_ar') is-invalid @enderror">
                        @error('scenario_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">Agence</label>
                        <input name="agency_fr" type="text"
                               placeholder="Vous devez saisir le nom de l'agence ici.."
                               class=" form-control @error('agency_fr') is-invalid @enderror">
                        @error('agency_fr')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">وكالة</label>
                        <input name="agency_ar" type="text"
                               placeholder="يجب ادخال اسم الوكالة هنا ..."
                               class=" form-control @error('agency_ar') is-invalid @enderror">
                        @error('agency_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">Projet</label>
                        <input name="project_fr" type="text"
                               placeholder="Vous devez saisir un titre de projet ici.."
                               class=" form-control @error('project_fr') is-invalid @enderror">
                        @error('project_fr')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">المشروع</label>
                        <input name="project_ar" type="text"
                               placeholder="يجب إدخال عنوان المشروع هنا ..."
                               class=" form-control @error('project_ar') is-invalid @enderror">
                        @error('project_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center">Synopsis</label>
                        <textarea name="synopsis_fr"
                                  placeholder="Vous devez saisir synopsis ici.."
                                  class=" form-control @error('synopsis_fr') is-invalid @enderror"
                                  rows="5" id="comment"></textarea>
                        @error('synopsis_fr')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username" style="text-align: center">Synopsis
                            (English)</label>
                        <textarea name="synopsis_en" type="text"
                                  placeholder="You must enter synopsis here ..."
                                  class=" form-control @error('synopsis_en') is-invalid @enderror" rows="5"
                                  id="comment"></textarea>
                        @error('synopsis_en')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label class="col-md-3 control-label" for="val-username"
                               style="text-align: center"><br>ملخص</label>
                        <textarea name="synopsis_ar" type="text"
                                  placeholder="يجب عليك إدخال الملخص هنا ..."
                                  class=" form-control @error('synopsis_ar') is-invalid @enderror" rows="5"
                                  id="comment"></textarea>
                        @error('synopsis_ar')
                        <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="form-group form-actions">
                        <div class="col-md-8 col-md-offset-3" style="margin-left: 18%">
                            <input type="reset" class="btn btn-sm btn-warning" id="back3" value="Remettre"
                                   style="width: 30%; height:100%; font-size: 22px;margin: 10px">
                            <button type="submit" class="btn btn-effect-ripple btn-primary"
                                    style="width: 30%; height:100%; font-size: 22px;margin: 10px"
                            >Enregistrer
                            </button>
                            <a href="{{route('video.index')}}"
                               class="btn btn-effect-ripple btn-danger"
                               style="width: 30%; height:100%; font-size: 22px;margin: 10px">Annuler</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
