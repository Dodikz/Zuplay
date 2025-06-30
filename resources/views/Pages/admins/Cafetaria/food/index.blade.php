@extends('Pages.admins.index')
@section('content')
    <x-u-i.cards class="mb-3">
        <div class="row">
            <div class="col-12">
                <div class="d-flex flex-wrap justify-content-between align-items-center gap-2">
                    <div class="d-flex gap-2">
                        <input type="search" class="form-control" id="input-search" placeholder="Search"
                            style="min-width: 200px;">
                        <select class="form-select" aria-label="Default select example" style="min-width: 160px;">
                            <option selected>Kategori</option>
                            <option value="1">Makanan Berat</option>
                            <option value="2">Cemilan/Snack</option>
                            <option value="3">Dessert</option>
                        </select>
                    </div>

                    <button class="btn btn-primary label-btn mt-2 mt-md-0">
                        <i class="bx bx-plus label-btn-icon me-2"></i>
                        <span class="label-btn-text">Tambah Makanan</span>
                    </button>
                </div>
            </div>
        </div>
    </x-u-i.cards>

    <x-u-i.cards>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table class="table text-nowrap">
                        <thead>
                            <tr>
                                <th scope="col" class="text-nowrap">No</th>
                                <th scope="col" class="text-nowrap">Gambar</th>
                                <th scope="col" class="text-nowrap">Menu Manakan</th>
                                <th scope="col" class="text-nowrap">Kategori</th>
                                <th scope="col" class="text-nowrap">Harga</th>
                                <th scope="col" class="text-nowrap">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>
                                    <img src="{{ asset('build/assets/images/media/media-48.jpg') }}" alt=""
                                        class="img-fluid rounded" width="50" height="50">
                                </td>
                                <td>Manufacturer</td>
                                <td><span class="badge bg-primary-transparent">Cemilan</span></td>
                                <td>Rp 10,000</td>
                                <td>
                                    <div class="hstack gap-2 fs-15">
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-success"><i
                                                class="ri-download-2-line"></i></a>
                                        <a href="javascript:void(0);" class="btn btn-icon btn-sm btn-info"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </x-u-i.cards>
@endsection
