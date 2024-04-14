<div class="card-body">
    <div class="form-group">
      <label for="name">Name</label>
      <input type="text" class="form-control" name="name" id="name" placeholder="Name">
    </div>
    <div class="form-group">
      <label for="username">Username</label>
      <input type="text" class="form-control" name="username" id="username" placeholder="Username">
    </div>

    <div class="form-group">
      <label for="email">Email</label>
      <input type="email" class="form-control" name="email" id="email" placeholder="Email">
    </div>

    <div class="form-group">
      <label for="password">Password</label>
      <input type="password" class="form-control" name="password" id="password" placeholder="Password">
    </div>



    <div class="form-group">
        <label>Role</label>
        <select class="form-control select2 select2-danger" name="role" data-dropdown-css-class="select2-danger" style="width: 100%;">
            <option selected="selected" disabled>Select</option>
            @foreach ($roles as $role)
                <option value="{{$role->id}}">{{ $role->name }}</option>
            @endforeach
        </select>
    </div>


    <div class="form-group">
      <label for="first_name">First Name</label>
      <input type="text" class="form-control" name="first_name" id="first_name" placeholder="First Name">
    </div>
    <div class="form-group">
      <label for="last_name">Last Name</label>
      <input type="text" class="form-control" name="last_name" id="last_name" placeholder="Last Name">
    </div>
    <div class="form-group">
      <label for="dni">DNI</label>
      <input type="text" class="form-control" name="dni" id="dni" placeholder="DNI">
    </div>
    <div class="form-group">
      <label for="avatar">Avatar</label>
      <div class="input-group">
        <div class="custom-file">
          <input type="file" class="custom-file-input" name="avatar" id="avatar">
          <label class="custom-file-label customFileLabelAvatar" for="avatar">Avatar</label>
        </div>
      </div>
    </div>
    <div class="form-group">
      <label for="address">address</label>
      <input type="text" class="form-control" name="address" id="address" placeholder="address">
    </div>
    <div class="form-group">
      <label for="mobile">mobile</label>
      <input type="text" class="form-control" name="mobile" id="mobile" placeholder="mobile">
    </div>
    <div class="form-group">
      <label for="date_of_birth">Date of birth</label>
      <input type="date" class="form-control" name="date_of_birth" id="date_of_birth" placeholder="date_of_birth">
    </div>



  </div>
  <!-- /.card-body -->

  <div class="card-footer">
    <button type="submit" class="btn btn-primary">Submit</button>
  </div>