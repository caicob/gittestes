<div class="container-fluid rounded border shadow mt-2 mb-2">
	<form action="/?forms=contato" method="POST" role="form">
		<div class="modal-header ">
			<h5 class="modal-title">Contato</h5>
		</div>
		<div class="modal-body">
			<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text" id="Name">Nome :</span>
				</div>
				<input type="text" class="form-control" placeholder="Digite seu nome! Ex:. Fulano da silva" aria-label="Name" aria-describedby="Name" name="name">
			</div>
			<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text" id="email">E-mail :</span>
				</div>
				<input type="text" class="form-control" placeholder="Digite seu e-mail! Ex:. exemplo@exemplo.com" aria-label="email" aria-describedby="email" name="email">
			</div>
			<div class="input-group mb-1">
				<div class="input-group-prepend">
					<span class="input-group-text" id="subject">Assunto :</span>
				</div>
				<input type="text" class="form-control" placeholder="Digite o assunto a ser tratado! Ex:. Dificuldades com botão x" aria-label="subject" aria-describedby="subject" name="subject">
			</div>
			<div class="form-group">
				<label for="message">Mensagem :</label>
				<textarea class="form-control" id="message" rows="5" name="message"></textarea>
			</div>
		</div>
		<div class="modal-footer">
			<a href="javascript:void(0)" onClick="history.go(-1); return false;" class="btn btn-secondary">Voltar</a>
			<button type="submit" class="btn btn-primary">Enviar!</button>
		</div>
	</form>
</div>