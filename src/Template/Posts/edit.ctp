<h1>
    Edit Post
</h1>

<?= $this->Form->create($post); ?>

<?= $this->Form->input('title', array(
    'lable' => 'Post Title',
    'class' => 'form-control'
)); ?>
<?= $this->Form->input('body', array(
    'lable' => 'Post Body',
    'type' => 'textarea',
    'escape' => false,
    'class' => 'form-control'
)); ?>

<?= $this->Form->input('category', array(
    'lable' => 'Category',
    'type' => 'select',
    'escape' => false,
    'class' => 'form-control',
    'empty' =>  'Select One',
    'options' => [
        'Web Development',
        'Design',
        'Marketing'
    ],

)); ?>
<?= $this->Form->input('author', array(
    'lable' => 'Author',
    'class' => 'form-control'
)); ?>
<br>

<hr>
<?= $this->Form->submit('Submit', array('class' => 'btn btn-primary')); ?>
<?= $this->Form->end(); ?>