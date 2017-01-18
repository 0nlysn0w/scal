<div class="container">
	<div class="box">
		<h3>Add a member</h3>
		<form action="<?php echo URL; ?>members/addMember" method="POST">
			<label>Name</label>
			<input type="text" name="name" value="" required />
			<label>Sex</label>
			<input type="text" name="sex" value="" required />
			<label>Group</label>
			<input type="text" name="group" value="" required />
			<input type="submit" name="submit_add_member" value="Submit" />
		</form>
	</div>

	<div class="box">
		<div id="javascript-ajax-result-box"></div>
		<h3>List of members (data from model)</h3>
		<table>
			<thead style="background-color: #ddd; font-weight: bold;">
			<tr>
				<td>Id</td>
				<td>Name</td>
				<td>Sex</td>
				<td>Group</td>
				<td>DELETE</td>
				<td>EDIT</td>
			</tr>
			</thead>
			<tbody>
			<?php foreach ($members as $member) { ?>
				<tr>
					<td><?php if (isset($member->id)) echo htmlspecialchars($member->id, ENT_QUOTES, 'UTF-8'); ?></td>
					<td><?php if (isset($member->name)) echo htmlspecialchars($member->name, ENT_QUOTES, 'UTF-8'); ?></td>
					<td><?php if (isset($member->sex)) echo htmlspecialchars($member->sex, ENT_QUOTES, 'UTF-8'); ?></td>
					<td><?php if (isset($member->group)) echo htmlspecialchars($member->group, ENT_QUOTES, 'UTF-8'); ?></td>
					<td><a href="<?php echo URL . 'members/deletemember/' . htmlspecialchars($member->id, ENT_QUOTES, 'UTF-8'); ?>">delete</a></td>
					<td><a href="<?php echo URL . 'members/editmember/' . htmlspecialchars($member->id, ENT_QUOTES, 'UTF-8'); ?>">edit</a></td>
				</tr>
			<?php } ?>
			</tbody>
		</table>
	</div>
</div>
