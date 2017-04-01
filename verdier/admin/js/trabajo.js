function addProject(){
		window.location.href = 'index.php?view=add';
}

function checkAddProject()
{
	with (window.document.frmAddUser) {
	
	
			submit();
		
	}
}
function deleteTrabajo(id){
	if (confirm('Eliminar este trabajo?')) {
			window.location.href = 'processTrabajo.php?action=delete&id=' + id;
		}
	
}