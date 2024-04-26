const detailSection = document.getElementById('detail-section');
const listItems = document.querySelectorAll('li button');

function addActive(event) {
    listItems.forEach(item => {
        item.classList.remove('active');
    })
    event.target.classList.add('active');
}