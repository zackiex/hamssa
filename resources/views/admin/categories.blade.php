@extends('layouts.master')
@section('title','Categories')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1> Listes des categories </h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <div class="breadcrumb breadcrumb-top">
                        <a href="{{route('categories.create')}}" class="btn btn-primary">
                            <i class="gi gi-plus"></i> Ajouter une nouvelle catégorie
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
            <h2> Liste des catégories</h2>
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
                        <th>عنوان الفئة</th>
                        <th>Title of category</th>
                        <th>Titre de la catégorie</th>
                        <th>Date d'ajout</th>
                        <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach ($categoriesAdmin as $categoriesAdminall)
                        <tr>
                            <td>{{$categoriesAdminall->	name_categorie_ar}}</td>
                            <td><strong>{{$categoriesAdminall->	name_categorie_fr}}</strong></td>
                            <td><strong>{{$categoriesAdminall->	name_categorie_en}}</strong></td>
                            <td>{{\Carbon\Carbon::parse($categoriesAdminall->created_at)->format('d/m/Y,H:i')}} </td>
                            <td class="text-center">
                                <a href="{{ route('categories.edit', $categoriesAdminall->id) }}" data-toggle="tooltip"
                                   title="Edit"
                                   class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                                <button data-toggle="modal" data-target="#confirm_modal_{{$categoriesAdminall->id}}"
                                        data-toggle="tooltip" title="Delete User"
                                        class="btn btn-effect-ripple btn-xs btn-danger"><i
                                        class="fa fa-times"></i></button>
                            </td>
                        </tr>
                        <!----------------Start confirm model----------------------->
                        <div class="modal" id="confirm_modal_{{$categoriesAdminall->id}}" tabindex="-1" role="dialog"
                             aria-labelledby="confirm_modal_{{$categoriesAdminall->id}}" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2> Confirmation !</h2>
                                    </div>
                                    <div class="modal-body">
                                        <h4> Etes-vous sûr de supprimer cette élement ?</h4>
                                        <div class="modal-footer">
                                            <form action="{{ route('categories.destroy', $categoriesAdminall->id) }}"
                                                  method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">
                                                    Supprimer
                                                </button>
                                            </form>
                                            <button type="button" class="btn btn-default"
                                                    data-dismiss="modal"> Annuler
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
