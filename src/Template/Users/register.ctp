<style>
  h2{
    margin-left: 400px;
  }
  .form-control{
    /*margin-left: 100px;*/
  }
  .treg{
    margin-left: 400px;
  }
</style>
<h2>Register</h2>
<div class='treg' >
<?php echo $this->Form->create($user, array('require'));?>
  <?php echo 'Fullname:'.'<br>'.'<br>'?>
  <?= $this->Form->input('fullname',array('class'=>'form-control','placeholder'=>'fullname','type'=>'text','label'=>false,'required'=>false)) ?><br>
  <?php echo 'Username:'.'<br>'.'<br>'?>
  <?= $this->Form->input('username',array('class'=>'form-control','placeholder'=>'username','type'=>'text','label'=>false,'required'=>false)) ?><br>
<?php echo 'Password:'.'<br>'.'<br>'?>
<?= $this->Form->input('password',array('class'=>'form-control','placeholder'=>'Email','type'=>'password','label'=>false,'required'=>false)) ?><br>
<?php echo 'Email:'.'<br>'.'<br>'?>
<?= $this->Form->input('email',array('class'=>'form-control','placeholder'=>'Email','type'=>'email','label'=>false,'required'=>false)) ?><br>
<?php echo 'Address'.'<br>'.'<br>'?>
<?= $this->Form->input('address',array('class'=>'form-control','placeholder'=>'address','type'=>'text','label'=>false,'required'=>false)) ?><br>
<?php echo 'Sex'.'<br>'.'<br>'?>
<div style="float:left">
 <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Boy','value' =>'1','required'=>false]); ?>
</div>
 <?= $this->Form->input('sex', ['type' => 'checkbox','label'=>'Girl','value' =>'0','required'=>false]); ?>
<br>
<?php echo 'Role_flg'.'<br>'.'<br>'?>
<select name='role_flg'>
   <option value='0'>User</option>
   <option value='1'>Admin</option>
   <option value='2'>Manager</option>
</select>
 <br><br><?=$this->Form->button('Submit');?>
<?php echo $this->Form->end();?>
</div>