@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Documents list</div>

                <div class="card-body">

                    <a href="{{route('create')}}" class="btn btn-primary">Add new document</a>
                    <br /><br />

                    <table class="table">
                        <tr>
                            <th>Title</th>
                            <th>Download file</th>
                        </tr>
                        @foreach ($documents as $d)
                        <tr>
                            <td>{{ $d->title }}</td>                           
                            <td><a href="{{route('download',$d->file_text)}}">Click Here</a></td>
                        </tr>                        
                        @endforeach
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection