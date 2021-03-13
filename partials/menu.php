<div id="btn-main" class="menulateral">
	<a id="open" class="abrir-cerrar" href="javascript:void(0)" onclick="mostrar()"><i class="fas fa-align-justify"></i></a>
</div>
<nav class="bar" id="sidebar">
	<a href="#" class="btn-cerrar" onclick="ocultar()">&times;</a>
	<ul class="main">
		<li><a href="CanalMusica/Album.php"><img src="http://cdn.onlinewebfonts.com/svg/img_24787.png" alt="Imagen usuario"> 
			<?php if(!empty($user)): ?>
				<?= $user['nombre'] ?>
			<?php endif;?>
		</a></li>
		<li><a href="CanalMusica/Album.php"><i class="fas fa-user-edit"> Perfil</i> </a></li>
		<li><a href="Configuraciones/conf.php"><i class="fas fa-cog"> Configuración</i> </a></li>
		<li><a href="#"><i class="fas fa-cloud-download-alt"> Descargas</i></a></li>
		<li><button type="submit" value="Iniciar sesion" class="btn btn-sm" id="cs">Cerrar sesion</button>
		</li>
	</li>
</ul>
</nav>