@extends('layouts.app')

@section('navTitle',$project->name)
@section('navTitleRoute',route('projects_show',$project))

@include('files.files-navbar')

@section('content')

    <x-file-name-form
        method="PUT"
        action="{{route('projects_files_storeAs',[$project,$file])}}"
        cancelRoute="{{route('projects.files.edit',[$project,$file])}}"
        submitText="Save as"
        description="Save file as."
        filename="{{$file->name}}"
    ></x-file-name-form>

@endsection
