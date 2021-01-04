<html>
<meta name="viewport" content="width=device-width, initial-scale=1" charset="utf-8">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div style="margin-top: 0px;">
    <?php
   include 'header.php';
    ?>
</div>


<!-- Sidebar -->
<div style="width:250px;" class="w3-sidebar w3-light-grey w3-bar-block" style="width:250px;">

  <input type="text" style="margin-left:10px;margin-top:5px;" placeholder="Keresés.." name="search">
      <button type="submit" style="margin-left:5px;margin-top:5px;"><i class="fa fa-search"></i></button>
  
 

      <h3 class="w3-bar-item">Rendezés:</h3>

<br>
  <a style="margin-left:5px;">ID szerint</a>
    <br>
  <input type="checkbox" style="height:15px; width:15px; margin-left:50px;"> Növekvő sorrend
    <span class="checkmark"></span>

    <input type="checkbox" style="height:15px; width:15px; margin-left:50px;"> Csökkenő sorrend
    <span class="checkmark"></span><br>

    <a style="margin-left:5px;">Neptun kód szerint</a>
    <br>
  <input type="checkbox" style="height:15px; width:15px; margin-left:50px;"> Növekvő sorrend
    <span class="checkmark"></span>

    <input type="checkbox" style="height:15px; width:15px; margin-left:50px;"> Csökkenő sorrend
    <span class="checkmark"></span><br>

    <a style="margin-left:5px;">Felhasználó szintje szerint</a>
    <br>
  <input type="checkbox" style="height:15px; width:15px; margin-left:50px;"> Növekvő sorrend
    <span class="checkmark"></span>

    <input type="checkbox" style="height:15px; width:15px; margin-left:50px;"> Csökkenő sorrend
    <span class="checkmark"></span><br>

   <button type="submit">Keresés</i></button><br></h3>
<br><br><br><br><br>
</div>


<!-- Táblázat -->

<table id="table"><thead><tr>
  <th>ID</th>
	<th>Neptunkód</th>
	<th>Felhasználó Szintje</th>
	<th>módosítás</th>
    </thead>
    <tbody>
  <tr>
    <td>1</td>
    <td>Admin</td>
    <td>Admin</td>
    <td ><button type="button" onclick=window.alert("Törölve");>Törlés</button> <button type="button" onclick="document.location='modositas.php'" style="right=550px ;">módosítás</button></td>
    <tbody>
  <tr>
    <td>2</td>
    <td>UWL4JU</td>
    <td>hallgató</td>
    <td ><button type="button" onclick=window.alert("Törölve");>Törlés</button> <button type="button" onclick="document.location='modositas.php'" style="right=550px ;">módosítás</button></td>
    <tr>
    <td>2</td>
    <td>ZHX4U5</td>
    <td>hallgató</td>
    <td ><button type="button" onclick=window.alert("Törölve");>Törlés</button> <button type="button" onclick="document.location='modositas.php'" style="right=550px ;">módosítás</button></td>
    <tr>
    <td>2</td>
    <td>A3LU4X</td>
    <td>hallgató</td>
    <td ><button type="button" onclick=window.alert("Törölve");>Törlés</button> <button type="button" onclick="document.location='modositas.php'" style="right=550px ;">módosítás</button></td>
 
    <?php
    //include_once(../controller/listusers.php)
    ?>
<style>
#table {
	width:70%;
	border:2px solid black;
    margin-top: 50px;
    margin-left: 25%;
  background-color: white;
}
td {
    border:2px solid black;
    text-align: center;
}
button {
    background-color:#401b58;
  border: none;
  color: white;
  padding: 10px 20px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 12px;
  border-radius: 12px;
}
</style>
</tbody></table>

<div style="background-color: rgb(255, 233, 198)">
<?php 
    include 'footer.php';
    ?>
</div>
</html>


