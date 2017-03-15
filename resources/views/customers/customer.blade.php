@foreach($items as $item)
    <p>{{ $item->invoice_number }}</p>
    <p>{{ $item->import }}</p>
    <p>{{ $item->customer_id }}</p>
@endforeach
