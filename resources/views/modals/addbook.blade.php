<div class="modal fade" id="addbook">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4>Agregar Manual</h4>
                <button type="button" class="close" data-dismiss="modal">
                    <span>×</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-md-8">
                    <div class="card">
                        {{-- <div class="card-body"> --}}
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="title" class="col-md-4 col-form-label text-md-right">{{ __('Titulo') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control @error('title') is-invalid @enderror" name="name" value="{{ old('title') }}" required autocomplete="title" autofocus>

                                        @error('title')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('Cantidad de Manuales') }}</label>

                                    <div class="col-md-6">
                                        <input id="manuals" type="text" class="form-control @error('manuals') is-invalid @enderror" name="manuals" value="{{ old('manuals') }}" required autocomplete="manuals">

                                        @error('manuals')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="area" class="col-md-4 col-form-label text-md-right">{{ __('Area') }}</label>

                                    <div class="col-md-6">
                                        <input id="area" type="text" class="form-control @error('area') is-invalid @enderror" name="area" required>

                                        @error('area')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="inventory" class="col-md-4 col-form-label text-md-right">{{ __('N° de Inventario') }}</label>

                                    <div class="col-md-6">
                                        <input id="inventory" type="text" class="form-control" name="inventory" required>

                                        @error('inventory')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="code" class="col-md-4 col-form-label text-md-right">{{ __('Codigo') }}</label>

                                    <div class="col-md-6">
                                        <input id="code" type="text" class="form-control @error('code') is-invalid @enderror" name="code" required>

                                        @error('code')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </form>
                        {{-- </div> --}}
                    </div>
                </div>
            </div>
            <div class="modal-footer form-group row mb-0">
                <div class="col-md-6 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Registrar') }}
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
