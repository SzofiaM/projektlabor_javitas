<!DOCTYPE html>
<html>

<head>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div style="margin-top: 0px;">
    <?php
   include 'header.php';
    ?>
</div>
<style>

.button{
	color: white;
	margin-top: 0px;
    border-radius: 30px 30px 30px 30px;
	width: 180px;
	background-color: #401b58;
  	padding: 14px 25px;
  	text-align: center;
  	text-decoration: none;
  	display: inline-block;

}
.open-button {
  background-color: #401b58;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  border-radius: 30px 30px 30px 30px;
}

/* popup form - alapértelmezetten rejtett */
.form-popup {
  display: none;
  position:absolute;
  top: 12%;
  left: 45%;
  border: 3px solid #401b58;
  z-index: 9;
}

/* a poup teste */
.form-container {
  max-width: 350px;
  padding: 20px;
  background-color: white;
}

.form-container input[type=text], .form-container input[type=tipus] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}



/* Gomb style */
.form-container .btn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  width: 100%;
  margin-bottom: 10px;
  opacity: 0.8;
}


.form-container .cancel {
  background-color: red;
}
</style>
</head>
<body>



<!-- Hozzáadás PopUp -->

<div>

	<p align="right">
		<input type="button"	style="width: 210px; right: 500px;" class="open-button"  onclick="openForm()" value="új elem hozzáadása">
	</p>

	<div class="form-popup" id="myForm">
  <form class="form-container">
    <h1>Új elem feltöltése</h1>

    <label for="name"><b>Kategória neve:</b></label>
	<input type="text" placeholder="Ird be a kategória nevét" name="file" required>
    
    <label for="tipe"><b>Leírása:</b></label>
    <input type="tipus" placeholder="A kategória leírása" name="type" required>


  
  <br><button type="button" class="btn"  Style="background-color:Blue;">Új kategória Hozzáadása</button>
    <button type="button" onclick=window.alert("Sikeresen_feltöltve") class="btn">Feltöltés</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Bezár</button>
  </form>
</div>






<table id="table"><thead><tr>
	<th style="width: 50px;">ID</th>
	<th style="width: 200px;">Kategória neve</th>
  <th style="width: 120px;">Leírása</th> 
	<th style="width: 350px;">Műveletek</th>
    </thead>
    <tbody>
  <tr>
    <td>1</td>
	<td>Deafault</td>
  <td>alapértelmezett kategória. Nem törölhető!</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='katmod.php'" style="right=550px ;">módosítás</button>
  </td>
  <tr>
  <td>2</td>
	<td>Gazdasági</td>
  <td>Gazdaságtudományi karos hallgatók számára</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='katmod.php'" style="right=550px ;">módosítás</button>
  </td>
  <tr>
  <td>3</td>
	<td>Mérnöki</td>
  <td>Mérnöki karos hallgatók számára</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='katmod.php'" style="right=550px ;">módosítás</button>
  </td>
  <tr>
  <td>3</td>
	<td>Informatika</td>
  <td>Műszaki Informatikai karos hallgatók számára</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='katmod.php'" style="right=550px ;">módosítás</button>
  </td>

<style>
button {
    background-color:#401b58;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  border-radius: 8px;
}
#table {
	width:90%;
	border:2px solid black;
    margin-top: 50px;
    margin-left: 5%;
  background-color: white;
}
td {
    border:2px solid black;
    text-align: center;
}
</style>
</tbody></table>


    
</div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
<div>
<?php
    include 'footer.php';
    ?>
</div>
</body>
</html>


