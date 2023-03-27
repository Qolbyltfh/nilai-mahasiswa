<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css">

<div class="row">
    <div class="col-12">
        <h3 style="text-align: center">Nilai Mahasiswa</h3>
    </div>
</div>

<div class="drag-area">
    <form method="post" action="{{ Route('insert.nilai') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="row" style="width:50%; margin: 0 auto">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Nilai Quiz:</strong>
                    <input type="number" name="nilai_quiz" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Nilai Tugas:</strong>
                    <input type="number" name="nilai_tugas" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Nilai Absensi:</strong>
                    <input type="number" name="nilai_absensi" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Nilai Praktek:</strong>
                    <input type="number" name="nilai_praktek" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                <strong>Nilai UAS:</strong>
                    <input type="number" name="nilai_uas" class="form-control">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>