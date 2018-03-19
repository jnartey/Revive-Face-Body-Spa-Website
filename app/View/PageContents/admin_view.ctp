<div class="row">
	<div class="large-12 columns">
		<div class="module yellow">
			<h2>
				<?php echo $current_page.strip_tags($page_parent[0]['PageContent']['title']); ?> <a href="#"><?php echo $header; ?></a>
			</h2>
		</div>
	</div>
</div>
<div class="row">
	<div class="large-2 columns admin-left-panel">
		<?php echo $this->element('admin'.DS.'page_menu'); ?>
	</div>
	<div class="large-10 columns content">
		<?php echo $this->Session->flash(); ?>
		<div class="twelve columns">
			<?php 
				if($page_parent[0]['PageContent']['category']):
					echo $this->Html->link(__(("&lsaquo; back"), true), array('controller'=> 'pageContents', 'action'=>'view', $page_parent[0]['PageContent']['category'], 'admin' => true), array('escape' => false, 'class'=>'button small primary')); 
				else:
					echo $this->Html->link(__(("&lsaquo; back"), true), array('controller'=> 'pageContents', 'action'=>'index', 'admin' => true), array('escape' => false, 'class'=>'button small primary'));
				endif;
			
				if($page_parent[0]['PageContent']['page_style'] == 1 && $page_parent[0]['PageContent']['add_content'] == 1){
					echo $this->Html->link(__(("Add Album"), true), array('controller'=> 'pageContents', 'action'=>'add_album', $page_parent[0]['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); 
				}
				
				if($page_parent[0]['PageContent']['add_content'] == 1 && $page_parent[0]['PageContent']['page_style'] != 1){
					echo $this->Html->link(__(("Add"), true), array('controller'=> 'pageContents', 'action'=>'add', $page_parent[0]['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); 
				}
				
				echo $this->Html->link(__(("Edit"), true), array('controller'=> 'pageContents', 'action'=>'edit', $page['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button small secondary')); 
				if($page_parent[0]['PageContent']['category']){
					echo $this->Form->postLink(__("Delete", true), array('controller'=> 'pageContents', 'action'=>'delete', $page['PageContent']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button small alert'), sprintf(__('Are you sure you want to delete '.$page['PageContent']['title'].'?', true), $page['PageContent']['id'])); 
				}
			?>
		</div>
		<div class="large-10 columns">
			<div class="panel">
				<?php
					echo '<p><strong>'.__('Page Title: ').'</strong><br /></p>'; 
					echo $page['PageContent']['title'].'<br />';
					if($page['PageContent']['content']){
						echo '<p><strong>'.__('content').'</strong></p>'; 
						echo $page['PageContent']['content'].'<br /><br />';
					}
					
					if($page['PageContent']['page_image']){
						echo $this->html->image('pages'.DS.'thumb'.DS.'large'.DS.$page['PageContent']['page_image'], array('title' => ''));
					}
				?>
			</div>
		</div>
		<div class="large-12 columns">
			<?php if($pages){ ?>
			<table cellspacing="0">
				<thead>
					<tr>
						<th>
							<?php echo $this->Paginator->sort('title');?>
						</th>
						<th>
							<?php echo __('Actions');?>
						</th>
					</tr>
				</thead>
				<tbody>
					<?php
						foreach ($pages as $page):
					?>
					<tr>
						<td>
							<?php echo $page['PageContent']['title']; ?>
						</td>
						<td class="actions">
							<?php 
								$gallery = null;
								$collect = AppController::getChildren('PageContent', 'category', $page['PageContent']['id']);
								if($collect){
									$count = '('.count($collect).')';
								}else{
									$count = null;
								}
								
								$gallery = AppController::getData('Gallery', 'link_id', $page['PageContent']['id']);
																
								echo $this->Html->link(__(("view ".$count), true), array('controller'=> 'pageContents', 'action'=>'view', $page['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button tiny primary'));
								
								if($gallery){
									echo $this->Html->link(__(("Edit"), true), array('controller'=> 'pageContents', 'action'=>'edit_album', $page['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button tiny secondary'));
								}else{
									echo $this->Html->link(__(("Edit"), true), array('controller'=> 'pageContents', 'action'=>'edit', $page['PageContent']['id'], 'admin' => true), array('escape' => false, 'class'=>'button tiny secondary'));
								}
								if($gallery){
									echo $this->Html->link(__("Add Images", true), array('controller'=> 'galleries', 'action'=>'view', $gallery['Gallery']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny success'));
								}
								if($page['PageContent']['page_style'] == 1 && !$gallery){
									echo $this->Html->link(__("Add Album", true), array('controller'=> 'pageContents', 'action'=>'add_album', $page['PageContent']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny success'));
								}
								echo $this->Form->postLink(__("Delete", true), array('controller'=> 'pageContents', 'action'=>'delete', $page['PageContent']['id'], 'admin' => true), array('escape'=>false, 'class'=>'button tiny alert'), sprintf(__('Are you sure you want to delete '.$page['PageContent']['title'].'?', true), $page['PageContent']['id']));
							?>
						</td>
					</tr><?php endforeach; ?>
				</tbody>
			</table><?php } ?>
		</div>
		<div class="row">
			<div class="large-12 columns">
				<div class="pagination">
					<?php 
						echo '<span class="unavailable">&laquo;</span>'.$this->Paginator->prev(__('prev', true), array(), null, array('class'=>'unavailable'));
						echo $this->Paginator->numbers();
						echo $this->Paginator->next(__('next', true), array(), null, array('class'=>'unavailable')).'<span class="unavailable">&raquo;</span>';
					?>
				</div>
			</div>
		</div>
	</div>
</div>
