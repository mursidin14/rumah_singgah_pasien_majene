<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header card-header-icon" data-background-color="purple">
                        <i class="material-icons">view_list</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Daftar Kunjungan</h4>
                        <div class="toolbar">
                            <!--        Here you can write extra buttons/actions for the toolbar              -->
                            <a href="<?= base_url() ?>kunjungan/tambah">
                                <button class="btn btn-info">
                                    <span class="btn-label">
                                        <i class="material-icons">check</i>
                                    </span>
                                    Tambah
                                </button>
                            </a>

                            <div class="pull-right">
                                <a href="#" id="printTable">
                                    <button class="btn btn-success">
                                        <span class="btn-label">
                                            <i class="material-icons">print</i>
                                        </span>
                                        Cetak
                                    </button>
                                </a>
                            </div>

                            <button id="filterMonthly" class="btn btn-default">
                                <span class="btn-label">
                                    <i class="material-icons">date_range</i>
                                </span>
                                Filter Bulanan
                            </button>


                            <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                <div class="alert alert-success">
                                    <span><?= $this->session->flashdata('success'); ?></span>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="material-datatables">
                            <table id="datatables" class="table table-bordered" cellspacing="0" width="100%" style="width:100%">
                                <thead>
                                    <tr>
                                        <td>No</td>
                                        <td>Nama Pasien</td>
                                        <td>Jenis Kelamin</td>
                                        <td>Alamat</td>
                                        <td>Tanggal Masuk</td>
                                        <td>Nomor BPJS</td>
                                        <td>Poli Tujuan</td>
                                        <td>Tanggal Keluar</td>
                                        <td>Keterangan</td>
                                        <td class="disabled-sorting text-right">Actions</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $no = 1; ?>
                                    <?php foreach ($data as $key) : ?>
                                        <tr>
                                            <td><?= $no; ?></td>
                                            <td><?= $key['nama']; ?></td>
                                            <td><?= $key['jk']; ?></td>
                                            <td><?= $key['alamat']; ?></td>
                                            <td><?= $key['tgl_masuk']; ?></td>
                                            <td><?= $key['no_bpjs']; ?></td>
                                            <td><?= $key['poli_tujuan']; ?></td>
                                            <td><?= $key['tgl_keluar']; ?></td>
                                            <td><?= $key['keterangan']; ?></td>
                                            <td class="text-right">

                                                <a href="<?= base_url() ?>kunjungan/edit/<?= $key['id']; ?>" class="btn btn-simple btn-primary btn-icon"><i class="material-icons">edit</i></a>

                                                <button class="btn btn-simple btn-warning btn-icon" data-toggle="modal" data-target="#hapusKunjungan<?= $key['id']; ?>"><i class="material-icons">close</i></button>

                                            </td>
                                        </tr>
                                        <?php $no++; ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- small modal hapus pegawai -->

                        <?php foreach ($data as $key) : ?>
                            <div class="modal fade" id="hapusKunjungan<?= $key['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-small ">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="material-icons">clear</i></button>
                                        </div>

                                        <form method="post" action="<?= base_url(); ?>kunjungan/hapus/<?= $key['id']; ?>">
                                            <div class="modal-body text-center">
                                                <h5>Apakah anda yakin untuk menghapus kunjungan pasien ini? </h5>
                                            </div>
                                            <div class="modal-footer text-center">
                                                <button type="button" class="btn btn-simple" data-dismiss="modal">Tidak</button>
                                                <button type="submit" class="btn btn-success btn-simple">Ya</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                        <!--    end small modal hapus pegawai -->
                    </div>
                    <!-- end content-->
                </div>
                <!--  end card  -->
            </div>
            <!-- end col-md-12 -->
        </div>
        <!-- end row -->
    </div>
</div>

<script>
    document.getElementById('printTable').addEventListener('click', function () {
        // Clone the original table
        var originalTable = document.getElementById('datatables');
        var clonedTable = originalTable.cloneNode(true);

        // Remove the last column (Actions) from each row in the cloned table
        var rows = clonedTable.getElementsByTagName('tr');
        for (var i = 0; i < rows.length; i++) {
            rows[i].deleteCell(-1);
        }

        // Add styling to the cloned table
        clonedTable.style.border = '1px solid #ddd';
        clonedTable.style.borderCollapse = 'collapse';
        clonedTable.style.width = '100%';

         // Add styling to table cells
         var cellsHead = clonedTable.getElementsByTagName('th');
        for (var i = 0; i < cellsHead.length; i++) {
            cellsHead[i].style.border = '1px solid #ddd';
            cellsHead[i].style.padding = '8px';
        }

        // Add styling to table cells
        var cells = clonedTable.getElementsByTagName('td');
        for (var i = 0; i < cells.length; i++) {
            cells[i].style.border = '1px solid #ddd';
            cells[i].style.padding = '8px';
        }

        
        // Create a new window and append the cloned table to it
        var printWindow = window.open('', '_blank');
        printWindow.document.write('<html><head><title>Cetak Tabel</title>');
        printWindow.document.write('<style>body{font-family: Arial, sans-serif;}</style></head><body>');
        printWindow.document.write('<h4 style="text-align: center;">Daftar Kunjungan</h4>');
        printWindow.document.write(clonedTable.outerHTML);
        printWindow.document.write('</body></html>');
        printWindow.document.close();

        // Print the new window
        printWindow.print();

        location.reload();
    });

       // Monthly filter button click event
       document.getElementById('filterMonthly').addEventListener('click', function () {
        // Get the selected month from the user (you may use a date picker library)
        var selectedMonth = prompt("Masukkan bulan (MM):");

        // Check if the user provided a valid month
        if (selectedMonth !== null && selectedMonth !== "" && !isNaN(selectedMonth)) {
            // Call a function to filter the table based on the selected month
            filterTableByMonth(selectedMonth);
        } else {
            alert("Bulan tidak valid.");
        }
    });

    // Function to filter the table by month
    function filterTableByMonth(month) {
        // Get all rows in the table body
        var rows = document.querySelectorAll('#datatables tbody tr');

        // Loop through each row and check the month in the "Tanggal Masuk" column (modify the index accordingly)
        for (var i = 0; i < rows.length; i++) {
            var tanggalMasuk = rows[i].getElementsByTagName('td')[4].innerText; // Assuming the date is in the 5th column
            var monthInRow = tanggalMasuk.split('-')[1]; // Extract the month part from the date

            // Show or hide the row based on the selected month
            rows[i].style.display = monthInRow === month ? 'table-row' : 'none';
        }
    }
</script>


