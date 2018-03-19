<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>Categories</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns">
		<?php echo $this->element('admin'.DS.'category_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<?php echo $this->Html->link(__(("+ Add New Category"), true), array('controller'=> 'categories', 'action'=>'add', 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); ?><br />
		<table class="table-striped table-bordered table-condensed table-hover">
			<thead>
		    <tr>
		        <th><?php echo $this->Paginator->sort('id'); ?></th>
		        <th><?php echo $this->Paginator->sort('name'); ?></th>
				<th><?php echo $this->Paginator->sort('parent_id'); ?></th>
		        <th><?php echo $this->Paginator->sort('slug'); ?></th>
		        <!-- <th><?php echo $this->Paginator->sort('description'); ?></th> -->
		        <th><?php echo $this->Paginator->sort('created'); ?></th>
		        <th><?php echo $this->Paginator->sort('modified'); ?></th>
		        <th class="actions">Actions</th>
		    </tr>
			</thead>
			<tbody>
		    <?php foreach ($categories as $category): ?>
		        <tr>
		            <td><?php echo h($category['Category']['id']); ?></td>
		            <td><?php echo h($category['Category']['name']); ?></td>
		            <td>
		                <?php echo $this->Html->link($category['ParentCategory']['name'], array('controller' => 'categories', 'action' => 'view', $category['ParentCategory']['id'])); ?>
		            </td>
		            <td><?php echo h($category['Category']['slug']); ?></td>
		            <!-- <td><?php echo h($category['Category']['description']); ?></td> -->
		            <td><?php echo h($category['Category']['created']); ?></td>
		            <td><?php echo h($category['Category']['modified']); ?></td>
		            <td class="actions">
		                <?php echo $this->Html->link('View', array('controller'=> 'categories', 'action' => 'view', $category['Category']['id'], 'admin' => true), array('class'=>'button tiny success')); ?>
		                <?php echo $this->Html->link('Edit', array('controller'=> 'categories', 'action' => 'edit', $category['Category']['id'], 'admin' => true), array('class'=>'button tiny primary')); ?>
						<?php echo $this->Form->postLink(__("Delete", true), array('controller'=> 'categories', 'action'=>'delete', $category['Category']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny alert'), sprintf(__('Are you sure you want to delete '.$category['Category']['name'].'?', true), $category['Category']['id'])); ?>
		            </td>
		        </tr>
		    <?php endforeach; ?>
			</tbody>
		</table>

		<br />
		<div class="pagination">
		<?php echo $this->element('pagination-counter'); ?>

		<?php echo $this->element('pagination'); ?>
		</div>
	</div>
</div>