<style>
    table {
        border-collapse: collapse;
        width:1200px;
        text-align: center;
    }
    table th,td{
        border:1px solid black;
          text-align: center;
    }
    th{
        height: 50px;
        text-align: center;
    }
</style>
 <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->

<h1>Blog user</h1>
<p><?= $this->Html->link("Add User", ['action' => 'add']) ?></p>
<table>
    <tr>
        <th>id</th>
        <th>fullname</th>
        <th>username</th>
        <th>password</th>
         <th>Address</th>
        <th>Email</th>
        <th>Sex</th>
        <th>Role_flg</th>
        <th>Created</th>
        <th>Action</th>
    </tr>

    <!-- Here is where we iterate through our $users query object, printing out totl info -->

    <?php foreach ($users as $totl): ?>
    <tr>
        <td><?= $totl->id ?></td>
        <td>
            <?=$totl->fullname?>
        </td>
        <td>
            <?=$totl->username ?>
        </td>
        <td>
            <?=$totl->password ?>
        </td>
        <td>
            <?=$totl->address ?>
        </td>
        <td>
            <?= $totl->email ?>
        </td>
        <td>
            <?= $totl->sex ?>
        </td>
        <td>
            <?= $totl->role_flg ?>
        </td>
        <td>
            <?= $totl->created ?>
        </td>
        <td>
            <?=$this->Form->postLink(
                'Delete',
                ['action'=>'delete',$totl->id],
                ['confirm'=>'Are you sure?']
            ) ?>
            <?= $this->Html->link('Edit',['action'=>'edit',$totl->id])?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>
    <ul class="pagination">
        <li><?php echo $this->Paginator->numbers(); ?></li>
    </ul>
   <!--<li><?php echo $this->Paginator->numbers(); ?></li>-->
 <!-- <?php echo $this->Paginator->prev(' < ' . __('previous')); ?> 
<?php echo $this->Paginator->first('< first'); ?> 
<?php echo $this->Paginator->numbers(); ?> 
 <?php echo $this->Paginator->next(' next >'); ?>  
<?php echo $this->Paginator->last(' last >'); ?>-->