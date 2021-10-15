@extends('layouts.app', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="card">
                    <div class="card-header card-header-text card-header-info">
                        <div class="card-text">
                            <h4 class="card-title">
                                <a href="#" data-toggle="modal" data-target="#loginModal"><span class="material-icons">
                                        note_add
                                    </span></a>
                            </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th class="text-center">#</th>
                                    <th>Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $count = 0;
                                @endphp
                                @foreach ($data as $datas)
                                    <tr>
                                        <td class="text-center">{{ $count += 1 }}</td>
                                        <td>{{ $datas->name }}</td>
                                        <td>{{ $datas->l_name }}</td>
                                        <td>{{ $datas->email }}</td>
                                        <td class="td-actions text-right">
                                            <button type="button" rel="tooltip" class="btn btn-info btn_view" data-toggle="modal"
                                                data-target="#ShowModal" data-name={{ $datas->name }}
                                                data-lname={{ $datas->l_name }} data-email={{ $datas->email }}>
                                                <span class="material-icons">
                                                    person_search
                                                </span>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-success btn_edit" data-toggle="modal"
                                                data-target="#editModal" data-id={{ $datas->id }} data-name={{ $datas->name }}
                                                data-lname={{ $datas->l_name }} data-email={{ $datas->email }}>
                                                <i class="material-icons">edit</i>
                                            </button>
                                            <button type="button" rel="tooltip" class="btn btn-danger btn_del"  data-toggle="modal"
                                            data-target="#delModal" data-del-id={{ $datas->id }} data-name={{ $datas->name }}>
                                                <i class="material-icons">close</i>
                                            </button>
                                        </td>
                                    </tr>

                                @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('modal.script')
    @include('modal.add_modal')
    @include('modal.show_modal')
    @include('modal.edit_modal')
    @include('modal.del_modal')

@endsection


@push('js')
    <script>
        $(document).ready(function() {
            // Javascript method's body can be found in assets/js/demos.js
            md.initDashboardPageCharts();
        });
    </script>
@endpush
