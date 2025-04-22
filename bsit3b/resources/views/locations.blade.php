 @extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100']) 

@section('content')
@include('modal.add-location-modal')
@include('modal.edit-location-modal')
@include('modal.view-modal')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div>
                                <button type="button" class="btn btn-success btn-lg openAddModal" data-mdb-ripple-init>Add Location</button>
                            </div>
                            <div>
                                <table class="locationTable align-items-ceter w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Locations</th>
                                            <th class='text-center'>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                       </div>

                    </div>
                </div>
            </div>
        </div>
        @include('layouts.footers.auth.footer')
    </div>
@endsection


