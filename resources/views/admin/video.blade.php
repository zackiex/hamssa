@extends('layouts.master')
@section('title','Vidéos')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Liste des vidéos</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <div class="breadcrumb breadcrumb-top">
                        <a href="{{route('video.create')}}" class="btn btn-primary">
                            <i class="gi gi-plus"></i> Ajouter une nouvelle vidéo
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- END Validation Header -->

    <div class="block">
        <!-- Form Validation Title -->
        <div class="block-title">
            <h2>Liste vidéos</h2>
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

        <div class="block full">
            <div class="table-responsive">
                <table id="example-datatable"
                       class="table table-striped table-bordered table-vcenter table-hover">
                    <thead>
                    <tr>
                        <th>Catégorie</th>
                        <th>Titre de la serie</th>
                        <th>Titre de la vidéo</th>
                        <th>Image</th>
                        <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($video as $videos)
                        <tr>
                            <td><strong>{{$videos->serie->category->name_categorie_fr}}</strong></td>
                            <td><strong>{{$videos->serie->name_fr}}</strong></td>
                            <td><strong>{{$videos->title_fr}}</strong></td>
                            <td><strong><img src="{{asset('images/video/'.$videos->img_video)}}" width="70"
                                             style="border-radius: 5px"></strong></td>
                            <td class="text-center">
                                <a href="{{ route('video.edit', $videos->id) }}" data-toggle="tooltip" title="Edit"
                                   class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <button data-toggle="modal" data-target="#confirm_modal_{{$videos->id}}"
                                        data-toggle="tooltip" title="Delete User"
                                        class="btn btn-effect-ripple btn-xs btn-danger"><i
                                        class="fa fa-times"></i></button>
                            </td>
                        </tr>
                        <!----------------Start confirm model----------------------->
                        <div class="modal" id="confirm_modal_{{$videos->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="confirm_modal_{{$videos->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2>Confirmation !</h2>
                                    </div>
                                    <div class="modal-body">
                                        <h4>Etes-vous sûr de supprimer cette élement?</h4>
                                        <div class="modal-footer">
                                            <form action="{{ route('video.destroy', $videos->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Supprimer
                                                </button>
                                            </form>
                                            <button type="button" class="btn btn-default"
                                                    data-dismiss="modal">Annuler
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!----------------End confirm model ----------------------->
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- END Datatables Block -->
@endsection
@section('scripts')
    <script>$(function () {
            UiTables.init();
        });</script>
@endsection
