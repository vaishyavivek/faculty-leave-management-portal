//open the corresponding dropdown menu
function showDropdownMenu(btnId) {
    closeDropMenus();
    var dropMenu = document.getElementById(btnId);
    if(dropMenu.style.display !== 'block')
        dropMenu.style.display = 'block';
    else
        dropMenu.style.display = 'none';
}

// Close the dropdown menu if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropButton')) 
    closeDropMenus();
}

function closeDropMenus(){
    var dropdowns = document.getElementsByClassName("dropdown-content");
    for (var i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.style.display === 'block') {
        openDropdown.style.display = 'none';
      }
    }
}