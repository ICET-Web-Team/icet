const detailSection = document.getElementById('detail-section');
const listItems = document.querySelectorAll('li button');

const academicCalendar = `<h3 class="fw-bold mb-4">ACADEMIC CALENDAR</h3>
<div class="d-flex flex-column gap-3 mb-3">
  <div>
    <h4 class="fw-bold mb-3">First Semester:</h4>
    <h5 class="mb-3">August-December</h5>
    <div class="w-100 bg-light-grey" style="height: 2px"></div>
  </div>
  <div>
    <h4 class="fw-bold mb-3">Second Semester:</h4>
    <h5 class="mb-3">January-May</h5>
    <div class="w-100 bg-light-grey" style="height: 2px"></div>
  </div>
</div>
<div>
  <h4 class="fw-bold mb-3">Note:</h4>
  <h5 class="mb-3">Academic Calenders for each course may vary.</h5>
</div>`;

detailSection.innerHTML = academicCalendar;

function addActive(event) {
    listItems.forEach(item => {
        item.classList.remove('active');
    })
    event.target.classList.add('active');
}