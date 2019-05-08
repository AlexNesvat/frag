@extends('layouts.app')

@section('section')
    @if(isset($products))

        {{ $products['total'] }}
        <table class="table">

            @foreach($products['data'] as $product)
                <tr>
                    <td><a href="{{ route( 'products.edit', ['id' => $product['id'] ] ) }}">{{$product['name']}}</a>
                    </td>
                    <td>{{$product['sku']}}</td>
                    <td>{{$product['description']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['active']}}</td>
                </tr>

            @endforeach

        </table>

        {{--{{ $products->render() }}--}}
        {{--{{ dd($products) }}--}}
        <ul>
            <li><a href="{{ $products['prev_page_url'] }}">prev</a></li>
            <li><a href="{{ $products['next_page_url'] }}">next</a></li>
            <li><a href="{{ $products['last_page_url'] }}">last</a></li>
        </ul>
        <a href="{{ route('products.create') }}">CREATE</a>
    @endif


    @if (\Route::current()->getName() === 'products.create')
        {!! Form::open(['route' => ['products.store' ],'method' => 'post' ]) !!}

        {!! Form::text('name', ''); !!}
        {!! Form::text('sku', ''); !!}
        {!! Form::textarea('description', ''); !!}
        {!! Form::number('price', ''); !!}
        {!! Form::checkbox('active', true); !!}
        {!! Form::checkbox('subscribe', true); !!}
        {!! Form::submit('Save'); !!}

        {!! Form::close() !!}
    @endif


    @if(isset($product_detail))
        {{--        {{dd($product_detail)}}--}}

        <ul>
            {{--@foreach($product_detail as $key => $attribute)--}}
            {{--<li>{{$key}} - {{$attribute}}</li>--}}
            {{--@endforeach--}}
        </ul>
        {{--access $product_detail via key--}}
        {!! Form::open(['route' => ['products.update', $product_detail['id']],'method' => 'put' ]) !!}
        {{-- @method('PUT')--}}
        {{-- @csrf--}}

        {!! Form::text('name', $product_detail['name']); !!}
        {!! Form::text('sku', $product_detail['sku']); !!}
        {!! Form::textarea('description', $product_detail['description']); !!}
        {!! Form::number('price', $product_detail['price']); !!}
        {!! Form::checkbox('active', 'value', $product_detail['active'] ? true : false); !!}
        {!! Form::checkbox('subscribe', 'value', $product_detail['subscribe'] ? true : false); !!}
        {!! Form::submit('Update'); !!}

        {!! Form::close() !!}

        {{--<a style="color: red;" href="{{ route( 'products.destroy', ['id' => $product_detail['id'] ] ) }}">DELETE</a>--}}



        <form action="{{ route( 'products.destroy', $product_detail['id'] ) }}" method="POST">
            {{ method_field('delete') }}
            {{ csrf_field() }}
            <button class="btn btn-default btn-danger" type="submit">Delete</button>
        </form>

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
