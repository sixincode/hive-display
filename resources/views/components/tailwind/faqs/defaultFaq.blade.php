@props(['active' => '', 'classFaq' => '', 'width' => '', 'class' => ''])

@php
  $classFaq='mt-2 relative w-full mx-auto overflow-hidden text-sm font-normal bg-white divide-y divide-slate-100';
  $class = '';
  $buttonClassActive = 'border-blue-500 text-blue-600';
@endphp
<div x-data="{
 activeAccordion: '',
 setActiveAccordion(id) {
 this.activeAccordion = (this.activeAccordion == id) ? '' : id
 }
}" class="{{$class}} {{$classFaq}}">
  {{$slot}}
 </div>
