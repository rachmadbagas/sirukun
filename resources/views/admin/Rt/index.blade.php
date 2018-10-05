@extends('admin.template')
@section('content')
<div class="content-wrapper">
        <div class="row">
           
          <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                
              <div class="card-body">
                    <a href="{{ route('rt.create') }}" class="btn btn-info btn-sm mb-3"> Tambah </a>         
                <h4 class="card-title">{{ $page_name }}</h4>
                <div class="table-responsive">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Deskripsi</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($data as $item)
                            <tr>
                                <td>{{ $item->id }}</td>
                                <td>{{ $item->rt_name }}</td>
                                <td>{{ $item->rt_desc }}</td>
                            </tr>      
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection
@push('script')
    
@endpush