<div class="clearfix">
    <h4><i class="fa fa-th-list"></i> Edit Customer</h4>
</div>
<div class="row">
    <div class="col-md-6">
        


        <?php 
            echo $this->Form->create('Customer');
            echo $this->Form->input('name',array(
                'type'=>'text','class'=>'form-control', 'id'=>'txtname','placeholder'=>'Name'));
            echo $this->Form->input('email',array(
                'type'=>'email','class'=>'form-control', 'id'=>'txtemail','placeholder'=>'Email'
                ));
            echo $this->Form->input('Group', array(
                'class'=>'form-control','options' => array(1, 2, 3, 4, 5),
                'empty' => '(choose one)'
            ));

            $options = array(
                'label' => 'Add Customer',
                'class' => 'btn btn-default'
                
            );
            echo $this->Form->end($options);


         ?>

    </div>
</div>