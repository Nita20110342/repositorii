@extends('layouts.App')
@section('content')
    <main class="container">
       <!-- START FORM -->
       <form action='' method='post'>
        <div class="my-3 p-3 bg-body rounded shadow-sm">
            <div class="mb-3 row">


                <table class="table table-striped table-bordered table-hover" id="table">
                    <thead class="thead-dark text-center">
                    <table class="table table-striped">
                    <thead>
                        <tr>
                            <th class="col-md-1">No</th>
                            <th class="col-md-3">Title</th>
                            <th class="col-md-4">Author</th>
                            <th class="col-md-2">Year</th>
                            <th class="col-md-2">Description</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>Penelitian</td>
                            <td>Nita</td>
                            <td>2022</td>
                            <td>Sistem Informasi

                            </td>

                        </tr>
                    </tbody>
                </table>

          </div>
          <!-- AKHIR DATA -->
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
  </body>
@endsection
