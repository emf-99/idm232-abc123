document.addEventListener("DOMContentLoaded", function () {
  const clearAllButton = document.querySelector(".clearAllButton");
  const checkboxes = document.querySelectorAll('input[type="checkbox"]');

  clearAllButton.addEventListener("click", function () {
    checkboxes.forEach(function (checkbox) {
      checkbox.checked = false;
    });
  });
});