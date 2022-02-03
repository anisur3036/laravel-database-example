<h3>Gatepass Details</h3>
<hr>
<ul>
    @foreach ($gatepass as $data)
    <li>{{ $data->header->Gt_Date }}</li>
    <li>{{ $data->Item_Description }}</li>
    <li>{{ $data->Size_Lot }}</li>
    <li>{{ $data->Qty }}</li>
    <li>{{ $data->header->Woref }}</li>
    <hr>
    @endforeach
</ul>
{{ $gatepass->links() }}
