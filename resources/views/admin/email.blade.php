@extends('layouts.master')

@section('content')
    <div id="page-content" class="inner-sidebar-left">
        <!-- Inner Sidebar -->
        <div id="page-content-sidebar">
            <!-- Compose Message (Modal markup is at the bottom of this page before including JS scripts) -->
            <div class="block-section">
                <a href="#modal-compose" class="btn btn-effect-ripple btn-block btn-success" data-toggle="modal"><i
                        class="fa fa-pencil"></i>Compose Message</a>
            </div>
            <!-- END Compose Message -->

            <!-- Collapsible Navigation -->
            <a href="javascript:void(0)" class="btn btn-block btn-effect-ripple btn-default visible-xs"
               data-toggle="collapse" data-target="#email-nav">Navigation</a>
            <div id="email-nav" class="collapse navbar-collapse remove-padding">
                <!-- Menu -->
                <div class="block-section">
                    <ul class="nav nav-pills nav-stacked">
                        <li class="active">
                            <a href="page_app_email.html">
                                <i class="fa fa-fw fa-inbox icon-push"></i> <strong>Inbox</strong>
                            </a>
                        </li>
                        <li>
                            <a href="javascript:void(0)">
                                <i class="fa fa-fw fa-send icon-push"></i> <strong>Sent</strong>
                            </a>
                        </li>
                    </ul>
                </div>
                <!-- END Menu -->
            </div>
        </div>

        <!-- Email Center Content -->
        <div class="block overflow-hidden">
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

                <!-- Quick Reply Form -->
                <form action="page_app_email.html" method="post" onsubmit="return false;">
                    <textarea id="message-quick-reply" name="message-quick-reply" rows="5" class="form-control push-bit"
                              placeholder="Votre message.."></textarea>
                    <button class="btn btn-effect-ripple btn-primary"><i class="fa fa-share"></i> Réponse</button>
                </form>
                <!-- END Quick Reply Form -->
            </div>
            <!-- END Message View -->
        </div>
        <!-- END Email Center Content -->
    </div>
    <!-- END Page Content -->



    <!-- Compose Modal -->
    <div id="modal-compose" class="modal fade" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h3 class="modal-title"><strong>Nouveau message</strong></h3>
                </div>
                <div class="modal-body">
                    <form action="page_app_email.html" method="post" class="form-horizontal form-bordered"
                          onsubmit="return false;">
                        <div class="form-group">
                            <div class="col-xs-12">
                                <select id="fcompose-users" name="fcompose-users" class="select-chosen"
                                        data-placeholder="À.." style="width: 250px;" multiple="">
                                    <option></option>
                                    <!-- Required for data-placeholder attribute to work with Chosen plugin -->
                                    <option value="john.doe">John Taylor</option>
                                    <option value="sara.castillo">Sara Castillo</option>
                                    <option value="rachel.fox">Rachel Fox</option>
                                    <option value="vincent.johnson">Vincent Johnson</option>
                                    <option value="russell.perkins">Russell Perkins</option>
                                    <option value="denise.hill">Denise Hill</option>
                                    <option value="helen.gomez">Helen Gomez</option>
                                    <option value="marie.herrera">Marie Herrera</option>
                                    <option value="charles.morris">Charles Morris</option>
                                    <option value="janice.contreras">Janice Contreras</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-xs-12">
                                <textarea id="fcompose-message" name="fcompose-message" rows="7" class="form-control"
                                          placeholder="Rédigez votre message.."></textarea>
                            </div>
                        </div>
                        <div class="form-group form-actions">
                            <div class="col-xs-12 text-right">
                                <button type="submit" class="btn btn-effect-ripple btn-primary">Envoyer</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- END Compose Modal -->

@endsection

@section('scripts')
    <script src="{{asset('js/pages/appEmail.js')}}"></script>
    <script>$(function () {
            AppEmail.init();
        });</script>
@endsection
