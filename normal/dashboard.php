<?php include('header.php'); ?>
<?php include('../session.php'); ?>

    <body >
		<?php include('navbar.php') ?>
        <div class="container-fluid" id="">
            <div class="row-fluid">
					<?php include('sidebar_dashboard.php'); ?>
                <!--/span-->
                <div class="span9" id="content">
						<div class="row-fluid"></div>
						
                    <div class="row-fluid">
            
                        <!-- block -->
                        <div id="block_bg" class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">STATISTICS</div>
                            </div>
                            <div class="block-content collapse in">
							        <div class="span12">
						
									<?php 
								$query_students = mysqli_query($conn,"select * from students  ")or die(mysqli_error());
								$count_students = mysqli_num_rows($query_students);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_students; ?>"><?php echo $count_students; ?></div>
                                    <div class="chart-bottom-heading"><strong>STUDENTS</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_class = mysqli_query($conn,"select * from class")or die(mysqli_error());
								$count_class = mysqli_num_rows($query_class);
								?>
								
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_class; ?>"><?php echo $count_class; ?></div>
                                    <div class="chart-bottom-heading"><strong>CLASSES</strong>

                                    </div>
                                </div>
								<?php 
																
								$query_nursery = mysqli_query($conn," select * from students, class where students.class = class.class_name AND class.category ='Nursery'")or die(mysqli_error());
								
								$count_nursery = mysqli_num_rows($query_nursery);
								
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_nursery; ?>"><?php echo $count_nursery; ?></div>
                                    <div class="chart-bottom-heading"><strong>NURSERY STUDENTS</strong>

                                    </div>
                                </div>
								
								<?php 
								$query_primary = mysqli_query($conn," select * from students, class where students.class = class.class_name AND class.category ='Primary'")or die(mysqli_error());
								$count_primary = mysqli_num_rows($query_primary);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_primary; ?>"><?php echo $count_primary; ?></div>
                                    <div class="chart-bottom-heading"><strong>PRIMARY STUDENTS</strong>

                                    </div>
                                </div>
								
								
										<?php 
								$query_secondary = mysqli_query($conn," select * from students, class where students.class = class.class_name AND class.category ='Secondary'")or die(mysqli_error());
								$count_secondary = mysqli_num_rows($query_secondary);
								?>
								
                                <div class="span3">
                                    <div class="chart" data-percent="<?php echo $count_secondary ?>"><?php echo $count_secondary ?></div>
                                    <div class="chart-bottom-heading"><strong>SECONDARY STUDENTS</strong>

                                    </div>
                                </div>
								

                            </div>
                        </div>
                        <!-- /block -->
						
                    </div>
                    </div>
                
                </div>
            </div>
    
         <?php include('footer.php'); ?>
		 
        </div>
	<?php include('script.php'); ?>
    </body>
</html>