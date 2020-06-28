@include("header")
<section id="main-content">
      <section class="wrapper">
        <h3><i class="fa fa-angle-right"></i> Droit d'accés</h3>
        
        <div class="row mt">
          <!-- /col-lg-12 -->
          <!-- CUSTOM TOGGLES -->
          <div class="col-lg-12">
            <div class="form-panel">
              <h4 class="mb"><i class="fa fa-angle-right"></i> les modules</h4>

            
              <table >
                <tr>
                  <td><strong>Nom Manager</strong> &nbsp;
                  <td> <input class="form-control form-control-sm" type="text"/></td>
                </tr>
           <tr>
             <td>
              <input type="checkbox" checked="" data-toggle="switch"id="hhhhh"/>
              </td >
              <td>
               <label size="30ppx">&nbsp;<strong>nombre de commerciaux</strong> </label>
              </td>
              <td>
                &nbsp; <input type="text"   />
               </td>
          </tr>
         <tr>
          <td>
           <input type="checkbox" checked="" data-toggle="switch"id=""/>
           </td >
           <td>
            <label size="30ppx">&nbsp;<strong>Gestion des clients</strong> </label>
           </td>
       </tr>
       <tr>
        <td>
         <input type="checkbox" checked="" data-toggle="switch"id=""/>
         </td >
         <td>
          <label size="30ppx">&nbsp;<strong>Enquéte de Satisfaction</strong> </label>
         </td>
     </tr>
     <tr>
      <td>
       <input type="checkbox" checked="" data-toggle="switch"id=""/>
       </td >
       <td>
        <label size="30ppx">&nbsp;<strong>Formation en ligne</strong> </label>
       </td>
   </tr>
   
   <tr><td>
</td>
   <td><input type="submit" class="btn btn-info center"  value="Enregistrer"/></td>
</tr>
          </table>
                
        </div>
      </div>
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
        <div class="credits">
          Created with Dashio template 
        </div>
        <a href="doit_dacces" class="go-top">
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
  <!--custom switch-->
  <script src="{{asset('lib/bootstrap-switch.js')}}"></script>
  <!--custom tagsinput-->
  <script src="{{asset('lib/jquery.tagsinput.js')}}"></script>
  <!--custom checkbox & radio-->
  <script type="text/javascript" src="{{asset('lib/bootstrap-inputmask/bootstrap-inputmask.min.js')}}"></script>
  <script src="{{asset('lib/form-component.js')}}"></script>


</body>

</html>
