@extends('admin.layouts.templates.templates')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">DataTable with default features</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        {{-- <th>Link</th> --}}
                                        <th>Ngày tạo</th>
                                        {{-- <th>Thao tác</th> --}}
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <td>{{ $user->name }}</td>
                                            <td>{{ $user->email }}</td>
                                           
                                            {{-- <td>{{ $user->anh }}</td> <!-- Hiển thị tên ảnh --> --}}
                                           
                                            <td>{{ $user->created_at->format('d/m/Y') }}</td>
                                            
                                            <!-- Hiển thị ngày tạo với định dạng dd/mm/yyyy -->
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Email</th>
                                        {{-- <th>Link</th> --}}
                                        <th>Ngày tạo</th>
                                        {{-- <th>Thao tác</th> --}}
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
