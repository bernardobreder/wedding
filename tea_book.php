<div class="modal fade" id="myModal" tabindex="-1" role="dialog"
	aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal"
					aria-label="Close">
					<span aria-hidden="true">&times;
					</span>
				</button>
				<h4 class="modal-title" id="myModalLabel">Reservar um Presente</h4>
			</div>
			<div class="modal-body">
				<p>
					Para reservar um presente, basta preencher os campos abaixo:
				</p>
				<div class="form-group has-feedback book-form-name">
					<label for="book-name">Nome:</label>
					<input type="text" class="form-control" id="book-name" placeholder="Nome completo" onkeyup="teaBookKey()">
				</div>
				<div class="form-group has-feedback book-form-email">
					<label for="book-email">Email:</label>
					<input type="email" class="form-control" id="book-email" placeholder="Email" onkeyup="teaBookKey()">
				</div>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-danger book-submit" data-dismiss="modal" disabled="true" onclick="teaBook(${product_id}, $('#book-name').val(), $('#book-email').val())">Reservar</button>
				<button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
			</div>
		</div>
	</div>
</div>