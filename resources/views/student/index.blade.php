@extends('student.layout')
@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header bg-primary  ">
                        <h2>Students Birthdays</h2>
                    </div>
                    <div class="card-body bg-secondary">
                        <a href="{{ url('/student/create') }}" class="btn btn-success " title="Add New Student">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New Student Birthday
                        </a>
                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Full Name</th>
                                        <th>Age</th>
                                        <th>Birthday</th>
                                        <th>Year&Section</th>
                                        <th>Course</th>
                                        <th>Actions</th> 
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($student as $item)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->age }}</td>
                                        <td>{{ $item->year }}</td>
                                        <td>{{ $item->section }}</td>
                                        <td>{{ $item->course }}</td> 
                                       
                                        <td><p><!--trip lang--></p>
                                            <hr>
                                            <a href="{{ url('/student/' . $item->id) }}" title="View Student"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i> View</button></a>
                                            <a href="{{ url('/student/' . $item->id . '/edit') }}" title="Edit Student"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                                            <form method="POST" action="{{ url('/student' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                                                {{ method_field('DELETE') }}
                                                {{ csrf_field() }}
                                                <button type="submit" class="btn btn-danger btn-sm" title="Delete Student" onclick="return confirm(&quot;Confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection