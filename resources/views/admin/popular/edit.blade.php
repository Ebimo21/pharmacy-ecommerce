
@extends('admin.layouts.admin_master_home')

@section('edit_content')

<div class="container-fluids">
    
    <div class="layout-specing row">

        

        
        
        

        
        <div class="col-12 col-md-8 mt-4">
            <div class="card component-wrapper border-0 rounded shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0"> Update Popular Name </h5>
                </div>

                <div class="p-4">
                    <form action="{{ url('popular/update/'.$item->id) }}" method="post" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Item Title <span class="text-danger">*</span></label>
                                    <input name="title" id="name" type="text" class="form-control" placeholder="First Name :" value="{{ $item->title }}">
                                </div>
                            </div><!--end col-->
                            

                            @error('title')
                            <span> {{ $message }}

                            @enderror
                            
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