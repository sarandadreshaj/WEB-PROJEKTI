
<style>


.content-table {
  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  width: 100%;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}
#button{
  background-color: #23908c; /* Green */
  border: none;
  color: white;
  padding: 15px 32px;
  margin-top: 25px;
  margin-left: 25px;
}
#ahref{
  color: white;
  text-decoration: none;
}

.content-table thead tr {
  background-color: #23908c;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.link{
    text-decoration: none;
    color: red;
    font-size: 17px;
}
.first-link{
  color: black;
  font-size: 22px;
  padding-left: 50%;
  position: relative;
  top: 20px;
}
.top-links{
    font-size: 30px;
    color: black;
    padding: 30px;
    text-decoration: none;
}
.bttn{

  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 10px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;  
  cursor: pointer;
  border-radius: 4px;

}
.bttn2{

background-color: #f44336;;
border: none;
color: white;
padding: 10px 22px;
text-align: center;
display: inline-block;
font-size: 16px;  
cursor: pointer;
border-radius: 4px;

}
.ahreff{
  text-decoration: none;
  color: white;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="style.css" type="text/css" rel="stylesheet"> 
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Baloo+2&display=swap" rel="stylesheet"> 
  <script src="https://kit.fontawesome.com/4480201544.js" crossorigin="anonymous"></script>
  <title>Document</title>
</head>
<body>
<?php
include_once 'inc/header.php';
require_once 'menuControllers.php';

?>
<button id="button"><a id="ahref" href="create-menu.php">Push an item!</a></button>
<div>
    <table class="content-table">
        <thead>
            <tr>
              <th>Menu image</th>
              <th>Menu title</th>
              <th>Menu category</th>
              <th>Menu price</th>
              <th>Edit</th>
              <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
                $m = new MenuController;
                $allMenu = $m->readData();
                foreach($allMenu as $menu):?>
            <tr>
                <td><?php echo $menu['menu_image'] ?></td>
                <td><?php echo $menu['menu_title'] ?></td>
                <td><?php echo $menu['menu_category']?></td>
                <td><?php echo $menu['menu_price'] ?></td>
                <td><button class="bttn"><a href="edit-menu.php?id=<?php echo $menu['id']; ?>" class="ahreff">Edit</a></button></td>
                <td><button class="bttn2"><a href="delete-menu.php?id=<?php echo $menu['id'] ?>" class="ahreff">Delete</a></button></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>


<?php
        include 'inc/footer.php';
    ?>
    <script src="script.js"></script>
    <script src="slider.js"></script>
</body>
</html>