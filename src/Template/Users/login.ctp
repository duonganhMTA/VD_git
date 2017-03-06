<br>

<div class="index large-4 medium-4 large-offset-4 medium-offset-4 columns">
	<div class="panel">
		<h2 class="text-center">Login</h2>
		<?=$this->Form->create();?>
		<?=$this->Form->input('username');?>
		<?=$this->Form->input('password');?><br>
		<?=$this->Form->button('Login');?>
		<?=$this->Flash->render()?>
		<?=$this->Form->end();?>
	</div>
</div>

<Style>
	form {
    width: 180px;
    margin-left: 578px;
	}
	h2{
		margin-left:600px;
		font-size:2em;
	}
	label{
		margin-top:30px;
		font-size:1.5em;
	}
	input{
		width:300px;
		height:50px;
	}
</Style>