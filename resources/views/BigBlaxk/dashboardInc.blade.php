
<!--Add Sub  Modal -->
<div id="subAddModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Sub Modal </h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('SaveSub') }}">
            
            <div class="form-group">
                <input class="form-control" type="text" name="SubNameI" placeholder="Sub Name" required>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="SubAddressI" placeholder="Sub Address" required>
            </div>
  
            <div class="form-group">
                <input class="form-control" type="text" name="SubPhoneI" placeholder="Sub Phone Number" required>
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

  <!-- End Add Sub Modal  -->




  <!--Add Category  Modal -->
<div id="catAddModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
  
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Category Modal </h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{ route('SaveCategory') }}" enctype="multipart/form-data">
            
            <div class="form-group">
                <input class="form-control" type="file" name="CatImgI" required>
            </div>

            <div class="form-group">
                <input class="form-control" type="text" name="CatNameI" placeholder="Category Name" required>
            </div>

            <div class="form-group">
                <textarea class="form-control" name="CatDescI" placeholder="Category Descreption" required></textarea>
                  
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

  <!-- End Add Sub Modal  -->


  
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