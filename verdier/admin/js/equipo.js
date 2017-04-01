function addPerson(){
		window.location.href = 'index.php?view=add';
}
function deleteMember(userId)
{
	if (confirm('Delete this user?')) {
		window.location.href = 'processTeam.php?action=delete&userId=' + userId;
	}
}
function checkAddUserForm()
{
	with (window.document.frmAddUser) {
	
		if (isEmpty(txtUserName, 'Ingrese nombre')) {
			return;
		} else if (isEmpty(txtTitulo, 'Ingrese titulo')) {
			return;
		} else {
			submit();
		}
	}
}
function modifyMember(id)
{
	window.location.href = 'index.php?view=modify&userId=' + id;
}
