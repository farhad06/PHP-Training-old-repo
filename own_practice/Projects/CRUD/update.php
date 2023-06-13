<?php include ('header.php'); ?>
        <div id="main-contain" style="margin-top:3px;">
        <h2 style="text-align:center">Update Records</h2>
        <div class="col-md-6 offset-md-3" id="addForm">
                <form action="">
                    <div class="form-group row">
                            <label class="col-sm-2 col-form-label">ID:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sid">
                            </div>
                      </div>
                       <div class="form-group row">
                            <div class="col-sm-12"  >
                                <button class="btn btn-primary" name='show' id='btn'>SHOW</button>
                            </div>
                      </div>
                      <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Name:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sname">
                            </div>
                      </div>
                       <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Address:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="saddress">
                            </div>
                      </div>
                       <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Class:</label>
                            <div class="col-sm-10">
                                <select class="custom-select">
                                    <option value="" selected >Select Class</option>
                                    <option value="1">BCA</option>
                                    <option value="2">MCA</option>
                                    <option value="3">B.Tech</option>
                                </select>
                            </div>
                      </div>
                       <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Phone:</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" name="sphone">
                            </div>
                      </div>
                       <div class="form-group row">
                            <div class="col-sm-12"  >
                                <button class="btn btn-primary" name='add' id='btn'>UPDATE</button>
                            </div>
                      </div>
                </form>

          </div>
            
        </div>
</div>
</body>
</html>