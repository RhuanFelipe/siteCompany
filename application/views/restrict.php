	<section style="min-height: calc(100vh - 83px);" class="light-bg">
		<div class="container">
			<div class="row">
				<div class="col-lg-offset-3 col-lg-6 col-lg-offset-3 text-center">
					<div class="section-title">
						<h2>Área restrita</h2>
						<!--action="<?php base_url();?>restrict/ajax_login"-->
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-offset-5 col-lg-2 text-center">
					<div class="form-group">
						<a class="btn btn-link" ><i class="fa fa-user"></i></a>
						<a class="btn btn-link" href="restrict/logoff"><i class="fa fa-sign-out"></i></a>
					</div>
				</div>
			</div>
			<div class="container">
				<ul class="nav nav-tabs">
					<li class="active"><a href="#tab_courses" role="tab" data-toggle="tab">Cursos</a></li>
					<li ><a href="#tab_team" role="tab" data-toggle="tab">Equipe</a></li>
					<li ><a href="#tab_user" role="tab" data-toggle="tab">Usuários</a></li>
				</ul>
				<div class="tab-content">
				<div id="tab_courses" class="tab-pane active">
					<h2 class="text-center"><strong>Gerenciar Curso</strong></h2>
					<a id="btn_add_course" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Curso</i></a>
					<table id="dt_courses" class="table table-striped table-bordered">
						<thead>
							<tr class="tablehearder">
								<th>Nome</th>
								<th>Imagem</th>
								<th>Duração</th>
								<th>Descrição</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
				<div id="tab_team" class="tab-pane">
					<h2 class="text-center"><strong>Gerenciar Equipe</strong></h2>
					<a id="btn_add_member" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Membro</i></a>
					<table id="dt_team" class="table table-striped table-bordered">
						<thead>
							<tr class="tablehearder">
								<th>Nome</th>
								<th>Foto</th>
								<th>Descrição</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
				<div id="tab_user" class="tab-pane">
					<h2 class="text-center"><strong>Gerenciar Usuários</strong></h2>
					<a id="btn_add_user" class="btn btn-primary"><i class="fa fa-plus">&nbsp;&nbsp;Adicionar Usuário</i></a>
					<table id="dt_users" class="table table-striped table-bordered">
						<thead>
							<tr class="tablehearder">
								<th>Login</th>
								<th>Nome</th>
								<th>E-mail</th>
								<th>Ações</th>
							</tr>
						</thead>
						<tbody>
							
						</tbody>
					</table>
				</div>
			</div>
			</div>
			
		</div>
		<!-- /.container -->
	</section>

<div id="modal_course" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Cursos</h4>
			</div>
			<div class="modal-body">
				<form id="form_course">
					<input type="hidden" name="course_id">
					<div class="form-group">
						<label class="col-lg-2 control-label">Nome</label>
						<div class="col-lg-10">
							<input type="text" name="course_name" id="course_name"  class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Imagem</label>
						<div class="col-lg-10">
							<img src="" id="course_img_path" style="max-height: 400px;max-width: 400px" >
							<label class="btn btn-info btn-block">
								<i class="fa fa-upload">&nbsp;&nbsp;Importar Imagem</i>
								<input type="file" accept="image/*" name="btn_upload_course_img" id="btn_upload_course_img"  class="form-control" style="display: none;">
							</label>
							<input type="" name="course_img" id="course_img" >
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Duração</label>
						<div class="col-lg-10">
							<input type="number" name="course_duration" id="course_duration"  class="form-control" min="0">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Descrição</label>
						<div class="col-lg-10">
							<textarea type="text" name="course_description" id="course_description"  class="form-control"></textarea>
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="btn_save_course" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Salvar</button>
						<span class="help-block"></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

<div id="modal_member" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Membro</h4>
			</div>
			<div class="modal-body">
				<form id="form_member">
					<input type="hidden" name="member_id">
					<div class="form-group">
						<label class="col-lg-2 control-label">Nome</label>
						<div class="col-lg-10">
							<input type="text" name="member_name" id="member_name"  class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Foto</label>
						<div class="col-lg-10">
							<img src="" id="member_photo_path" style="max-height: 400px;max-width: 400px" >
							<label class="btn btn-info btn-block">
								<i class="fa fa-upload">&nbsp;&nbsp;Importar Foto</i>
								<input type="file" accept="image/*" name="btn_upload_member_photo" id="btn_upload_member_photo"  class="form-control" style="display: none;">
							</label>
							<input type="" name="member_photo" id="member_photo" >
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Descrição</label>
						<div class="col-lg-10">
							<textarea type="text" name="member_description" id="member_description"  class="form-control"></textarea>
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="btn_save_member" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Salvar</button>
						<span class="help-block"></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>


<div id="modal_user" class="modal fade">
	<div class="modal-dialog modal-lg">
		<div class="modal-content">
			<div class="modal-header" >
				<button type="button" class="close" data-dismiss="modal">x</button>
				<h4 class="modal-title">Usuário</h4>
			</div>
			<div class="modal-body">
				<form id="form_user">
					<input type="hidden" name="user_id">
					<div class="form-group">
						<label class="col-lg-2 control-label">Login</label>
						<div class="col-lg-10">
							<input type="text" name="user_login" id="user_login"  class="form-control" maxlength="30">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Nome Completo</label>
						<div class="col-lg-10">
							<input type="text" name="user_full_name" id="user_full_name"  class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">E-mail</label>
						<div class="col-lg-10">
							<input type="email" name="user_email" id="user_email"  class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Confirmar E-mail</label>
						<div class="col-lg-10">
							<input type="email" name="user_email_confirm" id="user_email_confirm"  class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Senha</label>
						<div class="col-lg-10">
							<input type="password" name="user_password" id="user_password"  class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group">
						<label class="col-lg-2 control-label">Confirmar Senha</label>
						<div class="col-lg-10">
							<input type="password" name="user_password_confirm" id="user_password_confirm"  class="form-control" maxlength="100">
							<span class="help-block"></span>
						</div>
					</div>

					<div class="form-group text-center">
						<button type="submit" id="btn_save_user" class="btn btn-primary"><i class="fa fa-save"></i>&nbsp;&nbsp;Salvar</button>
						<span class="help-block"></span>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>