@extends('layouts.app')

@section('section')
    @if(isset($products))
    {{ $products->total() }}
    <table class="table">
    @foreach($products as $product)
        <tr>
            <td><a href="{{ route( 'product', ['id' => $product['id'] ] ) }}">{{$product['name']}}</a></td>
            <td>{{$product['sku']}}</td>
            <td>{{$product['description']}}</td>
            <td>{{$product['price']}}</td>
            <td>{{$product['active']}}</td>




        </tr>


    @endforeach
    </table>

    {{ $products->render() }}

    @endif



    @if($product)
    {{$product}}


    {!! Form::open(['route' => ['edit.product', $product['id']]]) !!}

    {!! Form::text('name', $product['name']); !!}
    {!! Form::text('sku', $product['sku']); !!}
    {!! Form::textarea('description', $product['description']); !!}
    {!! Form::number('price', $product['price']); !!}
    {!! Form::checkbox('active', $product['active'], $product['active'] ? true : false); !!}
    {!! Form::checkbox('subscribe', $product['subscribe'], $product['subscribe'] ? true : false); !!}
    {!! Form::submit('Update'); !!}

    {!! Form::close() !!}

    @endif

@endsection
