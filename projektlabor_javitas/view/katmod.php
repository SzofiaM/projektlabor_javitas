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
    <div class="box">
      <div class="title">
            Módosítás</div>
    <form>
        <div class="field">
          <input type="text" required placeholder="Kategória neve">
        </div>
        <div class="field">
          <input type="text" required placeholder="Kategória leírása">
        </div>


        <br>
        <button type="submit" class="btn" value="Submit" onclick="return Validate()" >Módosítás</button>

    </form>
        </div>