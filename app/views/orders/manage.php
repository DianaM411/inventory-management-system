<div class="row">
	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<h3 class="panel-title">Orders <span class="label label-success"><?=DB::num_rows(TABLE_ORDERS) ?></span> 
				</h3>

			</div>
			<div class="panel-body">
				<?php $this->load->view('alert') ?>
				<a href="<?=site_url('orders/create') ?>" class="btn btn-success pull-left" style="border-radius:0%;">New Order</a>
				<br/><br/>
				<table class="table table-striped table-hover" id="datatable">
					<thead>
						<tr>
							<th>#</th>
							<th>Order Number</th>
							<th>Customer Name</th>
							<th>Total Amount</th>
							<th>Created On</th>
							<th>Action</th>
						</tr>
					</thead>
					<tbody>
						<?php if($orders): ?>
							<?php $count = 1; ?>
							<?php foreach($orders as $row): ?>
								<tr>
									<td><?=$count++ ?></td>
									<td id="order_number-<?=$row->order_id ?>"><?=$row->order_number ?></td>
									<td id="customer_name-<?=$row->order_id ?>"><?=ucwords($row->customer_name) ?></td>
									<td id="order_total-<?=$row->order_id ?>">$<?=number_format($row->order_total,2) ?></td>
									<td><?=$row->created_at ?></td>
									<td>
										<div class="btn-group">
											<button type="button" class="btn btn-primary dropdown-toggle waves-effect" style="border-radius:0%;" data-toggle="dropdown" aria-expanded="true"> More <span class="caret"></span> </button>
											<ul class="dropdown-menu">
												<li><a href="<?=site_url('orders/print_order/'.$row->order_id) ?>" target="_blank">Print</a></li>
												<li><a href="<?=site_url('orders/delete/'.$row->order_id)?>" onclick="return confirm('Are you sure?')">Delete</a></li>
											</ul>
										</div>
									</td>
								</tr>
							<?php endforeach; ?>
						<?php endif; ?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>
