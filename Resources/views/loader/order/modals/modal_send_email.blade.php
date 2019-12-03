<div class="modal fade" id="modal_send_email" tabindex="-1" role="dialog" aria-labelledby="modal_send_email" aria-hidden="true">
	<div class="modal-dialog" role="document">
		<div class="modal-content">
			{{ Form::open(['route' => ['emailgmail.send', $order]]) }}
			<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Enviar Email</h5>
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			<div class="modal-body">
				<div class="form-group">
					{{ Form::label('to', 'Para') }}
					{{ Form::text('to', $order->order_client->email, ['class' => 'form-control']) }}
				</div>
			</div>
			<div class="modal-footer">
				{{ Form::button('<i class="fa fa-envelope-o"></i><span>Enviar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
			</div>
			{{ Form::close() }}
		</div>
	</div>
</div>