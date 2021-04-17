



<!-- Add Employee Modal -->
<div id="addEmpModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Add Employee Modal</h4>
      </div>
      <div class="modal-body">
        <form method="post" action="{{ route('SaveEmp',['SubId'=>$SubId]) }}">
            
            <div class="form-group">
                <input class="form-control" type="text" name="EmpNameI" placeholder="Sub Name" required>
            </div>

            <div class="form-group">
              <input class="form-control" type="text" name="EmpAddressI" placeholder="Sub Address" required>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="EmpPhoneI" placeholder="Sub Phone Number" required>
            </div>
  
            <div class="form-group">
                <input class="form-control" type="text" name="EmpUserI" placeholder="Sub Username " required>
            </div>

            <div class="form-group">
              <input class="form-control" type="password" name="EmpPassI" placeholder="Sub Password" required>
          </div>

          <div class="form-group">
            <select name="EmpTypeI" class='form-control'>
              <option value="1">Delevery</option>
              <option value="2">Orders Management</option>
              <option value="3">Content Management</option>
            </select>
          </div>
  
          
      </div>
      <div class="modal-footer">
          {{ csrf_field() }}
       <input type="submit" value="Save" class="btn btn-success">
      </form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

 <!-- End Add Employee Modal -->


 
  <!--Add Product  Modal -->
  <div id="prodAddModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Product Modal </h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('SaveProduct') }}" enctype="multipart/form-data">
            
            <div class="form-group">
                <input class="form-control" type="file" name="ProdImgI" required>
            </div>
  
            <div class="form-group">
                <input class="form-control" type="text" name="ProdNameI" placeholder="Product Name" required>
            </div>
  
            <div class="form-group">
                 <select name="ProdCatI" class='form-control'>
                   @foreach ($Categories as $Cat)
                    <option value="{{$Cat['id']}}">{{ $Cat['CategoryName'] }}</option>
                   @endforeach
                 </select>
            </div>
  
            <div class="form-group">
              <input type="text" name="ProdPriceI" class="form-control" placeholder="Category Price">
            </div>
  
            <div class="form-group">
                <textarea class="form-control" name="ProdDescI" placeholder="Category Descreption" required></textarea>
            </div>  
          
        </div>
        <div class="modal-footer">
            {{csrf_field()}}
            <input type="submit" value="Save" class="btn btn-success">
        </form>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
  
    </div>
  </div>
  
  <!-- End Add Product Modal  -->