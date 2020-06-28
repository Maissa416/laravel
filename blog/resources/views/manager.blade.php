@include("header")

    <!--sidebar end-->
    <!-- **********************************************************************************************************************************************************
        MAIN CONTENT
        *********************************************************************************************************************************************************** -->
    <!--main content start-->
    <section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Maneger Commerciale</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
            <div class="adv-table">
              <table  class="display table table-bordered" id="hidden-table-info">
                <thead>
                
                    <th>id</th>
                    <th>Nom</th>
                    <th >Adresse</th>
                    <th class="hidden-phone">Téléphone</th>
                    <th class="hidden-phone">Action</th>
                    
                  </tr>
                </thead>
                <tbody>
                  <tr class="gradeA">
                    <td>1</td>
                    <td>Orange</td>
                    <td class="hidden-phone">rte tunis</td>
                    <td class="center hidden-phone">1234556789</td>
                    <td class="center hidden-phone">
                    <a href="modifier" >  <input class="btn btn-theme" type="submit" value="Modifier" > </a>
                              <a href="supprimer" ><input class="btn btn-theme" type="submit" value="Supprimer"></a>
                          
                    </td>
                  </tr>
                  <tr class="gradeC">
                    <td>2</td>
                    <td>topnet</td>
                    <td class="hidden-phone">rte gremda</td>
                    <td class="center hidden-phone">5452153</td>
                    <td class="center hidden-phone">
                    <input class="btn btn-theme" type="submit" value="Modifier" > </a>
                              <a href="supprimer" ><input class="btn btn-theme" type="submit" value="Supprimer"></a>
                          
                    </td>
                  </tr>
                  <tr class="gradeA">
                    <td>3</td>
                    <td>electo</td>
                    <td class="hidden-phone">rte gremda</td>
                    <td class="center hidden-phone">4521453</td>
                    <td class="center hidden-phone">
                    <a href="modifier" >  <input class="btn btn-theme" type="submit" value="Modifier" > </a>
                              <a href="supprimer" ><input class="btn btn-theme" type="submit" value="Supprimer"></a>
                          
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
        
        <a href="advanced_table.html#" class="go-top">
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
