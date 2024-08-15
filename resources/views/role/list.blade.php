@extends('layouts.app')

@section('title', 'Role List');

@section('content')
<!-- DataTables CSS -->
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">
<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- DataTables JS -->
<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Role List</div>

                <div class="card-body">
                    <table class="table table-border py-2" id="tbl_role_list">
                        <thead>
                            <tr>
                                <th class="bg-primary text-white">Name</th>
                                <th class="bg-primary text-white">Date Created</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if(!empty($roles))
                                @foreach($roles as $role)
                                    <tr>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ date_format(date_create($role->created_at), 'F d, Y g:i a') }}</td>
                                    </tr>
                                @endforeach
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('custom/js/role/list.js') }}"></script>
@endsection
