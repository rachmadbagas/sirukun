@extends('admin.template')
@section('content')
<div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{ $page_name }}</h4>
                <form action="{{ route('rw.store') }}" method="POST">
                  <div class="form-group">
                    <label for="nama_rw">Nama Rukun Warga</label>
                    <input type="text" class="form-control" id="nama_rw" name="rw_name" placeholder="Nama Rukun warga">
                    @if ($errors->has('rw_name'))
                      <span>{{$errors->get('rw_name')[0]}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="desc_rw">Deskripsi</label>
                    <input type="text" class="form-control" id="desc_rw" name="rw_desc" placeholder="Deskripsi">
                    @if ($errors->has('rw_desc'))
                      <span>{{$errors->get('rw_desc')[0]}}</span>
                    @endif
                  </div>
                  {{ csrf_field() }}
                  <button type="submit" class="btn btn-primary mr-2">Submit</button>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
@endsection

@push('script')
    
@endpush