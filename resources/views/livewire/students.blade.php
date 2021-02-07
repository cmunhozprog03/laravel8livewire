<div>
   

    @include('livewire.create')
    @include('livewire.update')
    
    <section>
        <style>
            nav svg{
                height: 20px;
            }
        </style>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    @if (session()->has('message'))
                        <div class="alert alert-success">{{session('message') }}</div>
                    @endif
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-8">
                                    <h3>All Students &nbsp;&nbsp;
                                        <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#addStudentModal">
                                            Add New Student
                                        </button>
                                    </h3>
                                </div>
                                <div class="col-4">
                                    <input type="text" class="form-control" placeholder="Search..." wire:model="searchTerm">
                                </div>
                            </div>
                            
                            
                        </div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th width="200">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($students as $student)
                                        <tr>
                                            <td>{{ $student->firstname }}</td>
                                            <td>{{ $student->lastname }}</td>
                                            <td>{{ $student->email }}</td>
                                            <td>{{ $student->phone }}</td>
                                            <td>
                                                <button class="btn btn-info btn-sm"
                                                  data-toggle="modal" data-target="#updateStudentModal"
                                                   wire:click.prevent="edit({{$student->id}})">Edit</button>
                                                <button class="btn btn-danger btn-sm"                                                  
                                                   wire:click.prevent="delete({{$student->id}})">Delete</button>
                                            </td>
                                        </tr>
                                        
                                    @endforeach
                                </tbody>
                            </table>
                            {{ $students->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
