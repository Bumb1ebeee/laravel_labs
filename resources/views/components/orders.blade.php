@props(['order'])
<tr>
    <td>{{$order['id']}}</td>
    <td>{{$order->product->name}}</td>
    <td>{{$order['amount']}}</td>
    <td>{{$order['created_at']}}</td>
    <td>{{$order->user->email}}</td>
    <td>
        {{$order['status']}}
    </td>
    <td>
        @if($order['status']=='новый')
            <form action="/approved" method="post">
                    @csrf
                    <input type="hidden" name="order_id" value="{{ $order['id'] }}">
                <button>Одобрить</button>
                @if(session()->has("error_{$order['id']}"))
                    <div style="color:red;">
                        {{ session()->get("error_{$order['id']}") }}
                    </div>
                @endif
            </form>
        @elseif($order['status']=='одобрен')
            <form action="/delivered" method="post">
                @csrf
                <input type="hidden" name="order_id" value="{{ $order['id'] }}">
                <button>Доставить</button>
            </form>
        @else
            <p>товар доставлен</p>
        @endif
    </td>
</tr>
