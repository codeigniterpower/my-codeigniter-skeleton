
<?php
//$column_width = (int)( 80 / count($columns));

if(!empty($list)){ ?>
<div class="bDiv" ><!--
	<table cellspacing="0" cellpadding="0" border="0" id="flex1"  class="table table-bordered tablesorter"> -->
	<table cellspacing="0" cellpadding="0" border="0"  class="table table-bordered tablesorter">
		<thead>
			<tr class="hDiv">
				<?php foreach($columns as $column){?>
				<th width="<?php //echo $column_width.'%'?>">
					<div class="text-left field-sorting <?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?><?php echo $order_by[1]?><?php }?>"
						rel="<?php echo $column->field_name?>">
						<?php echo $column->display_as?>
					</div>
				</th>
				<?php }?>
				<?php if(!$unset_delete || !$unset_edit || !empty($actions)){?>
				<th class="no-sorter" width="10%">
						<?php echo $this->l('list_actions'); ?>
				</th>
				<?php }?>
			</tr>
		</thead>
		<tbody>
			<?php foreach($list as $num_row => $row){ ?>
			<tr  <?php if($num_row % 2 == 1){?>class="erow"<?php }?>>
				<?php foreach($columns as $column){?>
				<td width="<?php //echo $column_width.'%'?>" class="<?php if(isset($order_by[0]) &&  $column->field_name == $order_by[0]){?>sorted<?php }?>">
					<div class="text-left"><?php echo $row->{$column->field_name} != '' ? $row->{$column->field_name} : '&nbsp;' ; ?></div>
				</td>
				<?php }?>
				<?php if(!$unset_delete || !$unset_edit || !empty($actions)){?>
				<td align="left" width="20%">
					<div class="tools">
						<div class="btn-group">
							<button class="btn">Action</button>
							<button class="btn dropdown-toggle" data-toggle="dropdown">
								<span class="caret"></span>
							</button>
							<ul class="dropdown-menu">
								<?php if(!$unset_edit){?>
								<li>
									<a href="<?php echo $row->edit_url?>" title="<?php echo $this->l('list_edit')?> <?php echo $subject?>" class="edit_button">
										<i class="icon-pencil"></i>
										<?php echo $this->l('list_edit') . ' ' . $subject; ?>
									</a>
								</li>
								<?php }?>
								<?php if(!$unset_delete){?>
								<li>
									<a href="<?php echo $row->delete_url?>" title="<?php echo $this->l('list_delete')?> <?php echo $subject?>" class="delete-row" >
										<i class="icon-trash"></i>
										<?php echo $this->l('list_delete') . ' ' . $subject; ?>
									</a>
								</li>
								<?php }?>
								<?php
								if(!empty($row->action_urls)){
									foreach($row->action_urls as $action_unique_id => $action_url){
										$action = $actions[$action_unique_id];
										?>
										<li>
											<a href="<?php echo $action_url; ?>" class="<?php echo $action->css_class; ?> crud-action" title="<?php echo $action->label?>"><?php
											if(!empty($action->image_url))
											{
												?><img src="<?php echo $action->image_url; ?>" alt="<?php echo $action->label?>" /><?php
											}
											?></a>
										</li>
										<?php }
									}
									?>
								</ul>
							</div>
							<div class="clear"></div>
						</div>
					</td>
					<?php }?>
				</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>
<?php }else{ ?>
	<br/><?php echo $this->l('list_no_items'); ?><br/><br/>
<?php }?>