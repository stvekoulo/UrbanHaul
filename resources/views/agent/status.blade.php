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
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bootstrap Validation - Normal</h4>
                                <p class="sub-header">Provide valuable, actionable feedback to your users with HTML5 form validation–available in all our supported browsers.</p>

                                <form class="needs-validation" novalidate>
                                    <div class="mb-3">
                                        <label for="validationCustom01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationCustom01" placeholder="First name" value="Mark" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationCustom02" placeholder="Last name" value="Otto" required>
                                        <div class="valid-feedback">
                                            Looks good!
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustomUsername" class="form-label">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="inputGroupPrepend">@</span>
                                            <input type="text" class="form-control" id="validationCustomUsername" placeholder="Username" aria-describedby="inputGroupPrepend"
                                                required>
                                            <div class="invalid-feedback">
                                                Please choose a username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom03" class="form-label">City</label>
                                        <input type="text" class="form-control" id="validationCustom03" placeholder="City" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom04" class="form-label">State</label>
                                        <input type="text" class="form-control" id="validationCustom04" placeholder="State" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <label for="validationCustom05" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="validationCustom05" placeholder="Zip" required>
                                        <div class="invalid-feedback">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <div class="mb-3">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                                            <label class="form-check-label" for="invalidCheck">
                                                Agree to terms and conditions
                                            </label>
                                            <div class="invalid-feedback">
                                                You must agree before submitting.
                                            </div>
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->


                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Bootstrap Validation (Tooltips)</h4>
                                <p class="sub-header">If your form layout allows it, you can swap the <code>.{valid|invalid}-feedback</code>
                                    classes for <code>.{valid|invalid}-tooltip</code> classes to display validation feedback
                                    in a styled tooltip.</p>

                                <form class="needs-validation" novalidate>
                                    <div class="position-relative mb-3">
                                        <label for="validationTooltip01" class="form-label">First name</label>
                                        <input type="text" class="form-control" id="validationTooltip01" placeholder="First name" value="Mark" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                        <div class="invalid-tooltip">
                                            Please enter first name.
                                        </div>
                                    </div>
                                    <div class="position-relative mb-3">
                                        <label for="validationTooltip02" class="form-label">Last name</label>
                                        <input type="text" class="form-control" id="validationTooltip02" placeholder="Last name" value="Otto" required>
                                        <div class="valid-tooltip">
                                            Looks good!
                                        </div>
                                        <div class="invalid-tooltip">
                                            Please enter last name.
                                        </div>
                                    </div>
                                    <div class="position-relative mb-3">
                                        <label for="validationTooltipUsername" class="form-label">Username</label>
                                        <div class="input-group">
                                            <span class="input-group-text" id="validationTooltipUsernamePrepend">@</span>

                                            <input type="text" class="form-control" id="validationTooltipUsername" placeholder="Username" aria-describedby="validationTooltipUsernamePrepend"
                                                required>
                                            <div class="invalid-tooltip">
                                                Please choose a unique and valid username.
                                            </div>
                                        </div>
                                    </div>
                                    <div class="position-relative mb-3">
                                        <label for="validationTooltip03" class="form-label">City</label>
                                        <input type="text" class="form-control" id="validationTooltip03" placeholder="City" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid city.
                                        </div>
                                    </div>
                                    <div class="position-relative mb-3">
                                        <label for="validationTooltip04" class="form-label">State</label>
                                        <input type="text" class="form-control" id="validationTooltip04" placeholder="State" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid state.
                                        </div>
                                    </div>
                                    <div class="position-relative mb-3">
                                        <label for="validationTooltip05" class="form-label">Zip</label>
                                        <input type="text" class="form-control" id="validationTooltip05" placeholder="Zip" required>
                                        <div class="invalid-tooltip">
                                            Please provide a valid zip.
                                        </div>
                                    </div>
                                    <button class="btn btn-primary" type="submit">Submit form</button>
                                </form>

                            </div> <!-- end card-body-->
                        </div> <!-- end card-->
                    </div> <!-- end col-->
                </div>
                <!-- end row -->

            </div> <!-- container -->

        </div> <!-- content -->

        @include('layouts.partials.agent.footer')

    </div>
    <!-- End Page content -->


</div>
<!-- END wrapper -->

<!-- Vendor js -->
@include('layouts.partials.agent.footer-scripts')

<!-- Validation Demo js-->
<script src="{{asset('admin/assets/js/pages/form-validation.js')}}"></script>

</body>
</html>
