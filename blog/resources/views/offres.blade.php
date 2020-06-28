@include("header")

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Les Offres</h3>
        <div class="row mt">
          <!--  DATE PICKERS -->
          <div class="col-lg-12">
            <div class="form-panel">
              <form methode="post" action="{{url('offres')}}" enctype="multipart/form-data" class="form-horizontal style-form">
              {{ csrf_field() }}

                <div class="form-group">
                  <label class="control-label col-md-3">Offre</label>
                  <div class="col-md-3 col-xs-11">
                    <select name="offre" class="form-control form-control-inline input-medium ">
                      <option selected>Choose...</option>
                      <option>free</option>
                      <option>meduim</option>
                      <option>gold</option>
                    </select>
                    <span class="help-block">Selectionner offre</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Prix</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="prix"/>
                    <span class="help-block">Saisir prix</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Nombre des Commerciaux Maximale</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="nbr_commerc"/>
                    <span class="help-block">Saisir Nombre</span>
                  </div>
                </div>

                <div class="form-group">
                  <label class="control-label col-md-3">Nombre des Modules</label>
                  <div class="col-md-3 col-xs-11">
                    <input class="form-control form-control-inline input-medium " name="nbr_module"/>
                    <span class="help-block">Saisir Nombre</span>
                  </div>
                </div>

<div class="form-group">
                  <label class="control-label col-md-3">Date Limit</label>
                  <div class="col-md-3 col-xs-11">
                    <div data-date-viewmode="years" data-date-format="dd-mm-yyyy" data-date="01-01-2014" class="input-append date dpYears">
                      <input type="text" readonly="" value="01-01-2014" size="16" class="form-control" name="date_limit">
                      <span class="input-group-btn add-on">
                        <button class="btn btn-theme" type="button"><i class="fa fa-calendar"></i></button>
                        </span>
                    </div>
                    <span class="help-block">Selectionner date</span>
                  </div>
                </div>
                <input type="submit" class="btn btn-info "  value="Enregistrer"/>



                
                
              </form>
            </div>
            <!-- /form-panel -->
          </div>
          <!-- /col-lg-12 -->
        </div>
       
      </section>
      <!-- /wrapper -->
    </section>
 
    <footer class="site-footer">
      <div class="text-center">
        <p>
          &copy; Copyrights <strong>Dashio</strong>. All Rights Reserved
        </p>
        <div class="credits">
         
          Created with Dashio template 
        </div>
        <a href="offres" class="go-top">
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
  <script type="text/javascript" src="{{asset('lib/bootstrap-daterangepicker/moment.min.js')}}"></script>
  <script src="{{asset('lib/advanced-form-components.js')}}"></script>
</body>

</html>
