
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
                    <form action="{{ url('popular/update/'.$item->id) }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Item Title <span class="text-danger">*</span></label>
                                    <br />
                                    @error('title')
                            <span class="text-danger"> {{ $message }} </span>

                            @enderror
                                    <input name="title" id="name" type="text" class="form-control" placeholder="First Name :" value="{{ $item->title }}">
                                </div>
                            </div><!--end col-->

                            <input name="old_image"  type="hidden" class="form-control" placeholder="First Name :" value="{{ $item->image }}">

                            

                            @error('title')
                            <span> {{ $message }} </span>

                            @enderror
                        </div>


                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Item Title <span class="text-danger">*</span></label>
                                    <input name="image"  type="file" class="form-control"  />
                                </div>
                            </div><!--end col-->
                            

                            @error('title')
                            <span> {{ $message }} </span>

                            @enderror
                        </div>

                        <div>
                            <img src="{{ asset('admin/assets/images/uploads/'.$item->image) }}" />
                        </div>
                            
                        <div class="row">
                            <div class="col-sm-12">
                                <input type="submit" id="submit" name="send" class="btn btn-primary" value="Update Item">
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