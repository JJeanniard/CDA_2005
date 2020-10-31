<h1>Users</h1>
<?php
$id = $_GET['id'] ?? 0;
$id = intval($id);

$users = new Users();

if($id > 0){

    $user = $users->getFindById($id);

    if($user){
        echo $user['user_name'];
    }else{
        echo "aucun résultat";
    }


}else{
    foreach ($users->getFindAll() as $user){
        echo '<pre>';
        echo $user['user_name'];
        echo '</pre>';
    }
}