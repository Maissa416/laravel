@include("header")

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->

    <style>


.fa-check{
color:green;
}


</style>
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Formation</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> Consulter les  Formations </h4>

            <div class="adv-table">
              <table  class="display table table-bordered" id="hidden-table-info">
                <thead>
                
                    <th>id</th>
                    <th>Nom</th>
                    <th >sujet</th>
                    <th class="hidden-phone">Fichier</th>

                    <th class="hidden-phone">durée</th>
                    <th class="center hidden-phone">&nbsp;&nbsp;&nbsp;Action</th>
                  </tr>
                </thead>
                <tbody>
                  


                  <tr class="gradeA">
                    <td>1</td>
                    <td>wordpresss</td>

                    <td class="hidden-phone">ccccccccccccccccc</td>
                    <td class="hidden-phone">pdf1</td>

                    <td class="center hidden-phone">13/1/2020</td>
                    <td class="center hidden-phone">
                  
                    <a href="modifier" ><i class="fa fa-check fa-2x"></i></a>
                    </td>
                    
                  </tr>

                  <tr class="gradeC">
                    <td>2</td>
                    <td>laravel</td>

                    <td class="hidden-phone">ccccccccccccccccc</td>
                    <td class="hidden-phone">pdf2</td>

                    <td class="center hidden-phone">13/1/2020</td>
                    <td class="center hidden-phone">
                  
                    <a href="modifier" ><i class="fa fa-check fa-2x"></i></a>
                    </td>
                  </tr>
                  <tr class="gradeA">
                    <td>3</td>
                    <td>communication</td>

                    <td class="hidden-phone">ccccccccccccccccc</td>
                    <td class="hidden-phone">pdf3</td>

                    <td class="center hidden-phone">13/1/2020</td>
                    <td class="center hidden-phone">
                  
                    <a href="modifier" ><i class="fa fa-check fa-2x"></i></a>
                    </td>
                  </tr>
                  
                  
             
                </tbody>
              </table>
            </div>
          </div>
          <!-- page end-->
        </div>
        <!-- /row -->
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
        
        <a href="tabel_formation" class="go-top">
          <i class="fa fa-angle-up"></i>
          </a>
      </div>
    </footer>
    <!--footer end-->
  </section>
  <!-- js placed at the end of the document so the pages load faster -->
  <script src="{{asset('lib/jquery/jquery.min.js')}}"></script>
  <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.js')}}"></script>
  <script src="{{asset('lib/bootstrap/js/bootstrap.min.js')}}"></script>
  <script class="include" type="text/javascript" src="{{asset('lib/jquery.dcjqaccordion.2.7.js')}}"></script>
  <script src="{{asset('lib/jquery.scrollTo.min.js')}}"></script>
  <script src="{{asset('lib/jquery.nicescroll.js')}}" type="text/javascript"></script>
  <script type="text/javascript" language="javascript" src="{{asset('lib/advanced-datatable/js/jquery.dataTables.js')}}"></script>
  <script type="text/javascript" src="{{asset('lib/advanced-datatable/js/DT_bootstrap.js')}}"></script>
  <!--common script for all pages-->
  <script src="{{asset('lib/common-scripts.js')}}"></script>
  <!--script for this page-->

</body>

</html>
