@extends('admin.layouts.templates.tnt2')

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
                                        <th>Ảnh</th>
                                        <th>Link</th>
                                        <th>Ngày tạo</th>
                                        <th>Thao tác</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($khoaHocs as $khoahoc1)
                                        @php
                                            $khoahoc = App\Models\KhoaHoc::where('id', $khoahoc1->khoa_hoc_id)->first();
                                            // dd($khoahoc);
                                        @endphp

                                        <tr>
                                            <td>{{ $khoahoc->ten }}</td>
                                            <td>
                                                <img src="{{ asset('storage/' . $khoahoc->anh) }}" alt="{{ $khoahoc->ten }}"
                                                    class="img-thumbnail" style="width: 100px; height: auto;">
                                            </td>
                                            {{-- <td>{{ $khoahoc->anh }}</td> <!-- Hiển thị tên ảnh --> --}}
                                            <td><a href="{{ route('khoa_hoc.tham_gia', $khoahoc->id) }}" target="_blank">Vào
                                                    học</a></td> <!-- Hiển thị đường dẫn -->
                                            <td>{{ $khoahoc->created_at->format('d/m/Y') }}</td>
                                            <td class="text-center">
                                                <!-- Nút Thêm -->
                                                <a href="{{ route('khoa_hoc.edit', $khoahoc->id) }}"
                                                    class="btn btn-warning btn-sm mb-2">
                                                    <i class="fas fa-edit"></i> Sửa
                                                </a>
                                                <br>
                                                <!-- Nút Xóa -->
                                                <form action="{{ route('khoa_hoc.destroy', $khoahoc->id) }}" method="POST"
                                                    style="display:inline-block;">
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm">
                                                        <i class="fas fa-trash-alt"></i> Xóa
                                                    </button>
                                                </form>
                                            </td>
                                            <!-- Hiển thị ngày tạo với định dạng dd/mm/yyyy -->
                                        </tr>
                                    @endforeach

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th>Tên</th>
                                        <th>Ảnh</th>
                                        <th>Link</th>
                                        <th>Ngày tạo</th>
                                        <th>Thao tác</th>
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