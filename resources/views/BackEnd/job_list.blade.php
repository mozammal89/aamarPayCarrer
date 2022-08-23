@extends('BackEnd.layout')

@push('css')

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

@endpush()

@section('content')

<table id="example" class="table table-striped" style="width:100%">
    
    <thead>
        <tr>
            <th>ID</th>
            <th>Job Title</th>
            <th>Department</th>
            <th>Location</th>
            <th>Application Deadline</th>
            <th>Action</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody>
        @foreach($job_list as $all_jobs)
        <tr>
            <td>{{$loop->iteration}}</td>
            <td>{{$all_jobs->job_title}}</td>
            <td>{{$all_jobs->department}}</td>
            <td>{{$all_jobs->job_location}}</td>
            <td>{{$all_jobs->application_deadline}}</td>
            <td>
                <a href="{{route('admin.joblistDetails',$all_jobs->id)}}" class="btn btn-outline-primary">Details</a>

                <a href="{{route('admin.JobsGetEdit',$all_jobs->id)}}" class="btn btn-outline-secondary">Edit</a>

                <button type="button" class="btn btn-outline-danger" data-toggle="modal" data-target="#basicModalDelete_{{$all_jobs->id}}">Delete</button>
            </td>
            <td>
                <input data-id="{{$all_jobs->id}}" id="status_id_{{$all_jobs->id}}" class="toggle-class" onchange="fnstatuschange({{$all_jobs->id}});" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $all_jobs->status ? 'checked' : '' }}>
            </td>
            
        </tr>

    <!-- Delete Modal -->
    <div class="modal fade" id="basicModalDelete_{{$all_jobs->id}}" role="dialog" aria-hidden="true" aria-labelledby="exampleModalLabel">
        <div class="modal-dialog  modal-dialog-scrollable" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel"> Delete Confirmation </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="{{route('adminJobList.delete',$all_jobs->id)}}" method="post"> 
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

@push('js')

<script>
 
  function fnstatuschange(JobListId)
  {
    
     var status = $('#status_id_'+JobListId).prop('checked') == true ? 1 : 0; 
        var id = JobListId; 
        $.ajax({
            method: "GET",         
            url: "{{url('/changeJobListStatus')}}",
            dataType: "json",
            data: { status:status, id: id},
            success: function(data){


              console.log(data.success);
            }
        });
  }
</script>

@endpush()