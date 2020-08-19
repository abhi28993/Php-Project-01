<?php

session_start();
if($_SESSION['email']=='')
{
	header('location:index.php');
}
else{
	include 'nav.php';
	include 'head.php';

?>
	
		<div class="main-grid">
			<div class="agile-grids">	
				<!-- validation -->
				<div class="grids">
					<div class="progressbar-heading grids-heading">
						<h2>Admin Comments</h2>
			    	</div>
				</div>	
				
			</div>
		</div>
           <table border=1 width="80%" class="table table-striped">
		   <tr>
					<th>Name</th>
					<th>Email</th>
					<th>Image</th>
					<th>Text</th>
					<th>Edit</th>
					<th>Delete</th>
		   </tr>
			<?php
			include '../database/db.php';
			$query="SELECT * FROM `admin`";
			$data=mysqli_query($con,$query);
			while($res=mysqli_fetch_array($data))
			{
				?>
				
				<tr>
					<td><?php  echo $res['name']?></td>
					<td><?php  echo $res['email']?></td>
					<td><img height="150px" src="images/<?php echo $res['image'];?>" alt=""></td>
					<td><?php  echo $res['text']?></td>
					<td><a href="edit.php?pid=<?php echo $res['id']; ?>">Edit</a></td>
					<td><a href="delete.php?pid=<?php echo $res['id'];?>">Delete</a></td>
				</tr>
				
				
				
				
				
				
				<?php
				
				
			}		
				?>
			
			
			</table>
			
			
			
		<!-- footer -->
		<div class="footer">
				<p>© 2020 Test website developed By Abhishek kumar</a></p>
			</div>
		<!-- //footer -->
	</section>
	<script src="js/bootstrap.js"></script>
	
	
	<!-- input-forms -->
		<script type="text/javascript" src="js/valida.2.1.6.min.js"></script>
		<script type="text/javascript" >

			$(document).ready(function() {

				// show Valida's version.
				$('#version').valida( 'version' );

				// Exemple 1
				$('.valida').valida();

				// Exemple 2
				/*
				$('.valida').valida({

					// basic settings
					validate: 'novalidate',
					autocomplete: 'off',
					tag: 'p',

					// default messages
					messages: {
						submit: 'Wait ...',
						required: 'Este campo é obrigatório',
						invalid: 'Field with invalid data',
						textarea_help: 'Digitados <span class="at-counter">{0}</span> de {1}'
					},

					// filters & callbacks
					use_filter: true,

					// a callback function that will be called right before valida runs.
					// it must return a boolan value (true for good results and false for errors)
					before_validate: null,

					// a callback function that will be called right after valida runs.
					// it must return a boolan value (true for good results and false for errors)
					after_validate: null

				});
				*/

        // setup the partial validation
				$('#partial-1').on('click', function( ev ) {
					ev.preventDefault();
					$('#res-1').click(); // clear form error msgs
					$('form').valida('partial', '#field-1'); // validate only field-1
					$('form').valida('partial', '#field-1-3'); // validate only field-1-3
				});

			});

		</script>
		<!-- //input-forms -->
		<!--validator js-->
		<script src="js/validator.min.js"></script>
		<!--//validator js-->
<script src="js/proton.js"></script>
</body>
</html>
<?php

		}
		?>
