
@extends('admin.layouts.admin_master_home')

@section('content')

<div class="layout-specing row">


<div class="col-8 mt-4">
    <div class="card component-wrapper border-0 rounded shadow">
        <div class="p-4 border-bottom">
            <h5 class="mb-0"> Brands </h5>
        </div>

        <div class="p-4">
            <div class="table-responsive bg-white shadow rounded">
                <table class="table mb-0 table-center">
                    <thead>
                        <tr>
                        <th scope="col">#</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Brand Image</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($brands as $brand )
                            
                        <tr>
                            <th scope="row">{{ $brand->id }}</th>
                            <td>{{ $brand->brand_name }}</td>
                            <td>
                                <img src="{{ asset('admin/assets/images/uploads/'.$brand->brand_image) }}" width="40px" height="40px" />
                            </td>
                            <td>
                                <a href="{{ url('brand/edit/' .$brand->id) }}" class="btn btn-info">
                                    <i class="fa-pen-to-square fa-solid"></i>
                                </a>
                                {{-- <a href="{{ url('delete/popular/'.$items->id) }}" class="btn btn-danger">Danger</a> --}}
                                <a href="{{ url('brand/delete/brand/'.$brand->id) }}" class="btn btn-danger">
                                    <i class="fa-solid fa-trash-can"></i>
                                    </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div><!--end col-->

<div class="col-4 mt-4">
    <div class="card component-wrapper border-0 rounded shadow">
        <div class="p-4 border-bottom">
            <h5 class="mb-0"> Add Brands </h5>
        </div>

        <div class="p-4">
            <form action="{{ route('store.brand') }}" method="post" enctype="multipart/form-data" >
                @csrf
                <div class="row">
                    <div class="col-md-12">
                        <div class="mb-3">
                            <label class="form-label">Item Title <span class="text-danger">*</span></label>
                            <input name="brand_name" id="name" type="text" class="form-control" placeholder="First Name :">
                        </div>


                        <div class="mb-3">
                            <label class="form-label">Item Image <span class="text-danger">*</span></label>
                            <input name="brand_image" id="name" type="file" class="form-control" >
                        </div>
                    </div><!--end col-->
                    

                    @error('title')
                    <span> {{ $message }}

                    @enderror
                    
                <div class="row">
                    <div class="col-sm-12">
                        <input type="submit" id="submit" name="send" class="btn btn-primary" value="Add Item">
                    </div><!--end col-->
                </div><!--end row-->
            </form><!--end form-->
        </div>
    </div>
</div><!--end col-->

</div>
@endsection