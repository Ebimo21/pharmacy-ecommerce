@extends('admin.layouts.admin_master_home')

@section('content')

<div class="layout-specing row">


    <div class="col-8 mt-4">
        <div class="card component-wrapper border-0 rounded shadow">
            <div class="p-4 border-bottom">
                <h5 class="mb-0"> Categories </h5>
            </div>
    
            <div class="p-4">
                <div class="table-responsive bg-white shadow rounded">
                    <table class="table mb-0 table-center">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Icon</th>
                            <th scope="col">Category Name</th>
                            <th scope="col">Category Slug</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
    
                           


                            @foreach ($categories as $item )
                                
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <i class="{{ $item->category_icon }}" />
                                </td>
                                <td>
                                    {{ $item->category_name }}
                                </td>

                                
                                <td>
                                    {{ $item->category_slug }}
                                </td>
                                <td>
                                    <a href="{{ url('category/edit/' .$item->id) }}" class="btn btn-info">
                                        <i class="fa-pen-to-square fa-solid"></i>
                                    </a>
                                    {{-- <a href="{{ url('delete/popular/'.$items->id) }}" class="btn btn-danger">Danger</a> --}}
                                    <a href="{{ url('category/delete/category/'.$item->id) }}" class="btn btn-danger">
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
                <h5 class="mb-0"> Add Category </h5>
            </div>
    
            <div class="p-4">
                <form action="{{ route('store.category') }}" method="post"  >
                    @csrf
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-3">
                                <label class="form-label">Category Title <span class="text-danger">*</span></label>
                                <input name="category_name" type="text" class="form-control" placeholder="category Name">
                            </div>
                            @error('category_name')

                                <span class="text-danger">

                                {{ $message }}
                                    
                                @enderror
    
                            <div class="mb-3">
                                <label class="form-label">Category Icon <span class="text-danger">*</span></label>
                                <input name="category_icon" id="name" type="text" class="form-control" placeholder="fa-icon">
                            </div>

                            @error('category_icon')

                                <span class="text-danger">

                                {{ $message }}
                                    
                                @enderror

                            
                            
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