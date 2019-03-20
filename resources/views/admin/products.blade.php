@extends('layouts.app')

@section('section')
    @if(isset($products))

        {{ $products['total'] }}
        <table class="table">

            @foreach($products['data'] as $product)
                <tr>
                    <td><a href="{{ route( 'product', ['id' => $product['id'] ] ) }}">{{$product['name']}}</a></td>
                    <td>{{$product['sku']}}</td>
                    <td>{{$product['description']}}</td>
                    <td>{{$product['price']}}</td>
                    <td>{{$product['active']}}</td>
                </tr>

            @endforeach

        </table>

        {{--{{ $products->render() }}--}}
       <ul>
        <li><a href="{{ $products['prev_page_url'] }}">prev</a></li>
        <li><a href="{{ $products['next_page_url'] }}">next</a></li>
       </ul>
           <a href="{{ route('create.product') }}">CREATE</a>
    @endif


    @if (\Route::current()->getName() === 'create.product')
        {!! Form::open(['route' => ['store.products' ],'method' => 'post' ]) !!}

        {!! Form::text('name', ''); !!}
        {!! Form::text('sku', ''); !!}
        {!! Form::textarea('description', ''); !!}
        {!! Form::number('price', ''); !!}
        {!! Form::checkbox('active', 'value'); !!}
        {!! Form::checkbox('subscribe', 'value'); !!}
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
        {!! Form::open(['route' => ['edit.product', $product_detail['id']],'method' => 'put' ]) !!}
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
