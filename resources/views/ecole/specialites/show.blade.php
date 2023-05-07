@extends('layouts.master')
@section('title', 'Spécialité')
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Detail de la Spécialité</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item active">@yield('title')</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header bg-primary">
                                <h4>Detail Spécialité</h4>
                            </div>
                            <div class="card-body">
                                <div>
                                    <div>
                                        <form class="form-horizontal">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Nom</label>
                                                        <input type="text" name="nom" id="nom"
                                                            class="form-control @error('nom') is-invalid @enderror"
                                                            value="{{ $specialite->nom }}" required placeholder="Nom">
                                                        @error('nom')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label for="name">Description</label>
                                                        <input type="text" name="description" id="description"
                                                            class="form-control @error('description') is-invalid @enderror"
                                                            value="{{ $specialite->description }}" required
                                                            placeholder="Description">
                                                        @error('description')
                                                            <span class="invalid-feedback" role="alert">
                                                                <strong>{{ $message }}</strong>
                                                            </span>
                                                        @enderror
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="form-group button">
                                                    {{-- <button type="submit" class="btn btn-primary"><i class="fas fa-user-edit"></i> Update Profile</button> --}}
                                                    <a href="{{ route('specialites.edit', $specialite) }}"
                                                        class="btn btn-info">
                                                        <i class="fa fa-user-edit"></i> Modifier</a>
                                                </div>

                                            </div>
                                    </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
    </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    </div>
@endsection
@section('script')
    <script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>
@endsection
