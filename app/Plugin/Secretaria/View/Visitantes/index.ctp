<h1>Visitantes</h1>
<div>
	<h3>
		<?php echo $this->Html->link('Novo Visitante', array('plugin' => 'secretaria', 'controller' => 'visitantes', 'action' => 'add')); ?>
	</h3>
</div>
<?php echo $this->Form->create(array('Qestionario')); ?>
<h4>Filtrar por:</h4>
<select name="tipo" onChange="TrocaFitro(this.value,this.options[this.selectedIndex].innerHTML);">
	<option value="razaosocial">Razão Social</option>
	<option value="nomefantasia">Nome Fantasia</option>
	<option value="cpfcnpj">CPF</option>
	<option value="cpfcnpj">CNPJ</option>
	<option value="telefone">Telefone</option>
</select>
<div id="normal">
	<input type="text" size="50" id="texto" name="razaosocial" placeholder="Filtrar:"/>
	<input type="submit" style="margin-left:20px;" name="submit" value="Pesquisar"/>
</div>	
<?php echo $this->Form->end(); ?>
<table>
	<tr>
		<th>
			Nome:
		</th>
		<th>
			CPF:
		</th>
		<th>
			Telefone:
		</th>
		<th>
			Email:
		</th>
		<th>
			Ações:
		</th>
	</tr>
	<?php foreach ($visitantes as $visitante) { ?>
		<tr>
			<td>
				<?php echo $visitante['Visitante']['nome']; ?>
			</td>
			<td>
				<?php echo $visitante['Visitante']['cpf']; ?>
			</td>
			<td>
				<?php echo $visitante['Visitante']['fone']; ?>
			</td>
			<td>
				<?php echo $visitante['Visitante']['email']; ?>
			</td>
			<td>
				<?php echo $this->Html->link('Editar', array('plugin' => 'secretaria', 'controller' => 'visitantes', 'action' => 'edit', $visitante['Visitante']['id'])); ?>
				&nbsp;
				<?php echo $this->Html->link('Visualizar', array('plugin' => 'secretaria', 'controller' => 'visitantes', 'action' => 'view', $visitante['Visitante']['id'])); ?>
				&nbsp;
				<?php echo $this->Form->postLink('Deletar', array('action' => 'delete', $visitante['Visitante']['id']), null, __('Deseja deletar a Visitante %s?', $visitante['Visitante']['nome'])); ?>
			</td>
		</tr>
	<?php } ?>
</table>