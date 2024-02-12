@include('layouts.partials.agent.main')

<head>
    @include('layouts.partials.agent.title-meta', ['title' => 'Dashboard'])


    <link href="{{asset('admin/assets/libs/morris.js/morris.css')}}" rel="stylesheet" type="text/css" />

    @include('layouts.partials.agent.head-css')
</head>

<body>

    <!-- Begin page -->
    <div class="layout-wrapper">

        @include('layouts.partials.agent.menu')

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <div class="page-content">

            @include('layouts.partials.agent.topbar')

            <div class="px-3">

                <!-- Start Content-->
                <div class="container-fluid">

                   @include('layouts.partials.agent.page-title', ['subtitle' => 'Dashtrap', 'title' => 'Dashboard'])


                    <div class="row">
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Disponible</span>
                                        <h5 class="card-title mb-0">Statut</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h4 class="d-flex align-items-center mb-0">
                                                Votre Statut
                                            </h4>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">Depuis 5 min<i
                                                    class="mdi mdi-arrow-up text-success"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end"></span>
                                        <h5 class="card-title mb-0">solde</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                        
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-danger" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">Per Month</span>
                                        <h5 class="card-title mb-0">Expenses</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                $784.62
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">57% <i
                                                    class="mdi mdi-arrow-up text-success"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-warning" role="progressbar" style="width: 57%;">
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div>
                            <!--end card-->
                        </div> <!-- end col-->

                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">All Time</span>
                                        <h5 class="card-title mb-0">Daily Visits</h5>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h2 class="d-flex align-items-center mb-0">
                                                1,15,187
                                            </h2>
                                        </div>
                                        <div class="col-4 text-end">
                                            <span class="text-muted">17.8% <i
                                                    class="mdi mdi-arrow-down text-danger"></i></span>
                                        </div>
                                    </div>

                                    <div class="progress shadow-sm" style="height: 5px;">
                                        <div class="progress-bar bg-info" role="progressbar" style="width: 57%;"></div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <!-- end col-->
                    </div>
                    <!-- end row-->

                </div> <!-- container -->

            </div> <!-- content -->

            @include('layouts.partials.agent.footer')

        </div>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->

    </div>
    <!-- END wrapper -->

    @include('layouts.partials.agent.footer-scripts')

    <!-- Knob charts js -->
    <script src="{{asset('admin/assets/libs/jquery-knob/jquery.knob.min.js')}}"></script>

    <!-- Sparkline Js-->
    <script src="{{asset('admin/assets/libs/jquery-sparkline/jquery.sparkline.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/morris.js/morris.min.js')}}"></script>

    <script src="{{asset('admin/assets/libs/raphael/raphael.min.js')}}"></script>

    <!-- Dashboard init-->
    <script src="{{asset('admin/assets/js/pages/dashboard.js')}}"></script>

</body>

</html>
