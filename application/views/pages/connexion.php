
<div class="row justify-content-md-center">
    <div class="col-lg-6 col-12">
	<!-- <h1><?= $title ?></h1> -->
        <h2 class="text-center" id="connexion">Connectez vous à votre espace admin</h2>
		

			<!-- <?//= form_open('connexion'); ?> -->
			<form name="" method="post" action="<?= base_url()?>connexion">
			
				<?= form_error('pseudo'); ?>
				<div class="form-group row" >
					<label for="pseudo" class="col-sm-3 col-form-label" >Votre pseudo </label>
					<div class="col-sm-9">
					<input type="text" class="form-control" name="pseudo" value="<?= set_value('pseudo') ?>" id="pseudo"  placeholder="Saisissez votre pseudonyme" >
					</div>
				</div>
				<?= form_error('password'); ?>
				<div class="form-group row">
					<label for="password" class="col-sm-3 col-form-label" >Votre mot de passe </label>
					<div class="col-sm-9">
					<input type="password" class="form-control" name="password" value="<?= set_value('password') ?>" id="password"  placeholder="Saisissez votre mot de passe" >
					</div>
				</div>

				<div class="form-group row" >
					<div class="col-sm-10 text-center">
			
                    <button class="btn btn-primary btn-lg  text-light font-weight-bold" type="submit">Envoyer</button>

					</div>				
				</div>
			</form>
			<?//= form_close(); ?> 
	</div>
</div>	
