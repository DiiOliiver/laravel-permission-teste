<p align="center"><img src="https://laravel.com/assets/img/components/logo-laravel.svg"></p>

## Bibliotecas utilizadas

<p align="center">
	<a href="https://laravel.com/docs/5.4">Laravel 5.4</a><br>
	<a href="https://github.com/spatie/laravel-permission">spatie/laravel-permission</a><br>
	<a href="https://github.com/laravelcollective/html">laravelcollective/html</a><br>
<p>

<p>Este pacote permite que os usuários sejam associados a Permission e Roles. Cada Role está associada a várias Permissions. A Role e a Permission são modelos Eloquent regulares. Eles exigem um name e podem ser criados assim:</p>
<p>Ex: $role = Role::create(['name' => 'writer']);<br>
	$permission = Permission::create(['name' => 'edit articles']);</p>

<p>
Role::create(['name' => 'prestador']);<br>
Criado Role writer (ex: Super-admin, Admin, Prestador...)<br>
Permission::create(['name' => 'write post']);<br>
Criado Permission write post (ex: Visualizar, Editar, Criar e Excluir)<br>
<br><br>
Uma Permission pode ser atribuída a uma Role usando um destes métodos:<br>
Método 01:<br>
$role = Role::findById(1);<br>
$permission = Permission::findById(1);<br>
$role->givePermissionTo($permission);<br>
<br><br>
Método 02:<br>
$permission = Permission::findById(1);<br>
$role = Role::findById(1);<br>
$permission->assignRole($role);<br>
<br><br>
Uma Permission pode ser removida de uma Role usando um destes métodos:<br>
Método 01:<br>
$role = Role::findById(1);<br>
$permission = Permission::findById(2);<br>
$permission->removeRole($role);<br>
<br><br>
Método 02:<br>
$role = Role::findById(1);<br>
$permission = Permission::findById(1);<br>
$role->revokePermissionTo($permission);<br>
<br><br>
Adicionando uma Permission para um usuário<br>
auth()->user()->givePermissionTo('edit post');<br>
<br><br>
Adicionando uma Role para um usuário<br>
auth()->user()->assignRole('admin');<br>
<br><br>
Verifica quais Permissions o usuário possui<br>
dd(auth()->user()->permissions);<br>
<br><br>
Adicionando uma Permission para um Role<br>
$permission = Permission::create(['name' => 'write post']);<br>
$role = Role::findById(1);<br>
$role->givePermissionTo($permission);</p><br>
