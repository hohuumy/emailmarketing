<div class="clearfix">
    <h4><i class="fa fa-th-list"></i> All Customer</h4>
</div>
<div class="row">
    <div class="col-md-12">
        <table class="table table-striped">
            <tr>
                <th>STT</th>
                <th>Name</th>
                <th>Email</th>
                <th>Groups</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
            <?php $a = 0; ?>
            <?php foreach ($posts as $post): ?>
            <tr>
                <?php $a = $a +1; ?>
                <td><?php echo $a; ?></td>
                <td><?php echo $this->Html->link($post['Customer']['name'],array('controller'=>'customers', 'action'=>'edit',$post['Customer']['id']) )?></td>
                <td><?php echo $post['Customer']['email'] ?></td>
                <td>Khach hang than thiet</td>
                <td><?php echo $this->Html->link('Edit',array('controller'=>'customers', 'action'=>'edit',$post['Customer']['id']) )?></td>
                <td><?php 
                    echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $post['Customer']['id']),
                    array('confirm' => 'Are you sure?')
                );
 

                ?></td>
            </tr>

        <?php endforeach; ?>
        </table>
    </div>
</div>