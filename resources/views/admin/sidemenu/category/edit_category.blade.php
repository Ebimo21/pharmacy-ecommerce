
@extends('admin.layouts.admin_master_home')

@section('content')

<div class="container-fluids">
    
    <div class="layout-specing row">
 
              
        <div class="col-12 col-md-8 mt-4">
            <div class="card component-wrapper border-0 rounded shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0"> Update Popular Name </h5>
                </div>

                <div class="p-4">
                    <form action="{{ url('category/update/'.$categories->id) }}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Category Name <span class="text-danger">*</span></label>
                                    <input name="category_name" id="name" type="text" class="form-control"  value="{{ $categories->category_name }}">
                                </div>
                            </div><!--end col-->
                            

                            @error('category_name')
                            <span class="text-danger"> {{ $message }} </span>

                            @enderror
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                <label class="form-label">Category Icon <span class="text-danger">*</span></label>
                                <input name="category_icon" id="name" type="text" class="form-control"  value="{{ $categories->category_icon }}">
                            </div>
                            </div><!--end col-->
                            

                            @error('category_icone')
                            <span> {{ $message }} </span>

                            @enderror
                        </div>
                            
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Update Brand">
                            </div><!--end col-->
                        </div><!--end row-->
                    </form><!--end form-->
                </div>
            </div>
        </div><!--end col-->
        </div>
    </div>
</div>


@endsection