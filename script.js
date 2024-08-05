document.addEventListener('DOMContentLoaded', () => {
    const tableBody = document.querySelector('#patients-table tbody');

    function fetchPatients() {
        fetch('get_patients.php')
            .then(response => response.json())
            .then(data => {
                tableBody.innerHTML = '';
                data.forEach(patient => {
                    const row = document.createElement('tr');
                    row.innerHTML = `
                        <td>${patient.name}</td>
                        <td>${patient.severity}</td>
                        <td>${patient.arrival_time}</td>
                        <td>${patient.status}</td>
                    `;
                    tableBody.appendChild(row);
                });
            });
    }

    fetchPatients();
    setInterval(fetchPatients, 60000); // Refresh every minute
});
