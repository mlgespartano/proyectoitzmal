<div class="modal" role="dialog" tabindex="-1" id="modal-delete-{{$sol->id_reserva}}">
	{!!Form::open(array('action'=>array('SolicitudesController@destroy',$sol->id_reserva),'method'=>'delete'))!!}

	<div class="modal-dialog">
		<div class="modal-content">
			<div class="header">
				<button  type="button" class="close" data-dismiss="modal" aria-label="close">

					<span aria-hidden="true">x</span>
					
				</button>
				<h4 class="modal-title">Eliminar solicitud: {{$sol->id_reserva}}</h4>
			</div>

			<div class="modal-body">
				<p>¿Estas seguro de procesar la solicitud?</p>
			</div>

			<div class="modal-footer">
				<button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button>
				<button type="submit" class="btn btn-primary">Confirmar</button>
			</div>

		</div>
	</div>

	{!!Form::close()!!}
	
</div>