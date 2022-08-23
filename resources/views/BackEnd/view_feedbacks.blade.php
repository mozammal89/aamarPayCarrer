@extends('BackEnd.layout')


@section('content')

<table id="example" class="table table-striped" style="width:100%">
	
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($contact_us as $feedbacks)
        <tr>
        	<td>{{$loop->iteration}}</td>
            <td>{{$feedbacks->name}}</td>
            <td>{{$feedbacks->email}}</td>
            <td>
                <button type="button" class="btn btn-outline-primary" data-toggle="modal" data-target="#basicModalLong_{{$feedbacks->id}}">Details</button>
                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#basicModalDelete_{{$feedbacks->id}}">Delete</button>
            </td>
            
        </tr>
        

    <!-- Modal -->
    <div class="modal fade" id="basicModalLong_{{$feedbacks->id}}" role="dialog" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Feedback</h5>
                    <button type="button" class="close" data-dismiss="modal">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
					<div class="form-group-inner">
                        <div class="row">
                            <div class="col-lg-12 col-md-8 col-sm-8 col-xs-12">
                                <textarea class="form-control" rows="3" readonly="">{!! $feedbacks->message !!}</textarea>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <!-- <button type="button" class="btn btn-primary">Save changes</button> -->
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal End -->

    <!-- Delete Modal -->
    <div class="modal fade" id="basicModalDelete_{{$feedbacks->id}}" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('allFeedbacks.delete',$feedbacks->id)}}" method="post"> 
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