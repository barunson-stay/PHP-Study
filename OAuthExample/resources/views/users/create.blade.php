@extends('layouts.app')

@section('content')
    <form action="{{ route('users.store') }}" method="POST" role="form" class="form__auth">
        {!! csrf_field() !!}

        @if ($return = request('return'))
            <input type="hidden" name="return" value="{{ $return }}">
        @endif

        <div class="page-header">
            <h4>회원가입</h4>
            <p class="text-muted">
                깃허브 계정으로 로그인하면 회원가입이 필요없습니다.
            </p>
        </div>

        <div class="form-group {{ $errors->has('name') ? 'has-error' : '' }}">
            <input type="text" name="name" class="form-control" placeholder="이름" value="{{ old('name') }}" autofocus/>
            {!! $errors->first('name', '<span class="form-error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
            <input type="email" name="email" class="form-control" placeholder="이메일" value="{{ old('email') }}"/>
            {!! $errors->first('email', '<span class="form-error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <input type="password" name="password" class="form-control" placeholder="비밀번호"/>
            {!! $errors->first('password', '<span class="form-error">:message</span>') !!}
        </div>

        <div class="form-group {{ $errors->has('password') ? 'has-error' : '' }}">
            <input type="password" name="password_confirmation" class="form-control" placeholder="비밀번호 확인" />
            {!! $errors->first('password_confirmation', '<span class="form-error">:message</span>') !!}
        </div>

        <div class="form-group" style="margin-top: 2em;">
            <button class="btn btn-primary btn-lg btn-block" type="submit">가입하기</button>
        </div>
    </form>
@stop
