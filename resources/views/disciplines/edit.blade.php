@extends('layouts.app')
@section('title', 'Disciplines')

@section('content')
    <div class="row wrapper border-bottom white-bg page-heading">
        <div class="col-lg-10">
            <h2>Disciplines</h2>
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('dashboard.index') }}">Home</a>
                </li>
                <li class="breadcrumb-item">
                    <a href="{{ route('settings.disciplines.index') }}">Settings</a>
                </li>
                <li class="breadcrumb-item active">
                    <strong>Disciplines</strong>
                </li>
            </ol>
        </div>
        <div class="col-lg-2 mt-5">
            <a href="{{ url()->previous() }}" class="btn btn-primary pl-3 pr-3">
                <i class="fa fa-backward"></i>
                Back
            </a>
        </div>

    </div>
    <div class="wrapper wrapper-content animated fadeInRight">
        <div class="row">
            <div class="col-lg-12">
                <div class="ibox ">
                    <div class="ibox-title">
                        <h5>Edit Discipline {{ $discipline->name }}</h5>
                        <div class="ibox-tools">
                        </div>
                    </div>
                    <div class="ibox-content">
                        <form action="{{ route('settings.disciplines.update', $discipline->id) }}" method="post">
                            @csrf
                            @method('PUT')

                            <div class="row">
                                <div class="col-md-6">
                                    <x-input-label for="code">Code</x-input-label>
                                    <x-text-input id="code" class="{{ $errors->has('code') ? 'is-invalid' : '' }}"
                                                  name="code" value="{{ old('code') ?: $discipline->code  }}" autofocus placeholder="Discipline Code..." autocomplete="off" />
                                    @error('code')
                                    <x-input-error>{{ $message }}</x-input-error>
                                    @enderror
                                </div>
                                <div class="col-md-6">
                                    <x-input-label for="name">Name<sup class="text-danger">*</sup></x-input-label>
                                    <x-text-input id="name" class="{{ $errors->has('name') ? 'is-invalid' : '' }}"
                                                  name="name" value="{{ old('name') ?: $discipline->name }}" placeholder="Discipline Name..." autocomplete="off" />
                                    @error('name')
                                    <x-input-error>{{ $message }}</x-input-error>
                                    @enderror
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary mt-3"><i class="fa fa-save"></i> Update Discipline {{ $discipline->name }}</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
