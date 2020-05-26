@extends('admin.layouts.admin')

@section('discord-link', 'Arden config')

@section('content')
    <div class="card shadow mb-4">
        <div class="card-body">
        <form action="{{ route('admin.themes.config', $theme) }}" method="POST">
                @csrf
                <h3>Général</h3>

                <div class="form-group">
                    <label for="titleInput">{{ trans('theme::arden.config.title') }}</label>
                    <input type="text" class="form-control @error('title') is-invalid @enderror" id="titleInput" name="title" value="{{ old('title', config('theme.title')) }}">

                    @error('title')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>

                <br>
                <h3>Réseaux</h3>
                <div class="form-group">
                    <label for="discord-linkInput">{{ trans('theme::arden.config.discord-link') }}</label>
                    <input type="text" class="form-control @error('discord-link') is-invalid @enderror" id="discord-linkInput" name="discord-link" value="{{ old('discord-link', config('theme.discord-link')) }}">

                    @error('discord-link')
                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                    @enderror
                </div>
                <button type="submit" class="btn btn-primary"><i class="fas fa-save"></i> {{ trans('messages.actions.save') }}</button>
            </form>
        </div>
    </div>
@endsection