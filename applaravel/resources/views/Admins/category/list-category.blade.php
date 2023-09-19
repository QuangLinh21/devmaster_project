@extends('Admins.layout.main')
@section('content')
    <div>

        <div class="box-body container">
            <div class=" table-responsive">
                <form action="">
                    @csrf
                    <div class="input-group mb-3" style="display: flex">
                        <input type="text" class="form-control" name="search" placeholder="Username" value="{{old('search')}}" style="width:300px; margin-right:20px"
                            aria-label="Username" aria-describedby="basic-addon1">
                        <button style="Submit">Tìm kiếm</button>
                    </div>
                </form>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>NAME</th>
                            <th>SLUG</th>
                            <th>PARENT_ID</th>
                            <th>STATUS</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->parent_id }}</td>
                                <td>{{ $item->is_active }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="data_Tables_paginate paging_simple_numbers">
                    {{ $data->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </div>
@endsection
