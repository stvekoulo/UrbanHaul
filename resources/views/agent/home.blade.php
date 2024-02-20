@include('layouts.partials.agent.main')

<head>
    @include('layouts.partials.agent.title-meta', ['title' => 'Dashboard'])
    <meta name="csrf-token" content="{{ csrf_token() }}">

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


                    
                        <div class="col-md-6 col-xl-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="mb-4">
                                        <span class="badge badge-soft-primary float-end">{{ $statusText }}</span>
                                        <h3 class="card-title mb-0">Statut</h3>
                                    </div>
                                    <div class="row d-flex align-items-center mb-4">
                                        <div class="col-8">
                                            <h4 class="d-flex align-items-center mb-0">
                                                Votre Statut
                                            </h4>
                                        </div>
                                        <div class="col-4 text-end">
                                            @if ($user->status)
                                            <span class="text-muted">{{ $user->status->updated_at->diffForHumans() }}<i class="mdi mdi-arrow-up text-success"></i></span>
                                        @else
                                            <span class="text-muted">No status available</span>
                                        @endif
                                        </div>
                                    </div>
                                </div>
                                <!--end card body-->
                            </div><!-- end card-->
                        </div> <br><br>



                    <div>


<h1>Point de recette</h1><br>
<button type="submit">Calculer le point journalier</button><br><br>


<form action="{{ route('calculer-point-recette') }}" method="post">
    @csrf
    <label for="start_date">Date de début :</label>
    <input type="date" name="start_date" required><br><br>

    <label for="end_date">Date de fin :</label>
    <input type="date" name="end_date" required><br>

</form>
<table border="4">
    <thead>
        <tr>
            <th>Montant</th>
            <th>Service</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style="height: 100px; width: 200px;"></td>
            <td style="height: 100px; width: 200px;">Service non spécifié</td>
        </tr>
       
            </tr>
        </tr>
        <tr>
            <td style="height: 100px; width: 200px;"></td>
            <td style="height: 100px; width: 200px;"></td>
        </tr>
    </tbody>
</table>


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
