@extends('Admins.layout.main')
@section('content')
<div>
    <div>

        <div class="box-body container">
            <div class=" table-responsive">
                <form action="" method="post">
                    <div class="input-group mb-3" style="display: flex">
                        <input type="text" class="form-control" placeholder="Username" style="width:300px; margin-right:20px"
                            aria-label="Username" aria-describedby="basic-addon1">
                        <button style="Submit">Tìm kiếm</button>
                    </div>
                </form>
                <table id="example2" class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>ID</th>
                            <th>CATEGORY ID</th>
                            <th>BRAND ID</th>
                            <th>NAME</th>
                            <th>SLUG</th>
                            <th>PRICE</th>
                            <th>SUMMARY</th>
                        </tr>

                    </thead>
                    <tbody>
                        @foreach ($data as $key => $item)
                            <tr>
                                <td>{{ $key + 1 }}</td>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->category_id }}</td>
                                <td>{{ $item->brand_id }}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->slug }}</td>
                                <td>{{ $item->price }}</td>                  
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
</div>
@endsection