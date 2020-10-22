@include('client.layout.master')
@include('client.layout.header')
<body style="background-color: Silver">
    <div style="padding: 200px;text-align: center;">
        <h1 style="text-align: center;" class="text-success">Thanh toán thành công</h1>
        <button style="text-align: center;" class="text-success"><a href="{{route('product')}}">Tiếp Tục mua sắm</a></button>
    </div>
    
</body>
@include('client.layout.footer')
