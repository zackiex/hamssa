@extends('layouts.master')
@section('title','Mettre à jour Sous Categories')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Sous Categories</h1>
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
            <h2>Mettre à jour vos Sous Categorie</h2>
        </div>
        <form id="form-validation" action="{{route('sousCategories.update',$souscategories->id)}}"
              method="POST" class="form-horizontal form-bordered" enctype="multipart/form-data">
            @method('PATCH')
            @csrf

            <div class="alert alert-success col-md control-label center-block" role="alert"
                 style="-webkit-border-radius: 999px;border-left: 500px">
                <h4 class="alert-heading text-center"><br>
                    <Strong>Ces champs sont obligatoires à remplir</Strong>
                    <span class="text-danger"> *</span></h4>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="example-chosen">Catégorie<span
                        class="text-danger"> *</span></label>
                <div class="col-md-5">
                    <select id="example-chosen" name="name_categorie" class="select-chosen"
                            data-placeholder="Choisissez une catégorie.." style="width: 250px;" required>
                        @foreach ($categoriesAdmin as $categoriesAdmins)
                            <option
                                value={{$categoriesAdmins->id}}>
                                {{$categoriesAdmins->categorie}}</option>
                        @endforeach

                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Nom Sous Categorie Fr<span
                        class="text-danger"> *</span></label>
                <div class="col-md-6">
                    <input value="{{$souscategories->sous_categorie_fr}}" name="sous_categorie_fr" type="text"
                           placeholder="Vous devez saisir un nom de sous categorie ici.."
                           class=" form-control @error('sous_categorie_fr') is-invalid @enderror"
                           required>
                    @error('sous_categorie_fr')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Nom Sous Categorie EN<span
                        class="text-danger"> *</span></label>
                <div class="col-md-6">
                    <input name="sous_categorie_en" type="text"
                           placeholder="Vous devez saisir un nom de sous categorie ici.."
                           class=" form-control @error('sous_categorie_en') is-invalid @enderror"
                           value="{{$souscategories->sous_categorie_en}}" required>
                    @error('sous_categorie_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Nom Sous Categorie AR<span
                        class="text-danger"> *</span></label>
                <div class="col-md-6">
                    <input name="sous_categorie_ar" type="text"
                           placeholder="Vous devez saisir un nom de sous categorie ici.."
                           class=" form-control @error('sous_categorie_ar') is-invalid @enderror"
                           value="{{$souscategories->sous_categorie_ar}}" required>
                    @error('sous_categorie_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Réalisateur<span
                        class="text-danger">*</span></label>
                <div class="col-md-6">
                    <input value="{{$souscategories->director}}" name="director" type="text"
                           placeholder="Vous devez saisir un nom réalisateur ici.."
                           class=" form-control @error('director') is-invalid @enderror"
                           required>
                    @error('director')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Réalisateur AR<span
                        class="text-danger">*</span></label>
                <div class="col-md-6">
                    <input value="{{$souscategories->director_ar}}" name="director_ar" type="text"
                           placeholder="Vous devez saisir un nom réalisateur ici.."
                           class=" form-control @error('director_ar') is-invalid @enderror"
                           required>
                    @error('director_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Année de production<span
                        class="text-danger">*</span></label>
                <div class="col-md-6">
                    <input value="{{$souscategories->year}}" name="year" type="text"
                           placeholder="Vous devez saisir une année de production ici..(2020)"
                           class=" form-control @error('year') is-invalid @enderror"
                           required>
                    @error('year')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Lien YouTube<span
                        class="text-danger">*</span></label>
                <div class="col-md-6">
                    <input value="{{$souscategories->youtubelink}}" name="youtube_link" type="text"
                           placeholder="Vous devez saisir le lien de votre vidéo youtube.."
                           class=" form-control @error('youtube_link') is-invalid @enderror"
                           required>
                    @error('youtube_link')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="example-file-input">Image pour votre vedio <span
                        class="text-danger">*</span></label></label>
                <div class="col-md-9">
                    <input type="file" name="img_sous_category">
                    @error('img_sous_category')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="alert alert-warning col-md control-label center-block" role="alert"
                 style="-webkit-border-radius: 999px;border-left: 500px">
                <h4 class="alert-heading text-center"><br>
                    <Strong>Ces champs sont optinel à remplir</Strong>
                </h4>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Épisode</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->episode}}" name="episode" type="text"
                           placeholder="Vous devez saisir le numéro de épisode ici.."
                           class=" form-control @error('episode') is-invalid @enderror">
                    @error('episode')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Saison</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->season}}" name="season" type="text"
                           placeholder="Vous devez saisir le numéro de saison ici.."
                           class=" form-control @error('season') is-invalid @enderror">
                    @error('season')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Client</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->client}}" name="client" type="text"
                           placeholder="Vous devez saisir un nom du client ici.."
                           class=" form-control @error('client') is-invalid @enderror">
                    @error('client')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Client AR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->client_ar}}" name="client_ar" type="text"
                           placeholder="Vous devez saisir un nom du client ici.."
                           class=" form-control @error('client_ar') is-invalid @enderror">
                    @error('client_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Production</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->production}}" name="production" type="text"
                           placeholder="Vous devez saisir un nom de production ici.."
                           class=" form-control @error('production') is-invalid @enderror">
                    @error('production')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Production AR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->production_ar}}" name="production_ar" type="text"
                           placeholder="Vous devez saisir un nom de production ici.."
                           class=" form-control @error('production_ar') is-invalid @enderror">
                    @error('production_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Exécutif production</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->production_executif}}" name="production_executif" type="text"
                           placeholder="Vous devez saisir un titre pour exécutif production ici.."
                           class=" form-control @error('production_executif') is-invalid @enderror">
                    @error('production_executif')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Exécutif production AR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->production_executif_ar}}" name="production_executif_ar" type="text"
                           placeholder="Vous devez saisir un titre pour exécutif production ici.."
                           class=" form-control @error('production_executif_ar') is-invalid @enderror">
                    @error('production_executif_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Synopsis FR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->synopsis_fr}}" name="synopsis_fr" type="text"
                           placeholder="Vous devez saisir synopsis ici.."
                           class=" form-control @error('synopsis_fr') is-invalid @enderror">
                    @error('synopsis_fr')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Synopsis EN</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->synopsis_en}}" name="synopsis_en" type="text"
                           placeholder="Vous devez saisir synopsis ici.."
                           class=" form-control @error('synopsis_en') is-invalid @enderror">
                    @error('synopsis_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Synopsis AR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->synopsis_ar}}" name="synopsis_ar" type="text"
                           placeholder="Vous devez saisir synopsis ici.."
                           class=" form-control @error('synopsis_ar') is-invalid @enderror">
                    @error('synopsis_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Scénario FR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->scenario_fr}}" name="scenario_fr" type="text"
                           placeholder="Vous devez saisir votre Scénario ici.."
                           class=" form-control @error('scenario_fr') is-invalid @enderror">
                    @error('scenario_fr')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Scénario EN</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->scenario_en}}" name="scenario_en" type="text"
                           placeholder="Vous devez saisir votre Scénario ici.."
                           class=" form-control @error('scenario_en') is-invalid @enderror">
                    @error('scenario_en')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Scénario AR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->scenario_ar}}" name="scenario_ar" type="text"
                           placeholder="Vous devez saisir votre Scénario ici.."
                           class=" form-control @error('scenario_ar') is-invalid @enderror">
                    @error('scenario_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Agence FR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->agency_fr}}" name="agency_fr" type="text"
                           placeholder="Vous devez saisir le nom de l'agence ici.."
                           class=" form-control @error('agency_fr') is-invalid @enderror">
                    @error('agency_fr')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Agence AR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->agency_ar}}" name="agency_ar" type="text"
                           placeholder="Vous devez saisir le nom de l'agence ici.."
                           class=" form-control @error('agency_ar') is-invalid @enderror">
                    @error('agency_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Projet FR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->project_fr}}" name="project_fr" type="text"
                           placeholder="Vous devez saisir un titre de projet ici.."
                           class=" form-control @error('project_fr') is-invalid @enderror">
                    @error('project_fr')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>
            <div class="form-group">
                <label class="col-md-3 control-label" for="val-username">Projet AR</label>
                <div class="col-md-6">
                    <input value="{{$souscategories->project_ar}}" name="project_ar" type="text"
                           placeholder="Vous devez saisir un titre de projet ici.."
                           class=" form-control @error('project_ar') is-invalid @enderror">
                    @error('project_ar')
                    <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                </div>
            </div>

            <div class="form-group form-actions">
                <div class="col-md-8 col-md-offset-3">
                    <input type="reset" class="btn btn-sm btn-warning" id="back3" value="Remettre"
                           style="height:35px; font-size: 14px">
                    <button type="submit" class="btn btn-effect-ripple btn-primary">Enregistrer</button>
                    <a href="{{route('sousCategories.index')}}" class="btn btn-effect-ripple btn-danger">Annuler</a>
                </div>
            </div>
        </form>
    </div>
    </div>

@endsection
