function addProject(){
		window.location.href = 'index.php?view=add';
}

function checkAddProject()
{
	with (window.document.frmAddUser) {
	
	
			submit();
		
	}
}
function deletePrensa(id){
	if (confirm('Eliminar esta imagen?')) {
			window.location.href = 'processPrensa.php?action=delete&id=' + id;
		}
	
}