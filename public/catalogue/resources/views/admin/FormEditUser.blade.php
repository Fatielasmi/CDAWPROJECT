 <!-- Edit Modal HTML -->
 <div id="editEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="../Useredit/{{$user[0]->id}}" method="POST">
                @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Edit User</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Name</label>
                            <input name='name' type="text" value='{{$user[0]->name}}' class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input name='email' type="text"value='{{$user[0]->email}}'  class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Role</label>
                            <input  name='role' type="text" value='{{$user[0]->role}}' class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Password</label>
                            <textarea name='password' value='{{$user[0]->password}}' class="form-control" required></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-info" value="Save">
                    </div>
                </form>
            </div>
        </div> 
    </div>