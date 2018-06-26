<!---Author:Amol Tribhuwan********************************-->
@extends('master.master')
@section('pageContent')
   <div class="right_col" role="main">
            <div class="row">
              <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Add/Edit Asset Model</h2>
                       @if(Session::has('succMsg'))
                  <div class="alert alert-success alert-dismissible fade in col-md-9" role="alert" id="succMsg">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>
                        {{Session::get('succMsg') }}                                  
                    </strong>
                  </div>
                  @endif
                  @if(Session::has('errorMsg'))
                  <div class="alert alert-danger alert-dismissible fade in col-md-9" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span>
                    </button>
                    <strong>
                    {{ Session::get('errorMsg')}}
                    </strong>
                  </div>
                  @endif
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                
                <fieldset>
                <fieldset>
                  <legend>Add New  Model</legend>
                  <a style="height:30px; padding-top:0%;" class="btn btn-primary addDistrict" data-toggle="collapse" data-target="#add"><i class="fa fa-plus"></i> <span>Add new</span></a>


            <form method="post" action="{{action('SysAdminOperation@addAssetModel',csrf_token())}}" enctype="multipart/form-data" class="form-horizontal form-label-left">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
            <div id="add" class="collapse">
                <div class="col-md-12">
                      <div class="x_panel">
                        <div class="x_content">

                            <div class="form-group">
                              <label class="control-label col-md-3" name="name" for="first-name">Model Name</label>
                              <div class="col-md-7">
                                  <input type="text" id="addModel_name" name="addModel_name" class="form-control" required>
                              </div>
                            </div>

                          <div class="form-group">
                              <label class="control-label col-md-3"  for="first-name">Manufacture</label>
                              <div class="col-md-7">
                              <select class="form-control" name="addManufacture" id="addManufacture" required="">
                                <option value="">--Select Manufacture--</option>
                                  @if(isset($manufacture))
                                    <?php
                                        for ($i=0; $i <count($manufacture) ; $i++) { 
                                          echo "<option value=\"".$manufacture[$i]['manufacture_id']."\">".$manufacture[$i]['manufacure_name']."</option>";
                                        }
                                    ?>
                                  @endif
                                </select>
                              </div>
                            </div>
                          
                            <div class="form-group">
                              <label class="control-label col-md-3"  for="first-name">Category</label>
                              <div class="col-md-7">
                              <select class="form-control" name="addCategory" id="addCategory" required="">
                                <option value="">--Select Category--</option>
                                <option value="Dekstop">Dekstop</option>
                                <option value="Displays">Displays</option>
                                <option value="Laptops">Laptops</option>
                                <option value="Mobile Phones">Mobile Phones</option>
                                <option value="Conference Phones">Conference Phones</option>
                                <option value="Tablets">Tablets</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3" name="discription" for="first-name">Model Number</label>
                              <div class="col-md-7">
                                  <input type="text" id="addModel_number" name="addModel_number" class="form-control" required>
                              </div>
                            </div>

                          <div class="ln_solid"></div>
                         <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <button class="btn btn-primary" type="reset">Reset</button>
                            <input type="submit" class="btn btn-success" value="submit">
                          </div>
                        </div>  
                       </form>
                </fieldset>
                <br>
                <div id="show">
                  <fieldset id="edit" class="collapse">
                  <legend>Edit Asset Model</legend>
               <form method="post" action="{{action('SysAdminOperation@updateAssetModel',csrf_token())}}" enctype="multipart/form-data" class="form-horizontal form-label-left">
              <input type="hidden" name="_token" value="{{csrf_token()}}">
                            <input type="hidden" name="model">
                            <div class="form-group">
                              <label class="control-label col-md-3" name="name" for="first-name">Model Name</label>
                              <div class="col-md-7">
                                  <input type="text" id="editModel_name" name="editModel_name" class="form-control" required>
                              </div>
                            </div>

                          <div class="form-group">
                              <label class="control-label col-md-3"  for="first-name">Manufacture</label>
                              <div class="col-md-7">
                              <select class="form-control" name="editManufacture" id="editManufacture">
                                <option>--Select Manufacture--</option>
                                  @if(isset($manufacture))
                                    <?php
                                        for ($i=0; $i <count($manufacture) ; $i++) { 
                                          echo "<option value=\"".$manufacture[$i]['manufacure_id']."\">".$manufacture[$i]['manufacure_name']."</option>";
                                        }
                                    ?>
                                  @endif
                                </select>
                              </div>
                            </div>
                          
                            <div class="form-group">
                              <label class="control-label col-md-3"  for="first-name">Category</label>
                              <div class="col-md-7">
                              <select class="form-control" name="editCategory" id="editCategory">
                                <option>--Select Category--</option>
                                <option value="Dekstop">Dekstop</option>
                                <option value="Displays">Displays</option>
                                <option value="Laptops">Laptops</option>
                                <option value="Mobile Phones">Mobile Phones</option>
                                <option value="Conference Phones">Conference Phones</option>
                                <option value="Tablets">Tablets</option>
                                </select>
                              </div>
                            </div>

                            <div class="form-group">
                              <label class="control-label col-md-3" name="discription" for="first-name">Model Number</label>
                              <div class="col-md-7">
                                  <input type="text" id="editModel_number" name="editModel_number" class="form-control" required>
                              </div>
                            </div>

                          <div class="ln_solid"></div>
                         <div class="form-group">
                          <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                           <button class="btn btn-primary" type="button" data-toggle="collapse" data-target="#edit">Cancel</button>
                            <input type="submit" class="btn btn-success" value="Update">
                          </div>
                        </div>  
                       </form>
                  </fieldset>
                  </div>
                  <br>

                <legend>Asset Model</legend>
                <fieldset>
                <legend>Show Asset Model</legend>
      
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                         <th hidden>model</th>
                          <th>Name</th>
                          <th>Manufacture</th>
                          <th>Category</th> 
                          <th>Model Number</th> 
                          <th></th>
                        </tr>
                      </thead>
                      <tbody>

                        @if(isset($model))
                          <?php
                            for ($i=0; $i <count($model) ; $i++) { 
                              echo "<td hidden>".$model[$i]['model_id']."</td>";
                              echo "<td>".$model[$i]['location_name']."</td>";
                              echo "<td>".$model[$i]['manufacure_name']."</td>";
                              echo "<td>".$model[$i]['category']."</td>";
                              echo "<td>".$model[$i]['model_number']."</td>";
                              echo "<td><a  class=\"btn btn-primary btn-xs editModel\" data-toggle=\"collapse\" data-target=\"#edit\"><i class=\"fa fa-edit\" ></i> <span>Edit</span></a></td>
                            </tr>";
                            }

                          ?>
                        @endif
                      </tbody>
                    </table>           
                
                  </fieldset>
                 
           </div>
         </div>
        </div>
       </div>
     </div>

        <script type="text/javascript">
        $('.editModel').click(function(){
          $('#model').val($(this).parent().siblings('td').eq(0).text());
          $("#editManufacture option:contains(" + $(this).parent().siblings('td').eq(2).text() + ")").attr('selected', 'selected');
          $("#editCategory option:contains(" + $(this).parent().siblings('td').eq(3).text() + ")").attr('selected', 'selected');
          $('#editModel_name').val($(this).parent().siblings('td').eq(1).text());
          $('#editModel_number').val($(this).parent().siblings('td').eq(4).text());
          // $('#edit').modal('show');
      
         $('html, body').animate({
              scrollTop: $("#show").offset().top
          }, 2000);
        });  
        </script>
@endsection