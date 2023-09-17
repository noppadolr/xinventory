@extends('admin.body.main')
@section('title','All Supplier')
@section('main')
@push('style')
    <link href="{{ asset('admin/assets/libs/datatables.net-bs5/css/dataTables.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/css/responsive.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables.net-buttons-bs5/css/buttons.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('admin/assets/libs/datatables.net-select-bs5/css//select.bootstrap5.min.css') }}" rel="stylesheet" type="text/css" />
@endpush



<!-- Modal Add Supplier -->


<div class="content">

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Supplier</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">

                                    <form class="needs-validation was-validated" novalidate="" method="POST" action="">
                                        @csrf
                                        <div class="mb-3">
                                            <label for="validationCustom01" class="form-label">Name</label>
                                            <input type="text" name="name" class="form-control" id="validationCustom01"  value="" required="">
                                            <div class="invalid-feedback">
                                                Please Enter Supplier Name.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationCustom02" class="form-label">Phone</label>
                                            <input type="text"  name="phone " class="form-control" id="validationCustom02" value="" required="">
                                            <div class="invalid-feedback">
                                                Please Enter Supplier Phone number.
                                            </div>
                                        </div>

                                        <div class="mb-3">
                                            <label for="validationCustom03" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control" id="validationCustom03" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please Enter Supplier Email.
                                            </div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="validationCustom04" class="form-label">Address</label>
                                            <input type="text" name="address" class="form-control" id="validationCustom04" placeholder="" required="">
                                            <div class="invalid-feedback">
                                                Please provide a valid Address.
                                            </div>
                                        </div>

                                        <button class="btn btn-primary waves-effect waves-light mt-2" type="submit"><i class="mdi mdi-content-save"></i> Save</button>
                                    </form>

                                </div> <!-- end card-body-->
                            </div> <!-- end card-->
                        </div> <!-- end col-->
                 </div>
            </div>
            </div>
        </div>
    </div>
    <!-- End Modal Add Supplier -->

    <!-- Start Content-->
    <div class="container-fluid">
        <!-- start page title -->
        <div class="row">
            <div class="col-12">
                <div class="page-title-box">
                    <div class="page-title-right">
                        <ol class="breadcrumb m-0">
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Inventory</a></li>
                            <li class="breadcrumb-item"><a href="javascript: void(0);">Manage Supplier</a></li>
                            <li class="breadcrumb-item active">All Suppliers</li>
                        </ol>
                    </div>
                    <h4 class="page-title">Manage Suppliers</h4>
                    <a href="#exampleModal" data-bs-toggle="modal" class="btn  btn-primary mb-2"  > Add Supplier</a>
                </div>
            </div>
        </div>
        <!-- end page title -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                        <div class="card-header d-flex justify-content-between ">
                            <h4 class="card-title m-0">All Suppliers</h4>
                            <div>
                            </div>
                        </div>
                    <div class="card-body">
                        <table id="basic-datatable" class="table dt-responsive nowrap w-100">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Phone</th>
                                <th>Email</th>
                                <th>Address</th>
                                <th>Action</th>
                            </tr>
                            </thead>

                            <tbody>
                            @foreach($suppliers as $key => $item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->phone }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->address }}</td>
                                <td>
                                    <a href="javascript:void(0)"
                                       data-url="" class="btn btn-soft-warning edit-supplier" title="Edit Supplier Data">
                                        <i class="me-1 icon-md" data-feather="edit"></i>

                                    </a>
                                    <a href="javascript:void(0)"
                                       data-url="" class="btn btn-soft-danger delete-supplier"
                                       title="Delete Supplier">
                                        <i class="me-1 icon-md" data-feather="trash-2"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div> <!-- end card body-->
                </div> <!-- end card -->
            </div><!-- end col-->
        </div>
        <!-- end row-->
  </div> <!-- container -->

</div> <!-- content -->

    @push('scripts')
        <!-- third party js -->
        <script src="{{ asset('admin/assets/libs/datatables.net/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-bs5/js/dataTables.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-responsive/js/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-responsive-bs5/js/responsive.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/dataTables.buttons.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-buttons-bs5/js/buttons.bootstrap5.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.html5.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.flash.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-buttons/js/buttons.print.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-keytable/js/dataTables.keyTable.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/datatables.net-select/js/dataTables.select.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/pdfmake/build/pdfmake.min.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/pdfmake/build/vfs_fonts.js') }}"></script>
        <!-- third party js ends -->
        <!-- Datatables init -->
        <script src="{{ asset('admin/assets/js/pages/datatables.init.js') }}"></script>
        <!-- Plugin js-->
        <script src="{{ asset('admin/assets/libs/parsleyjs/parsley.min.js') }}"></script>

        <!-- Validation init js-->
        <script src="{{ asset('admin/assets/js/pages/form-validation.init.js') }}"></script>
        <script src="{{ asset('admin/assets/libs/sweetalert2/sweetalert2.all.min.js') }}"></script>

        <!-- Sweet alert init js-->
        <script src="{{ asset('admin/assets/js/pages/sweet-alerts.init.js') }}"></script>
    @endpush
@endsection
