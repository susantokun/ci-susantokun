<footer class="main-footer">
	<div class="pull-right hidden-xs">
		<?php if (ENVIRONMENT=='development'): ?>
		<p class="pull-right text-muted">
			CI Version: <strong><?php echo CI_VERSION; ?></strong>, Elapsed Time: <strong>{elapsed_time}</strong> seconds, Memory Usage: <strong>{memory_usage}</strong>
		</p>
		<?php endif; ?>
	</div>
	<strong>Copyright &copy; <?php echo date('Y'); ?> <a href="https://susantokun.com">SUSANTOKUN</a></strong> All rights reserved.
</footer>
