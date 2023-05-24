@extends('client.layout')
@section('content')
    <base href="/public">
    <section class="bg-title-page flex-c-m p-t-160 p-b-80 p-l-15 p-r-15"
        style="background-image: url(clientpage/images/bg-title-page-03.jpg);">
        <h2 class="tit6 t-center">
            Pannier
        </h2>
    </section>
    <br><br><br>
    <div class="container">
        <br><br><br>
        <table id="cart" class="table table-hover table-condensed">

            <thead>
                <tr>
                    <th>photo</th>
                    <th>repas</th>
                    <th>prix</th>
                    <th>quantite</th>
                    <th>subtotal</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @php
                    $total = 0;
                @endphp
                @foreach ($cartItems as $cartItem)
                    @php
                        $total += $cartItem->price * $cartItem->qty;
                    @endphp
                    <tr data-id="{{ $cartItem->id }}">
                        <td><img src="{{ $cartItem->model->image }}" class="img-fluid" style="width: 150px;" alt="">
                        </td>
                        <td>{{ $cartItem->name }}</td>
                        <td>
                            {{ $cartItem->price }} $
                        </td>
                        <td>

                            <form action="{{ route('pannier.update', $cartItem->rowId) }}" method="post">
                                <input type="number" name='qty' value="{{ $cartItem->qty }}">
                                <button type="submit" class="btn btn-success">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
                                        <path
                                            d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z" />
                                        <path fill-rule="evenodd"
                                            d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z" />
                                    </svg>
                                </button>
                                @csrf
                                @method('put')
                            </form>

                        <td>
                            {{ $cartItem->price * $cartItem->qty }}
                        </td>
                        <td class="actions" data-th="">
                            <form action="{{ route('pannier.destroy', $cartItem->rowId) }}" method="post">
                                <button type="submit" class="btn btn-danger">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                        fill="currentColor" class="bi bi-trash-fill" viewBox="0 0 16 16">
                                        <path
                                            d="M2.5 1a1 1 0 0 0-1 1v1a1 1 0 0 0 1 1H3v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V4h.5a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H10a1 1 0 0 0-1-1H7a1 1 0 0 0-1 1H2.5zm3 4a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 .5-.5zM8 5a.5.5 0 0 1 .5.5v7a.5.5 0 0 1-1 0v-7A.5.5 0 0 1 8 5zm3 .5v7a.5.5 0 0 1-1 0v-7a.5.5 0 0 1 1 0z" />
                                    </svg>
                                </button>
                                @csrf
                                @method('DELETE')
                            </form>

                        </td>
                        <td>
                            <form action="{{ route('commande.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="qty" value="{{ $cartItem->qty }}">
                                <input type="hidden" name="id" value="{{ $cartItem->id }}">
                                <input type="hidden" name="prix" value="{{ $cartItem->price * $cartItem->qty }}">
                                <button type="submit" class="btn btn-success">commander</button>

                            </form>
                        </td>
                        </td>

                    </tr>
                @endforeach

            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6" class="d-flex justify-content-between p-2 mb-2 " style="background-color: #e1f5fe;">
                        <h5 class="fw-bold mb-0">Total:</h5>
                        <h5 class="fw-bold mb-0">{{ $total }}$</h5>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="clientMenu" class="btn btn-danger">continue ...</a>
                    </td>

                </tr>
            </tfoot>
        </table>
    </div>

    {{-- <script type="text/javascript">
        $(".cart-remove").click(function(e) {
            e.preventDefault();
            var elem = $(this);
            if (confirm("do you really want to remove this cart ?")) {
                $.ajax({
                    url: '{{ route('remove_pannier') }}',
                    method: "delete",
                    data: {
                        _token: '{{ csrf_token() }}',
                        id: elem.parents("tr").attr("data-id")
                    },
                    success: function(response) {
                        window.location.reload();
                    }

                });
            }
        });
    </script> --}}
@endsection
