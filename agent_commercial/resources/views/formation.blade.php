@include("header")
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Les  Formation</h3>
        <div class="row mt">
          <div class="col-lg-12">
            <div class="form-panel">
            <h4 class="mb"><i class="fa fa-angle-right"></i> Ajout Formation</h4>
            <form class="form-horizontal style-form" method="get">

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Nom</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control round-form">
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Sujet</label>
                    <div class="col-sm-10">
                      <textarea class="form-control round-form" rows="4"></textarea>
                    </div>
                  </div>

                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Date début</label>
                    <div class="col-sm-10">
                      <input type="date" class="form-control round-form">
                    </div>
                  </div>


                  <div class="form-group">
                    <label class="col-sm-2 col-sm-2 control-label">Durée</label>
                    <div class="col-md-4">
                     <div class="input-group bootstrap-timepicker">
                      <input type="text" class="form-control round-form timepicker-24">
                      <span class="input-group-btn">
                        <button class="btn btn-theme04" type="button"><i class="fa fa-clock-o"></i></button>
                        </span>
                     </div>
                    </div>
                  </div>

           

                <div class="form-group">
                  <label class="control-label col-md-3">Fichier</label>
                  <div class="controls col-md-9">
                    <div class="fileupload fileupload-new" data-provides="fileupload">
                      <span class="btn btn-theme02 btn-file">
                        <span class="fileupload-new"><i class="fa fa-paperclip"></i> Selectionner Fichier</span>
                      <span class="fileupload-exists"><i class="fa fa-undo"></i> Changeer</span>
                      <input type="file" class="default" />
                      </span>
                      <span class="fileupload-preview" style="margin-left:5px;"></span>
                      <a href="" class="close fileupload-exists" data-dismiss="fileupload" style="float: none; margin-left:5px;"></a>
                    </div>
                  </div>
                </div>

              </form>

            </div>
          </div>
        </div>
        <!-- row -->
       
        <!-- row -->
      </section>
      <!-- /wrapper -->
    </section>
    <!-- /MAIN CONTENT -->
    <!--main content end-->
    <!--footer start-->
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
          
          Created with Dashio template 
        </div>
        <a href="advanced_form_components.html#" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->
  <script src="{{asset('lib/jquery-ui-1.9.2.custom.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-fileupload/bootstrap-fileupload.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-datepicker/js/bootstrap-datepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/date.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/bootstrap-timepicker/js/bootstrap-timepicker.js')}}"></script>
  <script src="{{asset('lib/advanced-form-components.js')}}"></script>

</body>

</html>
