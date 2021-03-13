@extends('layouts.master')

@section('content')
    <div id="page-content">
        <!-- Email Center Content -->
        <div class="block overflow-hidden col-sm-12 col-md-10">
            <!-- Message List -->
            <div id="message-list">
                <!-- Title -->
                <div class="block-title clearfix">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default"><i
                                class="fa fa-arrow-left"></i> Précédent</a>
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default">Suivant <i
                                class="fa fa-arrow-right"></i></a>
                    </div>
                    <div class="block-options pull-left">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-info" data-toggle="tooltip"
                           title="Archive Selected"><i class="fa fa-briefcase"></i></a>
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-warning" data-toggle="tooltip"
                           title="Star Selected"><i class="fa fa-star"></i></a>
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-danger" data-toggle="tooltip"
                           title="Delete Selected"><i class="fa fa-times"></i></a>
                    </div>
                </div>
                <!-- END Title -->

                <!-- Messages -->
                <div class="block-content-full">
                    <table class="table table-borderless table-striped table-vcenter remove-margin">
                        <tbody>
                        <!-- Use the first row as a prototype for your column widths -->
                        @foreach ($email as $emails)
                            <tr>
                                <td class="td-label td-label-muted text-center" style="width: 5%;">
                                    <label class="csscheckbox csscheckbox-primary"><input
                                            type="checkbox"><span></span></label>
                                </td>
                                <td class="text-center" style="width: 7%;">
                                    <img src="img/placeholders/avatars/avatar7.jpg" alt="avatar" class="img-circle">
                                </td>
                                <td>
                                    <h4>
                                        <a href="javascript:void(0)"
                                           class="text-dark"><strong>{{$emails->subject}}</strong></a>
                                    </h4>
                                    <span class="text-muted">{{$emails->name}}</span>
                                </td>
                                <td class="hidden-xs text-center" style="width: 30px;">
                                    <i class="fa fa-paperclip fa-2x text-muted"></i>
                                </td>
                                <td class="hidden-xs text-right text-muted" style="width: 120px;"><em>
                                        {{\Carbon\Carbon::parse($emails->created_at)->format('d/m/Y,H:i')}}</em></td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- END Messages -->
            </div>
            <!-- END Message List -->

            <!-- Message View -->
            <div id="message-view" class="block-section display-none">
                <!-- Title -->
                <div class="block-title clearfix">
                    <div class="block-options pull-right">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-warning" data-toggle="tooltip"
                           title="Star"><i class="fa fa-star"></i></a>
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-danger" data-toggle="tooltip"
                           title="Delete"><i class="fa fa-times"></i></a>
                    </div>
                    <div class="block-options pull-left">
                        <a href="javascript:void(0)" class="btn btn-effect-ripple btn-default" id="message-view-back"><i
                                class="fa fa-chevron-left"></i> Retour à la boîte de réception</a>
                    </div>
                </div>
                <!-- END Title -->

                <!-- Header -->
                <h3><strong>{{$emails->subject}} </strong> <small><em>
                            {{\Carbon\Carbon::parse($emails->created_at)->format('d/m/Y,H:i')}}</em></small></h3>
                <p><a href="javascript:void(0)"><strong>{{$emails->name}}</strong></a>
                    <strong>&lt;{{$emails->email}}&gt;</strong> to <a
                        href="javascript:void(0)"><strong>Admin</strong></a>
                    <strong>&lt;contact@hamssa.dz&gt;</strong></p>
                <!-- END Header -->

                <!-- Message Body -->
                <hr>
                <p>{{$emails->message}}</p>
                <hr>
                <!-- END Message Body -->
            </div>
            <!-- END Message View -->
        </div>
        <!-- END Email Center Content -->
    </div>
    <!-- END Page Content -->
@endsection

@section('scripts')
    <script src="{{asset('js/pages/appEmail.js')}}"></script>
    <script>$(function () {
            AppEmail.init();
        });</script>
@endsection
