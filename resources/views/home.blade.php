@extends('layouts.app')

@section('title-block')Главная Страница@endsection

@section('content')
 <H1>Головна Сторінка</H1> 
 <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Dignissimos at labore iste corporis quia magnam obcaecati dolorem quas commodi, ipsum sunt cum distinctio et! Autem dolores aspernatur eius possimus doloremque?</p>  
@endsection

@section('aside')
 @parent
 <p>Додатковий текст</p>
 @endsection
 