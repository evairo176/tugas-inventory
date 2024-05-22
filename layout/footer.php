</div>
<!-- Table CDN -->




<!-- jQuery CDN -->




<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.0.7/js/dataTables.bootstrap4.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/js/all.min.js" integrity="sha512-u3fPA7V8qQmhBPNT5quvaXVa1mnnLSXUep5PS1qo5NRzHwG19aHmNJnj1Q8hpA/nBWZtZD4r4AX6YOt5ynLN2g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(document).ready(function() {
        $('#tabel-data').DataTable({
            // "order": [
            //     [1, 'desc']
            // ], // Urutan default berdasarkan kolom kedua (ID)
            "columnDefs": [{
                    "orderable": false,
                    "targets": [0, 1, 2, 3, 4, 5, 6, 7, 8]
                } // Menonaktifkan pengurutan pada kolom No, Status, dan Aksi
            ]
        });
    });
</script>
</body>

</html>