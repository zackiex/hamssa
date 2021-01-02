@extends('layouts.master')
@section('title','Slider')
@section('content')
    <div class="content-header">
        <div class="row">
            <div class="col-sm-6">
                <div class="header-section">
                    <h1>Slider</h1>
                </div>
            </div>
            <div class="col-sm-6 hidden-xs">
                <div class="header-section">
                    <div class="breadcrumb breadcrumb-top">
                        <a href="{{route('slider.create')}}" class="btn btn-primary">
                            <i class="gi gi-plus"></i> New slider
                        </a>
                    </div>
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
    <div class="block full">
        <div class="table-responsive">
            <table id="example-datatable" class="table table-striped table-bordered table-vcenter table-hover">
                <thead>
                <tr>
                    <th>Titre</th>
                    <th>عنوان</th>
                    <th>Image slider</th>
                    <th>Date d'ajout</th>
                    <th class="text-center" style="width: 75px;"><i class="fa fa-flash"></i></th>
                </tr>
                </thead>
                <tbody>
                @foreach ($slider as $sliderall)
                    <tr>
                        <td><strong>{{$sliderall->title_fr}}</strong></td>
                        <td><strong>{{$sliderall->title_ar}}</strong></td>
                        <td><img src="{{asset('images/slider/'.$sliderall->img_slider)}}" width="70"
                                 style="border-radius: 5px"></td>
                        <td>{{\Carbon\Carbon::parse($sliderall->created_at)->format('d/m/Y,H:i')}} </td>
                        <td class="text-center">
                            <a href="{{ route('slider.edit', $sliderall->id) }}" data-toggle="tooltip" title="Edit User"
                               class="btn btn-effect-ripple btn-xs btn-success"><i class="fa fa-pencil"></i></a>
                            <button data-toggle="modal" data-target="#confirm_modal_{{$sliderall->id}}"
                                    data-toggle="tooltip" title="Delete User"
                                    class="btn btn-effect-ripple btn-xs btn-danger"><i class="fa fa-times"></i></button>
                        </td>
                    </tr>
                    <!----------------Start confirm model----------------------->
                    <div class="modal" id="confirm_modal_{{$sliderall->id}}" tabindex="-1" role="dialog"
                         aria-labelledby="confirm_modal_{{$sliderall->id}}" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h2>Confirmation !</h2>
                                </div>
                                <div class="modal-body">
                                    <h4>Etes-vous sûr de supprimer cette élement?</h4>
                                    <div class="modal-footer">
                                        <form action="{{ route('slider.destroy', $sliderall->id) }}" method="POST">
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
    <!-- END Datatables Block -->
@endsection
@section('scripts')
    <script>$(function () {
            UiTables.init();
        });</script>
@endsection
