@props([
    'class'       => '',
    'size'        => '',
    'textSize'    => '',
    'color'       => '',
    'text_color'  => '',
    'name'        => '',
    'tag'         => '',
    'is_disabled' => '',
    'title'       => '',
    'button_type' => '',
])

<x-hive-form-button class="group transition ease-in-out duration-200 {{$class}}" textSize="{{$textSize}}" size="{{$size}}" color="{{$color}}" text_color="{{$text_color}}" name="{{$name}}" tag="{{$tag}}" is_disabled="{{$is_disabled}}" title="{{$title}}" button_type="{{$button_type}}">
  {{ $slot }}
    <span aria-hidden="true" class="inline-block ml-2 translate-x-0 group-hover:translate-x-1 transition-transform ease-in-out duration-200">
      <svg class="h-5 w-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
      </svg>
    </span>
</x-hive-form-button>
