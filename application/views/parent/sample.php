<html>
<head>
	<link href="<?php echo base_url(); ?>assets/jquery/prism.css" rel="stylesheet" media="screen">
         <link href="<?php echo base_url(); ?>assets/jquery/chosen.css" rel="stylesheet" media="screen">

        <script src="<?php echo base_url(); ?>plugin/jquery/jquery-3.2.1.min.js"></script>
        <script src="<?php echo base_url(); ?>plugin/jquery/chosen.proto.min.js"></script>
        <script src="<?php echo base_url(); ?>plugin/jquery/chosen.jquery.min.js"></script>
        <script src="<?php echo base_url(); ?>plugin/jquery/site.js"></script>

</head>

<body>

<div id = "container">

<?php echo form_open('welcome/save','',$hidden=array()); ?>

<div class = "label" style = "display: block;clear: both">
	<?php echo form_label('Choose student', 'student', $attributes = array()); ?>
</div>

<div class = "input" style = "display: block;clear: both">
	<?php $options = array(""=>"") ?>

	<?php foreach ($students as $key => $value): ?>

	<?php $options[$value->Id] = $value->fname;?>
	

	<?php endforeach ?>
	<?php echo form_dropdown('student', $options,set_value('student'),$attributes=array()); ?>

</div>

<div class = "submit" style="display: block;clear: both">
	<?php echo form_submit('submit','Save'); ?>
</div>




<?php echo form_close(); ?>

</div>

</body>

</html>