@foreach($invoices as $invoice)
    <p>{{ $invoice->invoice_number }}</p>
    <p>{{ $invoice->import }}</p>
    <p>{{ $invoice->customer_id }}</p>
@endforeach
@foreach($customers as $customer)
    <p>{{ $customer->name }}</p>
    <p>{{ $customer->surname }}</p>
    <p>{{ $customer->piva }}</p>
@endforeach
