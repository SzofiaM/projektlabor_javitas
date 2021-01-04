<!DOCTYPE html>
<html>
<head>

<meta charset="UTF-8">
<link rel="stylesheet">
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
/* Button used to open the contact form - fixed at the bottom of the page */
.open-button {
  background-color: #401b58;
  color: white;
  padding: 16px 20px;
  border: none;
  cursor: pointer;
  border-radius: 30px 30px 30px 30px;
}

/* The popup form - hidden by default */
.form-popup {
  display: none;
  position:absolute;
  top: 12%;
  left: 45%;
  border: 3px solid #401b58;
  z-index: 9;
}

/* Add styles to the form container */
.form-container {
  max-width: 350px;
  padding: 20px;
  background-color: white;
}

/* Full-width input fields */
.form-container input[type=text], .form-container input[type=tipus] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  border: none;
  background: #f1f1f1;
}

/* When the inputs get focus, do something */
.form-container input[type=text]:focus, .form-container input[type=tipus]:focus {
  background-color: #ddd;
  outline: none;
}

/* Set a style for the submit/login button */
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

/* Add a red background color to the cancel button */
.form-container .cancel {
  background-color: red;
}
</style>
</head>
<body>
<div>

	<p align="right">
		<input type="button"	style="width: 210px; right: 500px;" class="open-button"  onclick="openForm()" value="új elem hozzáadása">
 		<input type="button" 	onclick="document.location='logout.php'" class="button" value="Kijelentkezes">
	</p>

	<div class="form-popup" id="myForm">
  <form class="form-container">
    <h1>Új elem feltöltése</h1>

    <label for="name"><b>Neve</b></label>
	<input type="text" placeholder="Ird be a fájl nevét" name="file" required>
    
    <label for="tipe"><b>Leírás:</b></label>
    <input type="tipus" placeholder="A fájl leírása" name="type" required>
    <input type="checkbox" checked="checked" style="height:25px; width:25px;"> Publikus
    <span class="checkmark"></span>

    <label style="margin-left:13px;" for="cars">Kategória:</label>
  <select>
    <option value="0">Gazdasági</option>
    <option value="1">Informatikai</option>
    <option value="2">Mérnöki</option>
    <option value="2">Default</option>
  </select><br>
  
  <br><button type="button" class="btn"  Style="background-color:Blue;">Új Fájl Hozzáadása</button>
    <button type="button" onclick=window.alert("Sikeresen_feltöltve") class="btn">Feltöltés</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Bezár</button>
  </form>
</div>

<table style="margin-left:10%;" id="table"><thead><tr>
	<th style="width:50px;">ID</th>
	<th style="width:250px;">Fájl neve</th>
  <th style="width:150px;">Neptun kód</th> 
  <th style="width:150px;">Kategória</th> 
  <th style="width:500px;">Leírás</th> 
	<th style="width:180x;">Utolsó modosítás</th>
	<th style="width:150px;">Méret</th>
	<th style="width:350px;">Műveletek</th>
    </thead>
    <tbody>
  <tr>
    <td>1</td>
	<td>Beadandó.pdf</td>
  <td>UWL4JU</td>
  <td>Gazdasági</td>
  <td>Gazdaságtudományi szakos hallgatók számára</td>
	<td>2020.12.08.</td>
	<td>178 KB</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='modositmain.php'" style="right=550px ;">módosítás</button>
  </td>
  <tr>
    <td>2</td>
	<td>codes.php</td>
  <td>ZHX4U5</td>
  <td>Informatikai</td>
  <td>Informatikai szakos hallgatók számára</td>
	<td>2020.11.25.</td>
	<td>5 KB</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='modositmain.php'" style="right=550px ;">módosítás</button>
  </td>
  <tr>
    <td>3</td>
	<td>szerk.txt</td>
  <td>A3LU4X</td>
  <td>Mérnöki</td>
  <td>Mérnöki szakos hallgatók számára</td>
	<td>2020.12.01.</td>
	<td>1 KB</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='modositmain.php'" style="right=550px ;">módosítás</button>
  </td>
  <tr>
    <td>4</td>
	<td>file.png</td>
  <td>UWL4JU</td>
  <td>Gazdasági</td>
  <td>Gazdaságtudományi szakos hallgatók számára</td>
	<td>2020.12.09.</td>
	<td>315 B</td>
  <td >
      <button type="button" onclick=window.alert("Törölve")>Törlés</button> 
      <button type="button" onclick="document.location='modositmain.php'" style="right=550px ;">módosítás</button>
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
  background-color: white;
}
td {
    border:2px solid black;
    text-align: center;
}
</style>
</tbody></table>


<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>


</body>
</html>