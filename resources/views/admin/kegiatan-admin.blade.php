@extends('admin.layout.mainAdmin')
@section('title', 'Admin | Kegiatan')

@section('isi')
    <div class="tabel-kegiatan container-xl">
        <div class="table-responsive">
            <div class="table-wrapper">
                <div class="table-title">
                    <div class="row">
                        <div class="col-sm-6">
                            <h2>Atur <b>Kegiatan</b></h2>
                        </div>
                        <div class="col-sm-6">
                            <a href="#addEmployeeModal" class="btn btn-success" data-toggle="modal"><i
                                    class="material-icons">&#xE147;</i> <span>Add</span></a>
                            <a href="#deleteEmployeeModal" class="btn btn-danger" data-toggle="modal"><i
                                    class="material-icons">&#xE15C;</i> <span>Delete</span></a>
                        </div>
                    </div>
                </div>
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th>
                                <span class="custom-checkbox">
                                    <input type="checkbox" id="selectAll">
                                    <label for="selectAll"></label>
                                </span>
                            </th>
                            <th>Judul Kegiatan</th>
                            <th>Isi Kegiatan Terkini</th>
                            <th>Foto Kegiatan</th>
                            <th>Isi Kegiatan</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($kegiatanAdmin as $item)
                            <tr>
                                <td>
                                    <span class="custom-checkbox">
                                        <input type="checkbox" id="checkbox1" name="options[]" value="1">
                                        <label for="checkbox1"></label>
                                    </span>
                                </td>
                                <td>{{ $item->judul }}</td>
                                <td>{{ $item->isi_kegiatan_terkini }}</td>
                                <td>{{ $item->foto_kegiatan }}</td>
                                <td>{{ $item->isi_kegiatan }}</td>
                                <td>
                                    <a href="#editEmployeeModal_{{$item->id}}" id="edit" class="edit" data-toggle="modal"
                                        data-id="{{ $item->id }}">
                                        <i class="material-icons" data-toggle="tooltip" title="Edit">&#xE254;</i>
                                    </a>
                                    <a href="#deleteEmployeeModal" class="delete" data-toggle="modal"><i
                                            class="material-icons" data-toggle="tooltip" title="Delete">&#xE872;</i></a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="clearfix">
                    <div class="hint-text">Showing <b>5</b> out of <b>25</b> entries</div>
                    <ul class="pagination">
                        <li class="page-item disabled"><a href="#">Previous</a></li>
                        <li class="page-item"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item active"><a href="#" class="page-link">3</a></li>
                        <li class="page-item"><a href="#" class="page-link">4</a></li>
                        <li class="page-item"><a href="#" class="page-link">5</a></li>
                        <li class="page-item"><a href="#" class="page-link">Next</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Edit Modal HTML -->
    <form action="activity" method="POST">
        @csrf
        <div id="addEmployeeModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form>
                        <div class="modal-header">
                            <h4 class="modal-title">Add Kegiatan</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                        </div>
                        <div class="modal-body">
                            <div class="form-group">
                                <label>Judul Kegiatan</label>
                                <input type="text" class="form-control" id="judul" name="judul">
                            </div>
                            <div class="form-group">
                                <label>Isi Kegiatan Terkini</label>
                                <textarea class="form-control" id="isi_kegiatan_terkini" name="isi_kegiatan_terkini"></textarea>
                            </div>
                            <div class="form-group">
                                <label>Foto Kegiatan</label>
                                <input type="text" class="form-control" id="foto_kegiatan" name="foto_kegiatan">
                            </div>
                            <div class="form-group">
                                <label>Isi Kegiatan</label>
                                <textarea class="form-control" id="isi_kegiatan" name="isi_kegiatan"></textarea>
                            </div>
                        </div>
                        <div class="modal-footer">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            {{-- <input type="submit" class="btn btn-success" value="Add">	 --}}
                            <button class="btn btn-success">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </form>

    <!-- Edit Modal HTML -->
    {{-- @foreach ($kegiatanAdmin as $item) --}}
    {{-- <form action="/activity/{{$item->id}}" id="formEdit" method="POST"> --}}
    {{-- {{$kegiatan}} --}}
    {{-- @csrf --}}
    {{-- @method('PUT') --}}
    @foreach ($kegiatanAdmin as $item)
    <form action="/activity/{{$item->id}}" method="post">
        @csrf
        @method('PUT')
        <div id="editEmployeeModal_{{$item->id}}" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Kegiatan</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Judul Kegiatan</label>
                            <input type="text" value="" class="form-control" id="edit_judul_kegiatan"
                                name="judul">
                        </div>
                        <div class="form-group">
                            <label>Isi Kegiatan Terkini</label>
                            <textarea class="form-control" value="" id="edit_isi_kegiatan_terkini" name="isi_kegiatan_terkini"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Foto Kegiatan</label>
                            <input type="text" class="form-control" value="" id="edit_foto_kegiatan"
                                name="foto_kegiatan">
                        </div>
                        <div class="form-group">
                            <label>Isi Kegiatan</label>
                            <textarea class="form-control" id="edit_isi_kegiatan" name="isi_kegiatan"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        {{-- <input type="submit" class="btn btn-success" value="Add">	 --}}
                        <button class="btn btn-success">Simpan</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
    @endforeach

    {{-- </form> --}}
    {{-- @endforeach --}}
    <!-- Delete Modal HTML -->
    <div id="deleteEmployeeModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h4 class="modal-title">Delete</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure you want to delete these Records?</p>
                        <p class="text-warning"><small>This action cannot be undone.</small></p>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Delete">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function() {
                if (this.checked) {
                    checkbox.each(function() {
                        this.checked = true;
                    });
                } else {
                    checkbox.each(function() {
                        this.checked = false;
                    });
                }
            });
            
            checkbox.click(function() {
                if (!this.checked) {
                    $("#selectAll").prop("checked", false);
                }
            });

            $(document).on('click', '#edit', function(e) {
                // e.preventDefault();
                var url = '/activity/';
                var id = $(this).data('id');
                
                $.get(url + id, async function(data) {
                    console.log(data);
                    $('#edit_foto_kegiatan').val(data.foto_kegiatan);
                    $('#edit_judul_kegiatan').val(data.judul);
                    $('#edit_isi_kegiatan_terkini').val(data.isi_kegiatan_terkini);
                    $('#edit_isi_kegiatan').val(data.isi_kegiatan);
                })
            });

            
        });
    </script>
@endsection
