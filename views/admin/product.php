<section class="content-header">
  <h1>
    <?php echo $title ?>
    <small>Version 2.0</small>
  </h1>
</section>
<!-- Main content -->
<section class="content">
  <div class="row">
    <div class="col-xs-12">
      <div class="box">
        <!-- /.box-header -->
        <div class="box-body">
          <div class="container" style="margin: 10px 0;">
            <span class="btn btn-primary glyphicon glyphicon-plus btn-sm"></span>
            <span class="btn btn-primary glyphicon glyphicon-trash btn-sm"></span>
            <span class="btn btn-primary glyphicon glyphicon-pencil btn-sm"></span>
          </div>
          <div class="container" id="addArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
              <legend>Thêm danh mục</legend>
              <i id="addError" style="color: red"></i>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" id="categoryName">
              </div>
              <div class="form-group">
                <label for="">Quốc gia</label>
                <input type="text" class="form-control" id="categoryCountry">
              </div>

              <span class="btn btn-success" id="add2Btn">Thêm</span>
              <span class="btn btn-default" id="cancelAddBtn">Hủy</span>
            </form>
          </div>
          <div class="container" id="editArea" style="width: 100%; display: none; padding-bottom: 10px;">
            <form action="" method="POST" role="form">
              <legend>Sửa danh mục</legend>
              <i id="addError" style="color: red"></i>
              <div class="form-group">
                <label for="">Tên danh mục</label>
                <input type="text" class="form-control" id="categoryName4Edit">
              </div>
              <div class="form-group">
                <label for="">Quốc gia</label>
                <input type="text" class="form-control" id="categoryCountry4Edit">
              </div>

              <span class="btn btn-success" id="edit2Btn">Xong</span>
              <span class="btn btn-default" id="cancelEditBtn">Hủy</span>
            </form>
          </div>
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr id="tbheader">
                <th><input type="checkbox" id="check-all-gd"></th>
                <th>STT</th>
                <th>Mã sp</th>
                <th>Tên sản phẩm</th>
                <th>Ảnh</th>
                <th>Giá</th>
                <th>Bảo hành</th>
                <th>Lượt mua</th>
                <th>Lượt xem</th>
                <th>Ngày nhập</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              <?php
              for ($i = 0; $i < count($data); $i++) { ?>
                <tr>
                  <td><input type="checkbox" class="cbsp" value="<?php echo $data[$i]['masp'] ?>"></td>
                  <td><?php echo $i + 1 ?></td>
                  <td><?php echo $data[$i]['masp'] ?></td>
                  <td><?php echo $data[$i]['tensp'] ?></td>
                  <td><img style="width: 50px" src="<?php echo $data[$i]['anhchinh'] ?>"></td>
                  <td><?php echo $data[$i]['gia'] ?></td>
                  <td><?php echo $data[$i]['baohanh'] ?> tháng</td>
                  <td><?php echo $data[$i]['luotmua'] ?></td>
                  <td><?php echo $data[$i]['luotxem'] ?></td>
                  <td><?php echo $data[$i]['ngay_nhap'] ?></td>
                  <td class="text-center">
                  <td class="text-center">
                    <span class="btn btn-primary editItemBtn" data-id='<?php echo $data[$i]['masp'] ?>'>Chỉnh sửa</span>
                    <span class="btn btn-danger delItemBtn" data-id='<?php echo $data[$i]['masp'] ?>'>Xóa</span>
                  </td>
                </tr>
              <?php }
              ?>
            </tbody>
          </table>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
  </div>
  <!-- /.row -->
</section>
<!-- /.content -->

<!-- jQuery 3 -->
<script src="views/admin/AdminLTE/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="views/admin/AdminLTE/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="views/admin/AdminLTE/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="views/admin/AdminLTE/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="views/admin/AdminLTE/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="views/admin/AdminLTE/bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="views/admin/AdminLTE/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="views/admin/AdminLTE/dist/js/demo.js"></script>
<!-- page script -->
<script>
  $('#sptab').addClass('active');
  $(document).ready(function() {
    $('#example1 tr').not($('#tbheader')).click(function(event) {
      if (event.target.type !== 'checkbox') {
        $(':checkbox', this).trigger('click');
      }
    })
    $('#example1').addClass('active');
    $('#check-all-gd').click(function() {
      $('input:checkbox').not(this).prop('checked', this.checked);
    });
  })
  $(function() {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging': true,
      'lengthChange': false,
      'searching': false,
      'ordering': true,
      'info': true,
      'autoWidth': false
    })
  })
</script>
<script>
  $('#dmsptab').addClass('active');
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>
<script>
  $('#addBtn').on('click',function(){
    $('#addArea').toggle(300);
  })
  $('#cancelAddBtn').on('click',function(){
    $('#addArea').toggle(300);
  })
  $('#add2Btn').on('click',function(){
    action('add',);
  })
  $('#edit2Btn').on('click',function(){
    var id = $(this).data('id');
    action('edit',id);
  })
  $('.delItemBtn').on('click',function(){
    var cf = confirm('Bạn chắc chứ?');
    if(cf){
      var id = $(this).data('id');
      action('del', id);  
    }
  })
  $('.editItemBtn').on('click',function(){
    $('#edit2Btn').attr('data-id',$(this).data('id'));
    $('#example1').toggle();
    $('#editArea').toggle(300);
    $('#categoryName4Edit').val($(this).closest('tr').children('td:nth-child(3)').text());
    $('#categoryCountry4Edit').val($(this).closest('tr').children('td:nth-child(4)').text());
  })
  $('#cancelEditBtn').on('click',function(){
    $('#example1').toggle();
    $('#editArea').toggle(300);
  })
  function action(name, id = null){
    var name4edit = $('#categoryName4Edit').val();
    var country4edit = $('#categoryCountry4Edit').val();
    var cname = ccountry = '';
    if(name == 'add'){
      cname = $('#categoryName').val();
      ccountry = $('#categoryCountry').val();
      if(cname == ''){
        alert('Bạn chưa điền tên danh mục!');
        return;
      }
    }
    $.ajax({
      url: 'category/action',
      type: 'GET',
      dataType: 'text',
      data: {name, id,cname, ccountry,name4edit,country4edit},
      success: function(result){
        if(result == 'OK'){
          alert("Successful!");
          location.reload();
        } else {
          $('#addError').html(result);
        }
      }
    })
  }
</script>