<ul>
    <?php foreach($this->getLastComments() as $opinion): ?>
		<li><?php echo $opinion->MovieLink; ?> </li>
    <?php endforeach; ?>
</ul>
