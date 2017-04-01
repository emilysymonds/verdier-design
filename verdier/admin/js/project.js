function addProject(){
		window.location.href = 'index.php?view=add';
}

function checkAddProject()
{
	with (window.document.frmAddUser) {
	
	
			submit();
		
	}
}
function deleteProject(id){
	if (confirm('Delete this project?')) {
			window.location.href = 'processProject.php?action=delete&id=' + id;
		}
	
}