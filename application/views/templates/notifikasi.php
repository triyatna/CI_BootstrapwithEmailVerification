<section class="jumbotron text-center mb-4">
    <div class="container">
        <h1 class="display-4">Activities (<?php echo $total_activity_count; ?>)</h1>
        <p class="lead text-muted">View all the recent activities</p>
    </div>
</section>

<div class="container">
	<?php if(!empty($activities)): ?>
		<table class="table table-striped">
			<tbody>
				<?php foreach($activities as $activity): ?>
					<tr data-id="<?php echo $activity['id']; ?>">
						<td>
							<div class="lead"><?php echo $activity['activity_text']; ?></div>
							<div><small><?php echo ago(strtotime($activity['added_on'])); ?></small></div>
						</td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php echo $this->pagination->create_links(); ?>
	<?php endif; ?>
</div>