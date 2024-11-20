<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Cliente') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    <div class="row">
                        <div class="col-6">
                            <form method="POST" action="{{ route('clientes.store') }}">
                                @csrf
                                <div class="mb-3">
                                <label for="cliente" class="form-label">Cliente</label>
                                <input type="text" class="form-control" name="nombres_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Apellidos</label>
                                    <input type="text" class="form-control" name="apellidos_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Edad</label>
                                    <input type="number" class="form-control" name="edad_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Dirección</label>
                                    <input type="text" class="form-control" name="direccion_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Pais</label>
                                    <select class="form-select" name="pais_cliente">
                                        @foreach ($paises as $pais)
                                            <option value="{{ $pais->nombre_pais }}">{{ $pais->nombre_pais }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Ciudad</label>
                                    <input type="text" class="form-control" name="ciudad_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Distrito</label>
                                    <input type="text" class="form-control" name="distrito_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Email</label>
                                    <input type="email" class="form-control" name="email_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Numero</label>
                                    <input type="number" class="form-control" name="numero_cliente">
                                </div>
                                <div class="mb-3">
                                    <label for="cliente" class="form-label">Estado</label>
                                    <input type="text" class="form-control" name="estado_cliente">
                                </div>

                                <div>
                                    <button type="submit" class="btn btn-primary">Agregar cliente</button>
                                    <button type="reset" class="btn btn-secondary">Cancelar</button>
                                </div>
                            </form>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
