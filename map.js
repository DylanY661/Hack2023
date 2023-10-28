const mapButton = document.querySelector('#bookstore');
const mapButton2 = document.querySelector('#north_entrance');
const mapButton3 = document.querySelector('#US_Bank');
const mapButton4 = document.querySelector('#info_center');


mapButton.addEventListener('click', function() {
    window.location.href='location_pages/osu_bookstore.html';
});

mapButton2.addEventListener('click', function() {
    window.location.href='location_pages/north_entrance.html';
});

mapButton3.addEventListener('click', function() {
    window.location.href='location_pages/union_bank.html';
});

mapButton4.addEventListener('click', function() {
    window.location.href='location_pages/info_center.html';
});


