<h1>Roles</h1>
<?php
$id = $_GET['id'] ?? 0;
$id = intval($id);

$roles = new roles();

if($id > 0){

    $roles = $roles->getFindById($id);

    if($roles){
        echo $roles['role_name'];
    }else{
        echo "aucun résultat";
    }


}else{

    foreach ($roles->getFindAll() as $role){
        echo '<pre>';
        echo $role['role_name'];
        echo '</pre>';
    }
}