@extends('layouts.admin.admin-10-2')

@include('admin.materials.edit.sections.stylesheet')
@include('admin.materials.edit.sections.pageHeader')
@include('admin.materials.edit.sections.breadcrumb')
@include('admin.materials.edit.sections.sidebar')
@include('admin.materials.edit.sections.blocks')
@include('admin.materials.edit.sections.formBegin')
@include('admin.materials.edit.sections.formEnd')

@section ('content')

   @include('admin.materials.forms.form')
   @include('admin.materials.help')

@endsection