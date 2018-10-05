@extends('admin.template')
@section('content')
<div class="content-wrapper">
        <div class="row">
          <div class="col-md-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title">{{ $page_name }}</h4>
                <form action="{{ route('rt.store') }}" method="POST">
                    <div class="form-group">
                        <label for="desc_rt">Nama Rw</label>
                        <select name="rw_id" id="" class="form-control">
                          <option value="">Select Rw</option>
                          @foreach ($Rw as $item)
                            <option value="{{$item->id}}"> {{$item->rw_name}}</option>
                          @endforeach
                        </select>
                        @if ($errors->has('rt_desc'))
                          <span>{{$errors->get('rt_desc')[0]}}</span>
                        @endif
                    </div>
                  <div class="form-group">
                    <label for="nama_rt">Nama Rukun Tetangga</label>
                    <input type="text" class="form-control" id="nama_rt" name="rt_name" placeholder="Nama Rukun Tetangga">
                    @if ($errors->has('rt_name'))
                      <span>{{$errors->get('rt_name')[0]}}</span>
                    @endif
                  </div>
                  <div class="form-group">
                    <label for="desc_rt">Deskripsi</label>
                    <input type="text" class="form-control" id="desc_rt" name="rt_desc" placeholder="Deskripsi">
                    @if ($errors->has('rt_desc'))
                      <span>{{$errors->get('rt_desc')[0]}}</span>
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