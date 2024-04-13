@extends('Layouts.Admin.app')
@section('content')
    <div class="card">
        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif
        <div class="card-header">
            Guest Book <a href="{{ url('admin/form-tambah') }}" class="btn btn-success"> Add New Guest </a>
        </div>
        <div class="card-body">
            <table class="table" id="myTable">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Contact</th>
                        <th scope="col">Address</th>
                        <th scope="col">Email</th>
                        <th scope="col" style="width: 17%">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $key => $item)
                        <tr>
                            <th scope="row">{{ $key + 1 }}</th>
                            <td class="text-sm">{{ $item->nama }}</td>
                            <td class="text-sm">{{ $item->kontak }}</td>
                            <td class="text-sm">{{ $item->alamat }}</td>
                            <td class="text-sm">{{ $item->email_tamu }}</td>
                            <td>
                                <div class="row">
                                    <div class="col-4"><a href="{{ url('admin/form-edit', $item->id) }}" class="btn btn-warning"> Edit </a></div>
                                    <div class="col-4">
                                        <form action="{{ url('admin/hapus-data') }}" method="post" data-confirm-delete="true">
                                            @csrf
                                            <input type="hidden" name="id" value="{{ $item->id }}">
                                            <button type="submit" class="btn btn-danger" >Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection

@section('script')
    <script>
        let table = new DataTable('#myTable');
    </script>
@endsection
