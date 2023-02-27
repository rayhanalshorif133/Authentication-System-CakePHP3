<?php
$this->assign('title', "Users");
?>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">User List</h3>
        <div class="card-tools">
            <div class="input-group input-group-sm" style="width: 150px;">
                <?php echo $this->Html->link(
                    'Add New User',
                    ['action' => 'add'],
                    ['class' => 'btn btn-sm btn-outline-primary']
                ); ?>
            </div>
        </div>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th style="width: 10px">#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Address</th>
                    <th>password</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($users as $key => $user) : ?>
                    <tr>
                        <td><?php echo $key + 1 ?></td>
                        <td><?php echo $user->name ?></td>
                        <td><?php echo $user->email ?></td>
                        <td><?php echo $user->phone ?></td>
                        <td><?php echo $user->address ?></td>
                        <td><?php echo $user->password ?></td>
                        <td>
                            <div class="btn-group">
                                <?php echo $this->Html->link(
                                    'View',
                                    ['action' => 'view', 'id' => $user->id],
                                    ['class' => 'btn btn-success btn-sm']
                                ); ?>
                                <?php echo $this->Html->link(
                                    'Edit',
                                    ['action' => 'edit', 'id' => $user->id],
                                    ['class' => 'btn btn-info btn-sm']
                                ); ?>

                                <?php if ($user->id != 1) : ?>
                                    <?php echo $this->Form->create('$user', ['url' => ['action' => 'delete', 'id' => $user->id], 'type' => 'delete']) ?>
                                    <?php echo $this->Form->button(_('delete'), ['type' => 'submit', 'class' => 'btn btn-danger btn-sm']) ?>
                                    <?= $this->Form->end() ?>
                                <?php endif; ?>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="card-footer clearfix">
        <ul class="pagination pagination-sm m-0 float-right">
            <li class="page-item"><a class="page-link" href="#">«</a></li>
            <li class="page-item"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">»</a></li>
        </ul>
    </div>
</div>
