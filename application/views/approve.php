<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <title>add</title>
  <meta name="description" content="Elmer is a Dashboard & Admin Site Responsive Template by hencework." />
  <meta name="keywords"
    content="admin, admin dashboard, admin template, cms, crm, Elmer Admin, Elmeradmin, premium admin templates, responsive admin, sass, panel, software, ui, visualization, web app, application" />
  <meta name="author" content="hencework" />
  <!-- Favicon -->
  <link rel="shortcut icon" href="favicon.ico">
  <link rel="icon" href="favicon.ico" type="image/x-icon">

  <!-- vector map CSS -->
  <link
    href="<?php echo base_url().'assets/vendors/bower_components/jasny-bootstrap/dist/css/jasny-bootstrap.min.css'?>"
    rel="stylesheet" type="text/css" />
  <!-- Custom CSS -->
  <link href="<?php echo base_url().'assets/dist/css/style.css'?>" rel="stylesheet" type="text/css">
</head>

<body>
  <!--Preloader-->
  <div class="preloader-it">
    <div class="la-anim-1"></div>
  </div>
  <!--/Preloader-->

  <div class="wrapper  pa-0 ">
    <header class="sp-header">

      <div class="form-group mb-0 pull-right">
        <span class="inline-block pr-10"></span>
        <a class="inline-block btn btn-primary  btn-rounded btn-outline" href="<?php echo base_url('/')?>">logOut</a>
      </div>
      <div class="clearfix"></div>
    </header>

    <!-- Main Content -->
    <div class="page-wrapper pa-50 ma-0 auth-page">
      <div class="container-fluid">
        <!-- Row -->
        <div class="row">
          <!-- <div class="container">
                  
									<div class="panel panel-default card-view">
										<div class="panel-heading">
											<div class="pull-info">
												<h6 class="panel-title txt-dark ">General Button</h6>
											</div>
											<div class="clearfix"></div>
										</div>
										<div  class="panel-wrapper collapse in">
											<div  class="panel-body">
												<p class="text-muted">Use a classes <code>btn btn-default</code> to quickly create a general btn.</p>
												<div class="button-list mt-25">
													<button class="btn btn-default">Default</button>
													<button class="btn  btn-info">Info</button>
													<button class="btn  btn-primary">Primary</button>
													<button class="btn  btn-success">Success</button>
													<button class="btn btn-danger">Danger</button>
													<button class="btn btn-warning">Warning</button>
												</div>
											</div>
										</div>
									</div>
								</div>
                    <div> -->

          <!-- /Row -->
          <!-- Row -->
          <div class="row">
            <div class="container">
              <div class="panel panel-info card-view">
                <div class="panel-heading ">
                  <div class="pull-left">
                    <h6 class="panel-title txt-dark ">การจิดการ ข้อมูลการมองเห็น สถานะอนุมัติสินเชื่อ</h6>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="panel-wrapper collapse in">
                  <div class="panel-body">
                    <div class="float-right"><a href="javascript:void(0);" class="btn  btn-success" data-toggle="modal"
                        data-target="#Modal_Add">เพื่ม <span class="fa fa-plus"></span></a>
                    </div>
                    <div class="table-wrap text-left">
                      <table id="show_data" class="table table-borderless mb-10">
                        <thead class="text-warning ">
                          <tr>
                            <th scope="col">
                              <h5 class="txt-info"></h5>
                            </th>
                            <th scope="col">
                              <h5 class="txt-info">สถานะอนุมัติสินเชื่อ</h5>
                            </th>
                            <th scope="col">
                              <h5 class="txt-info ">สายกิจการสาขา</h5>
                            </th>
                            <th scope="col">
                              <h5 class="txt-info">ส่วนกลาง</h5>
                            </th>
                          </tr>
                        </thead>
                        <tbody>

                        </tbody>
                      </table>

                    </div>
                  </div>
                </div>
           
              <div>
              <a ><div class="pull-left"><span class="right-nav-text">1. Forms</span></div><div class="pull-right"></div></a>
              <a href="javascript:void(0);" ><span class="fa fa-plus-square"></span></a>
              <div class="clearfix"></div>
               <li >
               <a> Basic Forms <i class="zmdi zmdi-edit mr-20"></i></a>
               </li>
               
              </div>
             <div id="show_status_list1"></div>
          
        
               

         
           
                <div class="container">
                  <button class="btn  btn-primary ">บันทึก</button>
                </div>
              </div>

            </div>
          </div>
          <!-- /Row -->
          <div id="_type_list"></div>
             
           
          <!-- MODAL ADD  -->
          <form>
            <div class="modal fade" id="Modal_Add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                  <div class="modal-header panel-heading">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่ม/แก้ใข สถานะอนุมัติสินเชื่อ</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body form-wrap">
         
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">สถานะอนุมัติสินเชื่อ</label>
                      <div class="col-md-10">
                        <input type="text" name="loan_stauts_name" id="loan_stauts_name" class="form-control"
                          placeholder="สถานะอนุมัติสินเชื่อ">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">code</label>
                      <div class="col-md-10">
                        <input type="text" name="loan_status_code" id="loan_status_code" class="form-control"
                          placeholder="code">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_approve_save" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!--END MODAL ADD-->
          <!-- MODAL EDIT -->
          <form>
            <div class="modal fade" id="Modal_Edit" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content ">
                  <div class="modal-header panel-heading">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่ม/แก้ใข สถานะอนุมัติสินเชื่อ</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>

                  <div class="modal-body form-wrap">
         
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">สถานะอนุมัติสินเชื่อ</label>
                      <div class="col-md-10">
                      <input type="hidden" name="loan_status_id_edit" id="loan_status_id_edit" class="form-control">
                        <input type="text" name="loan_stauts_name_edit" id="loan_stauts_name_edit" class="form-control"
                          placeholder="สถานะอนุมัติสินเชื่อ">
                      </div>
                    </div>
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">code</label>
                      <div class="col-md-10">
                        <input type="text" name="loan_status_code_edit" id="loan_status_code_edit" class="form-control"
                          placeholder="code">
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" type="submit" id="btn_update_status" class="btn btn-primary">Save</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!--END MODAL EDIT-->
          <!-- MODAL addType -->
          <form>
            <div class="modal fade" id="Modal_addType" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
              aria-hidden="true">
              <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">เพิ่ม/แก้ใช่ ประเภทผู้ขอสินเชื่อ</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <input type="hidden" value="" name="loan_status_id_add" id="loan_status_id_add">
                  <div class="modal-body">
                    <div class="form-group row">
                      <label class="col-md-2 col-form-label">ประเภทผู้ขอสินเชื่อ</label>
                      <div class="col-md-10">

                        <select id="loan_type_name_add" class="form-control " name="loan_type_name_add">
                          <option value="บุคคล">บุคคล</option>
                          <option value="ธุรกิจและภาครัฐ">ธุรกิจและภาครัฐ</option>
                          <option value="ฐานรากและสนับสนุนนโยบายรัฐ">ฐานรากและสนับสนุนนโยบายรัฐ</option>
                        </select>
                      </div>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="submit" id="btn_addType_save" class="btn btn-primary">บันทึก</button>
                  </div>
                </div>
              </div>
            </div>
          </form>
          <!--END MODAL EDIT-->
          <!--MODAL DELETE-->
         <form>
            <div class="modal fade" id="Modal_Delete" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                       <strong> you delete</strong>
                  </div>
                  <div class="modal-footer">
                    <input type="hidden" name="loan_status_id_delete" id="loan_status_id_delete" class="form-control">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                    <button type="button" type="submit" id="btn_delete" class="btn btn-primary">Yes</button>
                  </div>
                </div>
              </div>
            </div>
            </form>
        <!--END MODAL DELETE-->
        </div>

      </div>
      <!-- /Main Content -->

    </div>
    <!-- /#wrapper -->

    <!-- JavaScript -->

    <!-- jQuery -->
    <script src="<?php echo base_url().'assets/vendors/bower_components/jquery/dist/jquery.min.js'?>">
    </script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url().'assets/vendors/bower_components/bootstrap/dist/js/bootstrap.min.js'?>">
    </script>
    <script
      src="<?php echo base_url().'assets/vendors/bower_components/jasny-bootstrap/dist/js/jasny-bootstrap.min.js'?>">
    </script>

    <!-- Slimscroll JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/jquery.slimscroll.js'?>"></script>

    <!-- Init JavaScript -->
    <script src="<?php echo base_url().'assets/dist/js/init.js'?>"></script>
    <script>
      //Save product

      $(document).ready(function () {
        show_list();
      
        function show_list() {
          $.ajax({
            type: 'ajax',
            url: '<?php echo site_url('ControllerApprove/get_data')?>',
            async: true,
            dataType: 'json',
            success: function (data) {
              var html = '';
              var i;
              for (i = 0; i < data.length; i++) {
                var a = i + 1;
                html += '<tr>' +
                  '<td>' + a + "." + '</td>' +
                  '<td>'+ data[i].loan_stauts_name +'" "'+'<a href="javascript:void(0);"  data-loan_status_id="'+data[i].loan_status_id +'"class="item_addType"><span class="fa fa-plus-square"></span></a>' +
                  // '<div class="row">'+
                  // '<label class="col-md-12 col-form-label">1.1  สถานะอนุมัติสินเชื่อ</label>'+
                  // '<label class="col-md-12 col-form-label">1.2  สถานะอนุมัติสินเชื่อ</label>'+
                  // '<div>'+
                  // '<li>'+
                  // '<a href="form-element.html">Basic Forms</a>'+
                  // '</li>'+
                  // '<li>'+
                  // '<a href="form-element.html">Basic Forms</a>'+
                  // '</li>'+
                  // '<li>'+
                  // '<a href="form-element.html">Basic Forms</a>'+
                  // '</li>'+
                  '</td>' +
                  '<td>' + "" + '</td>' +
                  '<td>' + "" + '</td>' +
                  '<td style="text-align:right;">' +
                  '<a href="javascript:void(0);" class="btn btn-info btn-sm item_edit" data-loan_status_id="' + data[i].loan_status_id +'" data-loan_stauts_name="' +data[i].loan_stauts_name + '" data-loan_status_code="' + data[i].loan_status_code +'">Edit</a>' + ' ' +
                  '<a href="javascript:void(0);" class="btn btn-danger btn-sm item_delete" data-loan_status_id_delete="' +data[i].loan_status_id + '">Delete</a>' +
                  '</td>' +
                  '</tr>';
              }
              $('#show_data tbody').html(html);
            }

          });
        }
        // function show_status_list() {
        //   $.ajax({
        //     type: 'ajax',
        //     url: '<?php echo site_url('ControllerApprove/get_data')?>',
        //     async: true,
        //     dataType: 'json',
        //     success: function (data) {
        //       var html = '';
        //       var i;
        //       for (i = 0; i < data.length; i++) {
             
        //         html +=   '<div>'+
        //       '<a ><div class="pull-left"><span class="right-nav-text">'+ data[i].loan_stauts_name + '</span></div><div class="pull-right"></div></a>'+
        //       '<a href="javascript:void(0);" id="_type_list"><span class="fa fa-plus-square"></span></a>'+
        //       '<div class="clearfix"></div>'+
           
        //       '<div id="_type_list">'+
             
        //       '</div>';
        //       }
        //       $('#show_status_list1').html(html);
        //     }

        //   });
        // }
    
      $('#btn_approve_save').on('click', function () {
        var loan_stauts_name = $('#loan_stauts_name').val();
        var loan_status_code = $('#loan_status_code').val();

        $.ajax({
          type: "POST",
          url: "<?php echo site_url('ControllerApprove/save')?>",
          dataType: "JSON",
          data: {
            loan_stauts_name: loan_stauts_name,
            loan_status_code: loan_status_code
          },
          success: function (data) {
            $('[name="loan_stauts_name"]').val("");
            $('[name="loan_status_code"]').val("");
            $('[name="price"]').val("");
            $('#Modal_Add').modal('hide');
            show_list();
          }
        });
        return false;
      });
      $('#show_data').on('click', '.item_addType', function () {
        var loan_status_id = $(this).data('loan_status_id');
        $('#Modal_addType').modal('show');
        $('[name="loan_status_id_add"]').val(loan_status_id);
      });

      $('#btn_addType_save').on('click', function () {
        var created_by = $('#loan_status_id_add').val();
        var loan_type_name = $('#loan_type_name_add').val();
        alert(loan_type_name);
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('ControllerApprove/save_type')?>",
          dataType: "JSON",
          data: {created_by:created_by,loan_type_name:loan_type_name},
          success: function (data) {
            alert(data);
            $('[name="loan_status_id_add"]').val("");
            $('[name="loan_type_name_add"]').val("");
           
            show_list();
          }
        });
        return false;
      });

    });
      //get data 
      $('#show_data').on('click', '.item_edit', function () {
        var loan_stauts_name = $(this).data('loan_stauts_name');
        var loan_status_code = $(this).data('loan_status_code');
    var loan_status_id = $(this).data('loan_status_id'); 

        $('#Modal_Edit').modal('show');
        $('[name="loan_stauts_name_edit"]').val(loan_stauts_name);
        $('[name="loan_status_code_edit"]').val(loan_status_code);
        $('[name="loan_status_id_edit"]').val(loan_status_id);
      });
      //update 
      $('#btn_update_status').on('click', function () {
        var loan_stauts_name = $('#loan_stauts_name_edit').val();
        var loan_status_code = $('#loan_status_code_edit').val();
        var loan_status_id= $('#loan_status_id_edit').val();
        $.ajax({
          type: "POST",
          url: "<?php echo site_url('ControllerApprove/update_status')?>",
          dataType: "JSON",
          data: {loan_stauts_name: loan_stauts_name,loan_status_code: loan_status_code,loan_status_id: loan_status_id
          },
          success: function (data) {
            $('[name="loan_stauts_name_edit"]').val("");
            $('[name="loan_status_code_edit"]').val("");
            $('[name="loan_status_id_edit"]').val("");
            $('#Modal_Edit').modal('hide');
            show_list();
          }
        });
        return false;
      });
       //delete 
         //get data for delete record
         $('#show_data').on('click','.item_delete',function(){
            var loan_status_id_delete = $(this).data('loan_status_id_delete');
             
            $('#Modal_Delete').modal('show');
            $('[name="loan_status_id_delete"]').val(loan_status_id_delete);
        });
       $('#btn_delete').on('click',function(){
            var loan_status_id_delete = $('#loan_status_id_delete').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo site_url('ControllerApprove/delete')?>",
                dataType : "JSON",
                data : {loan_status_id_delete:loan_status_id_delete},
                success: function(data){
                    $('[name="loan_status_id_delete"]').val("");
                    $('#Modal_Delete').modal('hide');
                    show_product();
                }
            });
            return false;
        });
      $(document).ready(function () {
          var loan_status_id = ("1");
          $.ajax({
            type: 'POST',
            url: '<?php echo site_url('ControllerApprove/get_type')?>',
            async: true,
            dataType : "JSON",
            data: {loan_status_id:loan_status_id},
            success: function (data) {
              var html = '';
              var i;
              for (i = 0; i < data.length; i++) {
            
                html +='<div>'+
                '<ul>'+
               '<li >'+
               '<a>'+data[i].loan_type_name+'<i class="zmdi zmdi-edit mr-20"></i></a>'+
               '</li>'+
               '</ul>'+
               '</div>';
              }
              $('#_type_list').html(html);
            }

          });
          return false;
        });
    </script>
</body>

</html>