   <footer>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel-footer text-center"> &copy; <img src="lh1.png" width="200" height="10" id="Image" align="center"> :All Rights Reserved</div>
                
                </div>
            </div>
            <!-- /.row -->
        </footer>

    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
  <?php 
	   // 5. close connection
	   if (isset($connection)){
	   mysql_close($connection);
	   }
	   ?>