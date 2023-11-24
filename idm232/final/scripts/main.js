// function toggleCheckbox(checkboxId) {
//   var checkbox = document.getElementById(checkboxId);
//   checkbox.checked = !checkbox.checked;
// }

window.addEventListener('load', function () {
  restoreCheckboxState();
});

function toggleCheckbox(checkboxId) {
  var checkbox = document.getElementById(checkboxId);

  // If the checkbox is already checked, do nothing
  if (checkbox.checked) {
    return;
  }

  // Uncheck all checkboxes
  uncheckAllCheckboxes();

  // Check the clicked checkbox
  checkbox.checked = true;

  // Store the checked checkbox ID
  storeCheckboxState(checkboxId);
}

function storeCheckboxState(checkboxId) {
  // Store the checked checkbox ID in session storage
  sessionStorage.setItem('checkedCheckbox', checkboxId);
}

function restoreCheckboxState() {
  // Retrieve the checked checkbox ID from session storage
  var checkedCheckboxId = sessionStorage.getItem('checkedCheckbox');

  // If a checkbox was checked, set its state
  if (checkedCheckboxId) {
    var checkbox = document.getElementById(checkedCheckboxId);
    if (checkbox) {
      checkbox.checked = true;
    }
  }
}

function uncheckAllCheckboxes() {
  // Uncheck all checkboxes
  var checkboxes = document.querySelectorAll('input[name="filter"]');
  checkboxes.forEach(function (cb) {
    cb.checked = false;
  });
}

function clearAllFilters() {
  // Clear the stored checkbox state in session storage
  sessionStorage.removeItem('checkedCheckbox');

  // Uncheck all checkboxes
  uncheckAllCheckboxes();

  // Redirect to the homepage
  window.location.href = "index.php";
}