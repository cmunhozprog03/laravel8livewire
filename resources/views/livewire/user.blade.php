<div>
    <style>
        nav svg{
            height: 20px;
        }
    </style>
  <div class="contanainer">
      <did class="row">
          <div class="col-md-12">
              <div class="card">
                  <div class="card-header">
                      <h3>All Users</h3>
                  </div>
                  <div class="body">
                      <table class="table table-striped">
                          <thead>
                              <tr>
                                  <th>ID</th>
                                  <th>Name</th>
                                  <th>Email</th>
                              </tr>
                          </thead>
                          <tbody>
                              @foreach ($users as $user)
                                <tr>
                                    <td>{{ $user->id }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    
                                </tr>                                  
                              @endforeach
                          </tbody>
                      </table>
                      {{ $users->links() }}
                  </div>
              </div>
          </div>
      </did>
  </div>
</div>
