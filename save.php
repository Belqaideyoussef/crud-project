<?php
include 'database.php';
if(count($_POST)>0){
	if($_POST['type']==1){
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
	
		$sql = "INSERT INTO `etudiant`( `nom`, `prenom`,`adresse`) 
		VALUES ('$nom','$prenom','$adresse')";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==2){
		$id=$_POST['id'];
		$nom=$_POST['nom'];
		$prenom=$_POST['prenom'];
		$adresse=$_POST['adresse'];
		$sql = "UPDATE `etudiant` SET `nom`='$nom',`prenom`='$prenom',`adresse`='$adresse' WHERE id=$id";
		if (mysqli_query($conn, $sql)) {
			echo json_encode(array("statusCode"=>200));
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==3){
		$id=$_POST['id'];
		$sql = "DELETE FROM `etudiant` WHERE id=$id ";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}
if(count($_POST)>0){
	if($_POST['type']==4){
		$id=$_POST['id'];
		$sql = "DELETE FROM etudiant WHERE id in ($id)";
		if (mysqli_query($conn, $sql)) {
			echo $id;
		} 
		else {
			echo "Error: " . $sql . "<br>" . mysqli_error($conn);
		}
		mysqli_close($conn);
	}
}

?>