@extends('layouts.adminmaster')

@section('content')

<div class="card">
    <div class="card-header">
        All Categories
    </div>
    <div class="card-body">
        <table id="dtHorizontalExample" class="table table-striped table-bordered table-sm" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="th-sm">Name</th>
                <th class="th-sm">Action</th>

            </tr>
            </thead>

            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td></td>

                </tr>
            @endforeach
            </tbody>
            <tfoot>
            <tr>
                <th>Name</th>
                <th>Action</th>

            </tr>
            </tfoot>
        </table>
    </div>
</div>
@endsection
