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
    <a href="{{ route( 'create.product' ) }}">CREATE</a>

    @else
        {!! Form::open(['route' => ['store.product' ],'method' => 'post' ]) !!}

        {!! Form::text('name', ''); !!}
        {!! Form::text('sku', ''); !!}
        {!! Form::textarea('description', ''); !!}
        {!! Form::number('price', ''); !!}
        {!! Form::checkbox('active', '', false); !!}
        {!! Form::checkbox('subscribe','' , false); !!}
        {!! Form::submit('Save'); !!}

        {!! Form::close() !!}


    @endif



    @if(isset($product_detail))
    {{$product_detail}}


    {!! Form::open(['route' => ['edit.product', $product_detail['id']],'method' => 'put' ]) !!}

    {!! Form::text('name', $product_detail['name']); !!}
    {!! Form::text('sku', $product_detail['sku']); !!}
    {!! Form::textarea('description', $product_detail['description']); !!}
    {!! Form::number('price', $product_detail['price']); !!}
    {!! Form::checkbox('active', $product_detail['active'], $product_detail['active'] ? true : false); !!}
    {!! Form::checkbox('subscribe', $product_detail['subscribe'], $product_detail['subscribe'] ? true : false); !!}
    {!! Form::submit('Update'); !!}

    {!! Form::close() !!}

    <a style="color: red;" href="{{ route( 'delete.product', ['id' => $product_detail['id'] ] ) }}">DELETE</a>



    {{--<form action="/categories/{{ $category->id }}" method="post">--}}
        {{--{{ method_field('delete') }}--}}
        {{--<button class="btn btn-default" type="submit">Delete</button>--}}
    {{--</form>--}}

    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif


@endsection
