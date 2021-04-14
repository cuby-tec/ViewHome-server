<?php /* @var $this Controller */ ?>

<?php 
// It use global layout. 
//$this->beginContent('//layouts/main');
$this->beginContent('/layouts/main'); 
?>
<div id="content">
	<?php echo $content; ?>
</div><!-- content -->
<?php $this->endContent(); ?>