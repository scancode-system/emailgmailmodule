<div class="tab-pane {{ ($tab=='setting_mail')?'show active':'' }}" >
	@alert_errors()
	@alert_success()
	{{ Form::model($setting_email_gmail, ['route' => 'setting_email_gmail.update', 'method' => 'put']) }}
	<div class="row">
		<div class="col-md-6">
			<div class="form-group">
				{{ Form::label('title', 'Título') }}
				{{ Form::text('title', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('subject', 'Assunto') }}
				{{ Form::text('subject', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('body', 'Corpo') }}
				{{ Form::textarea('body', null, ['class' => 'form-control']) }}
			</div>			
		</div>
		<div class="col-md-6">
			<div class="form-group">
				{{ Form::label('username', 'Email') }}
				{{ Form::text('username', null, ['class' => 'form-control']) }}
			</div>
			<div class="form-group">
				{{ Form::label('password', 'Senha') }}
				{{ Form::password('password', ['class' => 'form-control']) }}
			</div>
		</div>
	</div>
	{{ Form::button('<i class="fa fa-save"></i><span>Salvar</span>', ['class' => 'btn btn-brand btn-primary', 'type' => 'submit']) }}
	{{ Form::close() }}
</div>
