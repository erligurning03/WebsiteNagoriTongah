@extends('admin.layouts.navbar')
@section('container')

<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">History Ajuan Surat Keterangan Desa</h1>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data History</h6>
        </div>

        <!-- Data -->
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No.</th>
                            <th>NIK</th>
                            <th>Nama</th>
                            <th>Surat Ajuan</th>
                            <th>Berkas Persyaratan</th>
                            <th>Status</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $no = 1; ?>
                        @foreach ($pengajuan as $ajuan)
                        <tr>
                            <th scope="row">{{$no++}}</th>
                            <td>{{ $ajuan->user->nik }}</td>
                            <td>{{ $ajuan->user->nama_lengkap }}</td>
                            <td>{{ $ajuan->suket->suket }}</td>
                            <td>
                                @foreach ($ajuan->persyaratan as $persyaratan)
                                <a href="{{ asset('storage/berkas/' . $persyaratan->berkas) }}" download>{{ $persyaratan->berkas }}</a>
                                <br>
                                @endforeach
                            </td>
                            <td>{{ $ajuan->status_pengajuan }}</td>
                            <td>
                                @if ($ajuan->status_pengajuan === 'diterima')
                                Surat sudah diterima, silahkan datang ke kantor.
                                @elseif ($ajuan->status_pengajuan === 'ditolak')
                                @php
                                $tolak = $ajuan->tolakan->first();
                                @endphp
                                @if ($tolak)
                                {{ $tolak->alasan }}
                                @endif
                                @endif
                            </td>
                            <td>{{ $ajuan->created_at }}</td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>

                <div style="text-align: center;">
                    <!-- Display the pagination links -->
                    {{ $pengajuan->links() }}
                </div>

                <!-- Pagination -->
                {{-- <div class="pagination pagination-sm justify-content-center">
                                {{ $suket->links() }}
            </div> --}}

        </div>
    </div>

</div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Footer -->
<footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; Your Website 2020</span>
        </div>
    </div>
</footer>
<!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

@endsection