@forelse($termo->remissivas as $remissiva)
    <li class="list-group-item">
        {{ $remissiva->titulo }}
        @can('admin')
        <form method="POST" action="/remissivas/{{ $remissiva->id }}">
            @csrf 
            @method('delete')
            <br>
            <button type="submit" class="btn btn-outline-danger btn-sm">Apagar</button>
        </form>
        @endcan
    </li>
@empty
    <span>Ainda não há remissivas cadastradas.</span>
@endforelse