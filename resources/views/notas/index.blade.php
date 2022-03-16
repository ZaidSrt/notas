@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div>
                    <a href="{{ route('notas.create') }}" class="btn btn-success text-normal">Nueva nota</a>
                </div>
            </div>

            @foreach ($notas as $nota)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="card">
                        <div class="card-header d-flex justify-content-between align-items-center bg-gray">
                            <span class="text-normal text-bold">{{ $nota->titulo }}</span>
                            <svg class="cursor-pointer color-red btn_notas_delet" data-id="{{ $nota->id }}" width="14" height="16" viewBox="0 0 14 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10 1.5V2.5H13.5C13.7761 2.5 14 2.72386 14 3C14 3.27614 13.7761 3.5 13.5 3.5H12.9616L12.1088 14.1595C12.0257 15.1989 11.1579 16 10.1152 16H3.88479C2.84207 16 1.97431 15.1989 1.89116 14.1595L1.0384 3.5H0.5C0.223858 3.5 0 3.27614 0 3C0 2.72386 0.223858 2.5 0.5 2.5H4V1.5C4 0.671573 4.67157 0 5.5 0H8.5C9.32843 0 10 0.671573 10 1.5ZM5 1.5V2.5H9V1.5C9 1.22386 8.77614 1 8.5 1H5.5C5.22386 1 5 1.22386 5 1.5ZM3.49999 5.0285L3.99999 13.5285C4.0162 13.8042 4.25282 14.0145 4.52849 13.9983C4.80415 13.9821 5.01448 13.7454 4.99826 13.4698L4.49826 4.96978C4.48205 4.69411 4.24543 4.48379 3.96976 4.5C3.6941 4.51622 3.48377 4.75283 3.49999 5.0285ZM10.0302 4.50086C9.75457 4.48465 9.51795 4.69497 9.50173 4.97064L9.00173 13.4706C8.98552 13.7463 9.19584 13.9829 9.47151 13.9991C9.74717 14.0154 9.98379 13.805 10 13.5294L10.5 5.02936C10.5162 4.75369 10.3059 4.51708 10.0302 4.50086ZM7 4.5C6.72386 4.5 6.5 4.72386 6.5 5V13.5C6.5 13.7761 6.72386 14 7 14C7.27615 14 7.5 13.7761 7.5 13.5V5C7.5 4.72386 7.27615 4.5 7 4.5Z" />
                            </svg>                              
                        </div>
                        <div class="card-body">
                            <span>{{ $nota->nota }}</span>
                        </div>
                    </div>
                </div>
                <form id="form_notas_delet_{{ $nota->id }}" action="{{ route('notas.destroy', ['notas' => $nota->id]) }}" method="POST" class="d-none">
                    @csrf
                    @method('DELETE')
                </form>
            @endforeach

        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="modal_notas_delet">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="m-4">
                    <div>
                        <span class="text-medium d-block text-center">¿ Desea eliminar la nota ?</span>
                    </div>
                    <div class="d-flex justify-content-around mt-4">
                        <button class="btn btn-danger" data-dismiss="modal">Cancelar</button>
                        <button class="btn btn-success" id="btn_confirm_notas_delet">Aceptar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection