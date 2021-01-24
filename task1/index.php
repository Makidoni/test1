<?php 
//я все же визуализировала у себя подключение к БД
    include 'includes/database.php';
    include 'includes/user.php';
    include 'includes/viewing.php';
	include 'task2.php';
    
 if(isset($_POST['add']))
  { $id = new Item ($_POST["id"]);
	
  }
   
?>


<!DOCTYPE html>
<html>
  <head>
    <title></title>
  </head>
  <body>
    <div>
        <form action="<?php echo ( $_SERVER['PHP_SELF'] ); ?>" method="post">
            <div>
                <label for="id">ID</label>
                <input type="text" id="id" placeholder="" name="id" value="">    
            </div>
            <button type="submit" name="add">Отправить</button><br><br>

        </form>

        <form action="<?php echo ( $_SERVER['PHP_SELF'] ); ?>" method="post">
    <div>
        <label for="clientName">Name</label>
        <input type="text" id="clientName" name="name" value="<?php $id->element1(); ?>" >
    </div>
    <div>
        <label for="clientSt">Status</label>
        <input type="text" id="clientSt" name="status" value="<?php $id->element2(); ?>">
    </div>
   		<button type="submit" name="save">Cохранить</button>


</form>
            
    </div>
	  
  </body>
</html> 