
@extends('admin.layouts.admin_master_home')

@section('content')

<div class="container-fluids">
    
    <div class="layout-specing row">

        

        
        
        <div class="col-12 col-md-8 mt-4">
            
            <div class="card component-wrapper border-0 rounded shadow">
                @if (session('success'))
                <div class="alerts alert-outline-primary alert-pills" role="alert">
                    <span class="badge rounded-md bg-danger"> New </span>
                    <span class="alert-content"> {{ session('success') }} </span>
                 </div>
                 
                    
                @endif
                <div class="p-4 border-bottom">
                    <h5 class="mb-0"> Popular  </h5>
                </div>

                <div class="p-4">
                    <div class="table-responsive bg-white shadow rounded">
                        <table class="table mb-0 table-center">
                            <thead>
                                <tr>
                                <th scope="col">#</th>
                                <th scope="col">title</th>
                                <th scope="col">image</th>
                                <th scope="col">create at</th>
                                <th scope="col">updated at</th>
                                <th scope="col">Action</th>
                                </tr>
                            </thead>

                            <tbody>
                                <?php
                                $sn=1; 
                                ?>
                                @foreach ($item as $items )
                                
                                
                                <tr>
                                    <th scope="row">{{ $sn++ }}</th>
                                    <td>{{ $items->title }}</td>
                                    <td>
                                    <img src="{{ asset('admin/assets/images/uploads/'.$items->image) }}" height="40px" width="70px" />   
                                    </td>
                                    <td>{{ $items->created_at->diffForHumans() }}</td>
                                    <td>
                                        @if($items->updated_at == Null)
                                        <span class="text-danger"><b>N/A<b></span>
                                        @else
                                        {{ $items->updated_at->diffForHumans() }}</td>
                                        @endif
                                    <td> 
                                        <a href="{{ url('popular/edit/'.$items->id) }}" class="btn btn-info">
                                            <i class="fa-solid fa-pen-to-square"></i>
                                        </a>
                                        <a href="{{ url('delete/popular/'.$items->id) }}" class="btn btn-danger">
                                            <i class="fa-solid fa-trash-can"></i>
                                        </a>
                                    </td>

                                </tr>
                                    
                                @endforeach
                                
                            
                            </tbody>
                        </table>

                        {{-- {{ $items-links() }} --}}
                    </div>
                </div>
            </div>
        </div>

        
        <div class="col-12 col-md-4 mt-4">
            <div class="card component-wrapper border-0 rounded shadow">
                <div class="p-4 border-bottom">
                    <h5 class="mb-0"> Add Popular </h5>
                </div>

                <div class="p-4">
                    <form action="{{ route('store.popular') }}" method="post" enctype="multipart/form-data" >
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mb-3">
                                    <label class="form-label">Item Title <span class="text-danger">*</span></label>
                                    <br />
                                    @error('title')
                            <span class="text-danger"> {{ $message }} </span>

                            @enderror
                                    <input name="title" id="name" type="text" class="form-control" placeholder="First Name :">
                                </div>

                                


                                <div class="mb-3">
                                    <label class="form-label">Item Image <span class="text-danger">*</span></label>
                                    <br />
                                    @error('image')
                            <span class="text-danger"> {{ $message }} </span>

                            @enderror
                                    <input name="image" id="name" type="file" class="form-control" >
                                </div>
                            </div><!--end col-->
                            

                            
                            
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
    </div>
</div>


@endsection