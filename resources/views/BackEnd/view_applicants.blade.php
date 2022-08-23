@extends('BackEnd.layout')


@section('content')

<table id="example" class="table table-striped" style="width:100%">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Post</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Address</th>
            <th>CV</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($info as $all_info)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$all_info->jobPost->job_title}}</td>
            <td>{{$all_info->name}}</td>
            <td>{{$all_info->email}}</td>
            <td>{{$all_info->phone}}</td>
            <td>{{$all_info->address}}</td>
            <td>
                <a href="{{asset('FrontEnd/cv_uploads/' . $all_info->file)}}" target="_blank" class="btn btn-outline-primary">View</a>
            </td>
            <td>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#basicModalDelete_{{$all_info->id}}">Delete</button>
            </td>
            
        </tr>


  <!-- Delete Modal -->
    <div class="modal fade" id="basicModalDelete_{{$all_info->id}}" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('adminApplicant.delete',$all_info->id)}}" method="post"> 
                    @csrf
                    @method('DELETE')
                    <div class="modal-body">
                        <h4>Are you sure want to Delete  ?</h4>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </div>
                </form>
            </div>
        </div>
    </div>    
    <!-- Delete Modal End -->
  
    @endforeach
    </tbody>
</table>



@endsection