<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/reg.css">

<div style="margin-top: -10px; margin-left: -10px;">
    <?php
   include 'header.php';
    ?>
</div>
</head>

<body>
    <div class="box" style="height:450px;">
      <div class="title">
Módosítás</div>
    <form>
        <div class="field">
          <input type="text" required placeholder="Fájl neve"><br>
          <br>
          <input type="text" required placeholder="Kategória"><br>
          <br>
          <input type="text" required placeholder="Leírás"><br>
</div>

        <br>
        <button style="margin-top: 150px;" type="submit" class="btn" value="Submit" onclick="return Validate()" >Módosítás</button>

    </form>
        </div>