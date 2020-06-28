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
        <h3><i class="fa fa-angle-right"></i> Maneger Commerciale</h3>
        <div class="row mb">
          <!-- page start-->
          <div class="content-panel">
          <h4 class="mb"><i class="fa fa-angle-right"></i> Consulter les  Agents Commerciaux </h4>

            <div class="adv-table">
              <table  class="display table table-bordered" id="hidden-table-info">
                <thead>
                
                    <th>id</th>
                    <th>Nom</th>
                    <th >prénom</th>
                    <th class="hidden-phone">Téléphone</th>
                    <th class="hidden-phone">rendez-vous</th>
                    <th class="hidden-phone">Emplacement</th>
                    <th class="hidden-phone">Conclusion</th>
                    <th class="center hidden-phone">&nbsp;&nbsp;&nbsp;Action</th>
                  </tr>
                </thead>
                <tbody>
                  


                  <tr class="gradeA">
                    <td>1</td>
                    <td>ali</td>
                    <td class="hidden-phone">keskes</td>
                    <td class="center hidden-phone">45513668</td>
                    <td class="center hidden-phone">rte ain</td>
                    <td class="center hidden-phone">xxxxx</td>
                    <td class="center hidden-phone">xxxxx</td>
                    <td class="center hidden-phone">
                    <a href="modifier" ><i class="fa fa-edit fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="modifier" ><i class="fa fa-trash fa-2x"></i></a>
                    </td>
                    
                  </tr>

                  <tr class="gradeC">
                    <td>2</td>
                    <td>salah</td>
                    <td class="hidden-phone">tounsi</td>
                    <td class="center hidden-phone">412543</td>
                    <td class="center hidden-phone">rte gremda</td>
                    <td class="center hidden-phone">xxxxx</td>
                    <td class="center hidden-phone">xxxxx</td>

                    <td class="center hidden-phone">
                    <a href="modifier" ><i class="fa fa-edit fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="modifier" ><i class="fa fa-trash fa-2x"></i></a>
                    </td>
                  </tr>
                  <tr class="gradeA">
                    <td>3</td>
                    <td>ahmed</td>
                    <td class="hidden-phone">koubaa</td>
                    <td class="center hidden-phone">41452336</td>
                    <td class="center hidden-phone">rte l'afran</td>
                    <td class="center hidden-phone">xxxxx</td>
                    <td class="center hidden-phone">xxxxx</td>

                    <td class="center hidden-phone">
                    <a href="modifier" ><i class="fa fa-edit fa-2x"></i></a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="modifier" ><i class="fa fa-trash fa-2x"></i></a>
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
        
        <a href="tabel_agent" class="go-top">
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
