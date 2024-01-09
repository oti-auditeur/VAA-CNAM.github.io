// public/js/dropdown.js

document.addEventListener('DOMContentLoaded', function () {
    var dropdownBtn = document.getElementById('dropdownBtn');
    var dropdownMenu = document.getElementById('dropdownMenu');

    dropdownBtn.addEventListener('mouseover', function () {
        dropdownMenu.classList.remove('hidden');
    });

    dropdownBtn.addEventListener('mouseout', function () {
        dropdownMenu.classList.add('hidden');
    });
});
