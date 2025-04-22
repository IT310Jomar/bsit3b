@extends('layouts.app', ['class' => 'g-sidenav-show bg-gray-100'])

@section('content')
    @include('layouts.navbars.auth.topnav', ['title' => 'Dashboard'])
    <div class="container-fluid py-4">
        <div class="row">
            <div>
                <div class="card">
                    <div class="card-body p-3">
                        <div class="row">
                            <div>
                                <table class="table align-items-ceter w-100 nowrap">
                                    <thead>
                                        <tr>
                                            <th>Username</th>
                                            <th>Email</th>
                                            <th>Location</th>
                                            <th>Type</th>
                                            <th>Job Grade</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tablebody">

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


