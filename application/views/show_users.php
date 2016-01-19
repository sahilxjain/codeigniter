		<script type="text/javascript">
			function show_confirm(act,gotoid)
			{
				if(act=="edit"){
					//var r=confirm("Do you really want to edit?");
					var r=true;
				}
				else{
					var r=confirm("Do you really want to delete?");
				} 

				if (r==true){
					window.location="<?php echo base_url(); ?>index.php/users/"+act+"/"+gotoid;
				}
			}
		</script> 

		<h2> Simple CI CRUD Operation </h2>
		<table class="table" width="600" border="1" cellpadding="5">
			<tr class="success">
				<th scope="col">Id</th>
				<th scope="col">User Name</th>
				<th scope="col">Email</th>
				<th scope="col">Mobile</th>
				<th scope="col">Address</th>
				<th scope="col" colspan="2">Action</th>
			</tr>

			<?php foreach ($user_list as $u_key){ ?>
			<tr class="info">
				<td><?php echo $u_key->id; ?></td>
				<td><?php echo $u_key->name; ?></td>
				<td><?php echo $u_key->email; ?></td>
				<td><?php echo $u_key->address; ?></td>
				<td><?php echo $u_key->mobile; ?></td>
				<td width="40" align="left" ><a class="btn btn-primary" href="#" onClick="show_confirm('edit',<?php echo $u_key->id;?>)">Edit</a></td>
				<td width="40" align="left" ><a class="btn btn-danger" href="#" onClick="show_confirm('delete',<?php echo $u_key->id;?>)">Delete </a></td>
			</tr>
			<?php }?>

			<tr>
				<td colspan="7" align="right"> 
					<a class="btn btn-success" href="<?php echo base_url(); ?>index.php/users/add_form">Insert New User</a>
				</td>
			</tr>
		</table>
