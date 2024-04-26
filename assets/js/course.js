const detailSection = document.getElementById('detail-section');
const listItems = document.querySelectorAll('li button');

const academicCalendar = `
<h3 class="fw-bold mb-4">ACADEMIC CALENDAR</h3>
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
</div>
`;

const howToPay = `<h3 class="fw-bold mb-4">HOW TO PAY</h3>`;
const refundAndWithdrawal = `<h3 class="fw-bold mb-4">REFUND AND WITHDRAWAL</h3>`;
const scholarships = `<h3 class="fw-bold mb-4">SCHOLARSHIPS</h3>`;
const studyLoans = `<h3 class="fw-bold mb-4">STUDY LOANS</h3>`;

detailSection.innerHTML = academicCalendar;

function addActive(event) {
  listItems.forEach(item => {
    item.classList.remove('active');
  })
  event.target.classList.add('active');
}

const btnTuitionFees = document.getElementById('btn-tuition-fees');
const btnHowToPay = document.getElementById('btn-how-to-pay');
const btnRefundAndWithdrawal = document.getElementById('btn-refund-and-withdrawal');
const btnScholarships = document.getElementById('btn-scholarships');
const btnStudyLoans = document.getElementById('btn-study-loans');

btnTuitionFees.addEventListener("click", (event) => {
  addActive(event);
  detailSection.innerHTML = academicCalendar;
});

btnHowToPay.addEventListener("click", (event) => {
  addActive(event);
  detailSection.innerHTML = howToPay;
});

btnRefundAndWithdrawal.addEventListener("click", (event) => {
  addActive(event);
  detailSection.innerHTML = refundAndWithdrawal;
});

btnScholarships.addEventListener("click", (event) => {
  addActive(event);
  detailSection.innerHTML = scholarships;
});

btnStudyLoans.addEventListener("click", (event) => {
  addActive(event);
  detailSection.innerHTML = studyLoans;
});